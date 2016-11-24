<?php
/**
 * Created by akoikelov
 */

require_once "autoload.php";

define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "phpcourse");
define("TEMPLATES_DIR", __DIR__ .'/templates');
define("UPLOADS_DIR", __DIR__ .'/uploads');

$routing = array(
    "/"  => array("Controller\\IndexController", "index"),
    "/login"  => array("Controller\\AuthController", "login"),
    "/register"  => array("Controller\\AuthController", "register"),
    "/loginsuccess"  => array("Controller\\AuthController", "loginSuccess"),
    "/logout"  => array("Controller\\AuthController", "logout"),

);

$uri = $_SERVER["REQUEST_URI"];
//echo $uri;

session_start();

header("charset=utf-8");

if (array_key_exists($uri, $routing)) {
    call_user_func($routing[$uri]);
} else {
    echo "Page not found";
}
