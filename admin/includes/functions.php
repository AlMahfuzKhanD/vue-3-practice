<?php


function classAutoLoader($class){  //autoloader is used to check if class declered or not.
$class = strtolower($class);
$the_path = "includes/{$class}.php";

if(is_file($the_path) && !class_exists($class)){
	include $the_path;
}

} // end of autoload

spl_autoload_register('classAutoLoader');

function redirect($location){  // this function is used to redirecting in any page
    header("Location: {$location}");
}

?>