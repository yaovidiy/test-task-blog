<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class PostModel extends BaseModel
{
    public function getPostData(int $id)
    {
        $sql = "SELECT p.*, c.name AS category_name 
                FROM posts p 
                JOIN categories c ON p.category_id = c.id 
                WHERE p.id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue('id', $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function incrementPostViews(int $id)
    {
        $sql = "UPDATE posts SET views = views + 1 WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute(['id' => $id]);
    }
}