<?php

define('FRONT', true);
define('INSTALL_DIR', '/BIT/ND9_Objektai/front/');

// _l(str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));
$route = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);

if ('first' == $route) {
    require __DIR__.'/pages/first.php';
}
if ('second' == $route) {
    require __DIR__.'/pages/second.php';
}
if ('third' == $route) {
    require __DIR__.'/pages/third.php';
}
if ('fourth' == $route) {
    require __DIR__.'/pages/fourth.php';
}
