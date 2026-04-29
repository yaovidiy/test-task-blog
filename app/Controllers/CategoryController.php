<?php
declare(strict_types= 1);

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    public function listAllCategoryPosts(string $slug)
    {
        $currentPage = $_GET['page'] ?? '1';
        $showLates = (int)($_GET['latest'] ?? 1) === 1;

        $posts = new CategoryModel()->listAllCategoryPostsWithPaggination($slug, $currentPage, $showLates);

        $this->assign('pagginatedPosts', $posts);
        $this->assign('title', ucfirst($slug) . " Posts");
        $this->assign('header', ucfirst($slug));
        $this->assign('show_latest', (int)($_GET['latest'] ?? 1));
        $this->setCaching(\Smarty\Smarty::CACHING_OFF);
        
        $this->display('category.tpl');
    }
}