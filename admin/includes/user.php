<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 13-Feb-19
 * Time: 11:34 PM
 */




class User{

	public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;

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

    public static function find_this_query($sent_sql){
    	global $database;
    	$result_set = $database->query($sent_sql);
    	return $result_set;
    }


    public static function instantiation($calling_by_id){ //this method is used to instantiate class
    	$the_object = new self;

             $the_object->id = $calling_by_id['id'];
             $the_object->username = $calling_by_id['username'];
             $the_object->password = $calling_by_id['password'];
             $the_object->first_name = $calling_by_id['first_name'];
             $the_object->last_name = $calling_by_id['last_name'];


             return $the_object;
    }
}