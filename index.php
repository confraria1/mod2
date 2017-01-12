<?php

/**
 * Versão 2.0
 */
require './_app/config.php';
require './_app/useful/Core.php';
require './_app/useful/Useful.php';
require './_app/models/Database.php';

if (isset($_SERVER['PATH_INFO'])) {

    $page = $_SERVER['PATH_INFO'];

    if (substr_count($page, '/') > 0) {
        $urlParts = explode('/', $page);
        $page = $urlParts[1];
    }

    if (in_array($page, $pagesNames) && file_exists('_app/controllers/' . $page . '.php')) {
        require '_app/controllers/' . $page . '.php';
        $page = ucfirst($page);
        $c = new $page();
        $c->index();
    } else {
        require '_app/controllers/Not_found.php';
        $c = new Not_found();
        $c->index();
    }
} else {

    require '_app/controllers/home.php';
    $c = new Home();
    $c->index();
}
