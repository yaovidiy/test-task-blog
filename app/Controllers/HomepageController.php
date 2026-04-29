<?php
declare(strict_types= 1);

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategoryModel;

class HomepageController extends BaseController
{

    public function index()
    {
        $categoriesWithPosts = new CategoryModel()->listAllCategoriesWithPosts();

        $grouppedCategories = [];

        foreach($categoriesWithPosts as $category) {
            $grouppedCategories[$category['category_name']][] = $category;
        }

        $this->assign('categories', $grouppedCategories);
        $this->display('index.tpl');
    }
}
