<?php
/**
 * Created by PhpStorm.
 * User: OWNER
 * Date: 21.11.2016
 * Time: 19:23
 */

namespace DB;


class UserModel
{

    protected $dblink;

    public function __construct($dbHost, $dbUser, $dbPass, $dbName)
    {
        $this->dblink = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        if (!$this->dblink) {
            die("cannot connect to database");
        }
    }

    public function  create($login,$password, $fileName){
        $now = date('Y-m-d h:i:s');
        $codedPassword = md5($password);
        $sql = "insert into user (login, password, created_at, image_file_name) values ('$login', '$codedPassword', '$now', '$fileName')";
        mysqli_query($this->dblink, $sql);

        if (mysqli_affected_rows($this->dblink) != 0) {
            return true;
        }

        return false;
    }

    public function findByLoginAndPassword($login,$password){
        $codedPassword = md5($password);
        $sql = "SELECT * FROM user where login='$login' and password='$codedPassword'";
        $result= mysqli_query($this->dblink, $sql);
        return mysqli_fetch_assoc($result);

    }

    public function findByLogin($login) {
        $sql = "SELECT * FROM user where login='$login' ";
        $result= mysqli_query($this->dblink, $sql);
        return mysqli_fetch_assoc($result);
    }
}