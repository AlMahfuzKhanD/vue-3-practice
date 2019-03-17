<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 17-Mar-19
 * Time: 8:49 PM
 */

class Session {

    private $signed_in;
    public $user_id;


    function __construct()
    {
        session_start();
    }

    private function check_the_login(){ //check if the session user id is set
        if(isset($_SESSION['user_id'])){
            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
        }else{
            unset($this->user_id);
            $this->signed_in = false;
        }
    }

}


$session = new Session();