<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class PostModel extends BaseModel
{
    public function getPostData(int $id)
    {
        $sql = "SELECT p.*, c.name AS category_name, c.id as category_id 
                FROM posts p 
                JOIN categories c ON p.category_id = c.id 
                WHERE p.id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue('id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $postData = $stmt->fetch(PDO::FETCH_ASSOC);

        $similarSQL = "SELECT p.*
                       FROM posts p
                       JOIN categories c ON p.category_id = c.id
                       WHERE c.id = :category_id
                       AND p.id != :current_post_id
                       ORDER BY p.views DESC
                       LIMIT 3";
        $similarSTMT = $this->pdo->prepare($similarSQL);

        $similarSTMT->bindValue('category_id', $postData['category_id']);
        $similarSTMT->bindValue('current_post_id', $id);
        
        $similarSTMT->execute();

        $similarData = $similarSTMT->fetchAll(PDO::FETCH_ASSOC);

        return [
            'post' => $postData,
            'similar' => $similarData
        ];
    }

    public function incrementPostViews(int $id)
    {
        $sql = "UPDATE posts SET views = views + 1 WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute(['id' => $id]);
    }
}