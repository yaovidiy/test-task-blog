<?php
namespace App\Models;

use App\Config\Database;

class BaseModel
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }
}
