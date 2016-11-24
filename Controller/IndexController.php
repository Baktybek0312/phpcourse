<?php
/**
 * Created by akoikelov
 */

namespace Controller;


class IndexController {

    public function index() {
        $news = array("first", "second");
        $a = 1;
        require_once TEMPLATES_DIR .'/index.php';
    }

    public function news() {

    }

}