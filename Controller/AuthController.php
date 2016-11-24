<?php
/**
 * Created by akoikelov
 */

namespace Controller;


use DB\UserModel;

class AuthController {

    public function login() {
        $method =  $_SERVER["REQUEST_METHOD"];
        if ($method == "GET") {
            require_once TEMPLATES_DIR .'/login.php';
            return;
        }
        $login = $_POST["login"];
        $password = $_POST["password"];
        $model = new UserModel(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $user = $model->findByLoginAndPassword($login, $password);
        if (!$user) {
            header("Location: /login");
            return;
        }
        $_SESSION["user"] = $user;
        header("Location: /");
    }

    public function logout() {
        unset($_SESSION["user"]);
        header("Location: /");
        return;
    }

    public function register()
    {
        $method = $_SERVER["REQUEST_METHOD"];
        if ($method == "GET") {
            require_once TEMPLATES_DIR . '/register.php';
            return;
        }

        $login = $_POST["login"];
        $password = $_POST["password"];
        $model = new UserModel(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $file = $_FILES["image"];
        $fileName = $file["name"];
        $tmpName = $file["tmp_name"];
        $result = move_uploaded_file($tmpName, UPLOADS_DIR . "/$fileName");


        if ($model->create($login, $password,
            $fileName)) {
            header("Location: /loginsuccess");
        } else {
            header("Location: /");
        }
    }

    public function loginSuccess() {
        require_once TEMPLATES_DIR ."/login_success.php";
    }

}