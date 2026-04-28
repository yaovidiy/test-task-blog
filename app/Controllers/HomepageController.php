<?php
declare(strict_types= 1);

namespace App\Controllers;
use App\Controllers\BaseController;

class HomepageController extends BaseController
{

    public function index()
    {
        $this->assign('name', 'Ted');
        $this->display('index.tpl');
    }

    public function show(string $name)
    {
        echo('Post name is '. $name);
    }
}
