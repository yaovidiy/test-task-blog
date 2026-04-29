<?php
declare(strict_types=1);

readonly class MigrationRunner {
    public function __construct(
        private PDO $pdo,
        private string $migrationsPath
    ) {}

    public function run(): void {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration_name VARCHAR(255) NOT NULL,
            executed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB");

        $executed = $this->pdo->query("SELECT migration_name FROM migrations")
                              ->fetchAll(PDO::FETCH_COLUMN);

        $files = glob($this->migrationsPath . "/*.sql");
        sort($files);

        $count = 0;
        foreach ($files as $file) {
            $name = basename($file);
            if (in_array($name, $executed)) continue;

            echo "[\033[32mRUNNING\033[0m] $name" . PHP_EOL;
            
            $this->pdo->beginTransaction();
            try {
                $sql = file_get_contents($file);
                if (empty(trim($sql))) {
                    throw new Exception("File is empty");
                }

                $this->pdo->exec($sql);
                
                $stmt = $this->pdo->prepare("INSERT INTO migrations (migration_name) VALUES (?)");
                $stmt->execute([$name]);
                
                if ($this->pdo->inTransaction()) {
                    $this->pdo->commit();
                }
                $count++;
            } catch (Throwable $e) {
                if ($this->pdo->inTransaction()) {
                    $this->pdo->rollBack();
                }
                echo "[\033[31mFAILED\033[0m]  $name: " . $e->getMessage() . PHP_EOL;
                exit(1); // Exit with error code
            }
        }

        echo $count > 0 ? "\033[32mSuccessfully finished $count migrations.\033[0m" . PHP_EOL : "No new migrations to run." . PHP_EOL;
    }
}


$dbConfig = [
    'host' => '127.0.0.1',
    'db'   => 'my_app',
    'user' => 'root',
    'pass' => 'root_password',
    'port' => '3306',
];

$dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['db']};port={$dbConfig['port']};charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['pass'], $options);
    
    $migrationsPath = __DIR__ . '/../migrations';
    if (!is_dir($migrationsPath)) {
        mkdir($migrationsPath);
    }

    $runner = new MigrationRunner($pdo, $migrationsPath);
    $runner->run();

} catch (PDOException $e) {
    echo "[\033[31mDB ERROR\033[0m] " . $e->getMessage() . PHP_EOL;
    exit(1);
}