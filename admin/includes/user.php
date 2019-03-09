<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 13-Feb-19
 * Time: 11:34 PM
 */


class User{
    public static function find_all_users(){
        //global $database;
        //$result_set = $database->query("SELECT * FROM users");
        //return $result_set;
        
        return self::find_this_query("SELECT * FROM users");
        


    }


    public static function find_users_by_id(){
    	global $database;
    	$result_user_id = $database->query("SELECT * FROM users WHERE id=3");
    	return $result_user_id;
    }

    public static function find_users_by_id_with_parameter($user_id){
    	global $database;
    	$result_user_id = $database->query("SELECT * FROM users WHERE id=$user_id LIMIT 1");
    	$find_user = mysqli_fetch_array($result_user_id);
    	return $find_user;
    }

    public static function find_this_query($sql){
    	global $database;
    	$result_set = $database->query($sql);
    	return $result_set;
    }
}