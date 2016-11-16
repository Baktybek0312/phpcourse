<?php
/**
 * Created by akoikelov
 */

spl_autoload_register(function($className) {
    $file = __DIR__ .'/' .str_replace("\\", "/", $className) .'.php';

    if (!file_exists($file)) {
        die("File $file doesn't wxist");
    }

    require_once $file;
});
