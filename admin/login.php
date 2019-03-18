<?php require_once("includes/header.php"); ?>
<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 18-Mar-19
 * Time: 1:44 PM
 */
if($session->is_signed_in()){
    redirect("index.php");
}
if(isset($_POST['submit'])){
    $username = trim($_POST['username']); // trim is used to remove white space and other predefined characters from both side of string
    $password = trim($_POST['password']);

    // Method to check database user
    $user_found = User::verify_user($username,$password);

    if($user_found){
        $session->login($user_found);
        redirect("index.php");
    }else{
        $the_message = "Username of Password Incorrect";
    }
}else{
    $the_message = "";
    $username = "";
    $password = "";
}
?>

<div class="col-md-4 col-md-offset-3">

    <h4 class="bg-danger"><?php echo $the_message; ?></h4>

    <form id="login-id" action="" method="post">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo htmlentities($username); ?>" >

        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo htmlentities($password); ?>"> <!--html entities used to clean string-->

        </div>


        <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </div>


    </form>


</div>
