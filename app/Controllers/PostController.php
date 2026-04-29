<?php
declare(strict_types= 1);

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PostModel;

class PostController extends BaseController
{
    public function show(string $id)
    {
        $postModel = new PostModel();

        $postModel->incrementPostViews((int)$id);

        $postData = $postModel->getPostData((int)$id);

        $this->assign('post', $postData['post']);
        $this->assign('similar_posts', $postData['similar']);

        $this->setCaching(\Smarty\Smarty::CACHING_OFF);

        $this->display('post.tpl');
    }
}