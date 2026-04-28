<?php
declare(strict_types= 1);

namespace App\Controllers;

use Smarty\Smarty;

class BaseController extends Smarty
{
    public function __construct()
    {
        $smartyPath = __DIR__ . '/../Views/';

        parent::__construct();

        $this->setTemplateDir($smartyPath . 'templates/');
        $this->setCompileDir($smartyPath . 'templates_c/');
        $this->setConfigDir($smartyPath . 'configs/');
        $this->setCacheDir($smartyPath . 'cache/');

        $this->setEscapeHtml(true);

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    }
}