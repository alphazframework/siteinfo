<?php

//namespace required to define your component you can add many routes in one component as well
$namespace = "App\Components\siteinfo\Controllers";
$com->get('zestinfo', "Home@index@{$namespace}");
