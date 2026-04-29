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

    public function listAllCategoryPostsWithPaggination(string $category_slug, string $page, bool $showLatest = true)
    {
        $limit = 6;
        $offset = 0;

        if ($page !== '1') {
            $offset = ((int)$page - 1) * $limit;
        }

        $orderBy = "p.published_at DESC";

        if (!$showLatest) {
            $orderBy = "p.views DESC";
        }

        $totalSQL = "SELECT COUNT(*)
                    FROM posts p
                    JOIN categories c ON p.category_id = c.id
                    WHERE c.slug = :slug
        ";

        $totalstmt = $this->pdo->prepare($totalSQL);
        
        $totalstmt->execute(['slug' => $category_slug]);

        $totalPostsCount = (int)$totalstmt->fetchColumn();

        $sql = "SELECT p.*, c.name as category_name, c.description as category_description
            FROM posts p 
            JOIN categories c ON p.category_id = c.id
            WHERE c.slug = :slug
            ORDER BY {$orderBy}, p.name ASC
            LIMIT :limit OFFSET :offset
        ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':slug', $category_slug);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

        $stmt->execute();

        $totalPages = (int)ceil($totalPostsCount / $limit);

        $pagginatedResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $currentPage = max(1, min($totalPages, (int)($_GET['page'] ?? 1)));

        return [
            'total_items' => $totalPostsCount,
            'total_pages' => $totalPages,
            'current_page' => (int)$page,
            'items' => $pagginatedResult,
            'category_data' => [
                'name' => $pagginatedResult['0']['category_name'],
                'description' => $pagginatedResult['0']['category_description']
            ],
            'per_page' => $limit,
            'has_next' => $currentPage < $totalPages,
            'has_prev' => $currentPage > 1
        ];
    }
}