<?php
define("DOCROOT", $_SERVER["DOCUMENT_ROOT"]);
include DOCROOT . '/functions.inc';

$page = empty($_GET['page']) ? "main" : $_GET['page'];

$_ROUTES = [
    "main"=>"main.main",
    "about"=>"main.about",
    "photo"=>"main.photo",
    "news"=>"main.news",
    "contacts"=>"main.contacts",
    "404"=>"404.error"
];
;

if(empty($_ROUTES[$page])) {
    $page = '404';
}
list($logicpage,$pagefunc) = explode(".",$_ROUTES[$page]);


loadPage($logicpage,$pagefunc);



