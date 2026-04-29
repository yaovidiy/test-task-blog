<?php
namespace App\Config;

use PDO;
use PDOException;

class Database
{
    private string $host;
    private string $db;
    private string $username;
    private string $password;
    private ?PDO $pdo = null;
    private static ?Database $instance = null;

    private function __construct()
    {
        $this->host = (string) getenv('DB_HOST');
        $this->db = (string) getenv('DB_DATABASE');
        $this->username = (string) getenv('DB_USERNAME');
        $this->password = (string) getenv('DB_PASSWORD');
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        if ($this->pdo) {
            return $this->pdo;
        }

        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=UTF8";

        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);

            return $this->pdo;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}