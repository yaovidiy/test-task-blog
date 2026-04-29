<?php
declare(strict_types=1);

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

    $pdo->exec("SET FOREIGN_KEY_CHECKS = 0;");
    $pdo->exec("TRUNCATE TABLE posts;");
    $pdo->exec("TRUNCATE TABLE categories;");
    $pdo->exec("SET FOREIGN_KEY_CHECKS = 1;");

    // Generate 5 categories
    $categories = [
        ['name' => 'Technology', 'slug' => 'technology', 'description' => 'All about the latest in tech.'],
        ['name' => 'Lifestyle', 'slug' => 'lifestyle', 'description' => 'Tips and tricks for a better life.'],
        ['name' => 'Travel', 'slug' => 'travel', 'description' => 'Explore the world with us.'],
        ['name' => 'Food', 'slug' => 'food', 'description' => 'Delicious recipes and food reviews.'],
        ['name' => 'Health', 'slug' => 'health', 'description' => 'Stay fit and healthy.'],
    ];

    $stmtCat = $pdo->prepare("INSERT INTO categories (name, slug, description) VALUES (?, ?, ?)");
    
    $categoryIds = [];
    foreach ($categories as $cat) {
        $stmtCat->execute([$cat['name'], $cat['slug'], $cat['description']]);
        $categoryIds[] = (int)$pdo->lastInsertId();
    }

    echo "Inserted 5 categories.\n";

    // Generate 10 posts per category
    $stmtPost = $pdo->prepare("INSERT INTO posts (image, name, text, views, category_id) VALUES (?, ?, ?, ?, ?)");

    $postCount = 0;
    foreach ($categoryIds as $categoryId) {
        for ($i = 1; $i <= 10; $i++) {
            $image = "https://picsum.photos/seed/" . rand(1, 1000) . "/800/600";
            $name = "Post $i for Category $categoryId";
            $text = "This is the content for post $i in category $categoryId. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
            $views = rand(0, 1000);

            $stmtPost->execute([$image, $name, $text, $views, $categoryId]);
            $postCount++;
        }
    }

    echo "Inserted $postCount posts.\n";

} catch (PDOException $e) {
    echo "[\033[31mDB ERROR\033[0m] " . $e->getMessage() . PHP_EOL;
    exit(1);
}
