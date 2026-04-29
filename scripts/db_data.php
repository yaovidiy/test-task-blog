<?php
declare(strict_types=1);

// Database configuration based on scripts/migrate.php
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
} catch (PDOException $e) {
    echo "[\033[31mDB ERROR\033[0m] " . $e->getMessage() . PHP_EOL;
    exit(1);
}

/**
 * Prints a formatted text table for given array of rows.
 */
function printTable(string $tableName, array $rows): void {
    echo "\n\033[1;36m=== Table: $tableName ===\033[0m\n";
    if (empty($rows)) {
        echo "No data found.\n";
        return;
    }
    
    // Get column names
    $columns = array_keys($rows[0]);
    
    // Calculate column widths
    $widths = [];
    foreach ($columns as $col) {
        $widths[$col] = strlen((string)$col);
    }
    foreach ($rows as $row) {
        foreach ($columns as $col) {
            // Null coalesce to empty string for null values
            $val = $row[$col] ?? '';
            $len = strlen((string)$val);
            if ($len > $widths[$col]) {
                // limit max width to prevent breaking the terminal formatting
                $widths[$col] = min($len, 50); 
            }
        }
    }
    
    // Print header
    $header = "";
    $separator = "";
    foreach ($columns as $col) {
        $header .= str_pad((string)$col, $widths[$col] + 2) . "| ";
        $separator .= str_repeat("-", $widths[$col] + 2) . "+-";
    }
    echo "\033[1;33m" . rtrim($header, "| ") . "\033[0m\n";
    echo rtrim($separator, "+-") . "\n";
    
    // Print rows
    foreach ($rows as $row) {
        $line = "";
        foreach ($columns as $col) {
            $val = (string)($row[$col] ?? '');
            // truncate string if too long
            if (strlen($val) > 50) {
                // replacing newlines so they don't break table rows
                $val = str_replace(["\r", "\n"], ' ', $val);
                $val = mb_substr($val, 0, 47) . "...";
            }
            $line .= str_pad($val, $widths[$col] + 2) . "| ";
        }
        echo rtrim($line, "| ") . "\n";
    }
    echo "\n";
}

// Fetch and print categories
try {
    $stmt = $pdo->query("SELECT * FROM categories");
    $categories = $stmt->fetchAll();
    printTable('categories', $categories);
} catch (PDOException $e) {
    echo "[\033[31mERROR\033[0m] Could not fetch categories: " . $e->getMessage() . PHP_EOL;
}

// Fetch and print posts
try {
    $stmt = $pdo->query("SELECT * FROM posts");
    $posts = $stmt->fetchAll();
    printTable('posts', $posts);
} catch (PDOException $e) {
    echo "[\033[31mERROR\033[0m] Could not fetch posts: " . $e->getMessage() . PHP_EOL;
}
