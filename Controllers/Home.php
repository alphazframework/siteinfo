<?php

namespace App\Components\siteinfo\Controllers;

use Zest\Component\View\View;


define("__siteinfo__", 'siteinfo/Views/');

class Home extends \Zest\Controller\Controller
{
    
    /**
     * Show the index page.
     *
     * @return void
     */
    public function index()
    {
        View::rander(__siteinfo__.'Home/index');
    }
}
