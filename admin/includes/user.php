<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 13-Feb-19
 * Time: 11:34 PM
 */


class User{
    public function find_all_users{
        global $database;
        $result_set = $database->query("SELECT * FROM users");
        return $result_set;
    }
}