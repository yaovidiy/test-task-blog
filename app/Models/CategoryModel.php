<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class CategoryModel extends BaseModel
{
    public function listAllCategoriesWithPosts()
    {
        $sql = "WITH RankedPosts AS (
            SELECT
                p.id,
                p.image,
                p.name as post_name,
                c.name as category_name,
                p.views,
                p.category_id,
                p.text,
                c.slug as category_slug,
                p.published_at,
                ROW_NUMBER() OVER (
                    PARTITION BY p.category_id
                    ORDER BY p.views DESC, p.published_at DESC
                ) as post_rank
            FROM posts p
            JOIN categories c ON p.category_id = c.id
        )
        SELECT * FROM RankedPosts
        WHERE post_rank <= 3
        ORDER BY category_name
        ";

        $statement = $this->pdo->query($sql);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listAllCategoryPostsWithPaggination($category_slug)
    {
        $sql = "SELECT id FROM categories WHERE slug = ?";
    }
}