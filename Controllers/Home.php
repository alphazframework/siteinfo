<?php

namespace App\Components\siteinfo\Controllers;

use Zest\Component\View\View;

define('__SITEINFO__', 'siteinfo/Views/');

class Home extends \Zest\Controller\Controller
{
    
    /**
     * Show the index page.
     *
     * @return void
     */
    public function index()
    {
        View::rander(__SITEINFO__.'Home/index');
    }
}
