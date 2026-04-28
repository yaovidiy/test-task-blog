<?php
declare(strict_types= 1);

namespace App\Controllers;

class HomepageController 
{
    public function index()
    {
        echo 'Helo homepage! ';
    }

    public function show(string $name)
    {
        echo('Post name is '. $name);
    }
}
