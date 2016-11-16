<?php
/**
 * Created by akoikelov
 */

require_once "autoload.php";

define("TEMPLATES_DIR", __DIR__ .'/templates');

$routing = array(
    "/"  => array("Controller\\IndexController", "index"),
    "/news"  => array("Controller\\IndexController", "news"),
    "/admin"  => array("Controller\\IndexController", "admin"),
);

$uri = $_SERVER["REQUEST_URI"];

if (array_key_exists($uri, $routing)) {
    call_user_func($routing[$uri]);
} else {
    echo "Page not found";
}
