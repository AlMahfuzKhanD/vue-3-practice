<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php


            ######### testing find all user method ###########
            
           // $result_set = User::find_all_users(); // static methods are called by writing first letter of class in capital letter and two clone like :: ... it is used to avoid instantiating object of class

            /*while ($row = mysqli_fetch_array($result_set)){

                echo $row['username'] . "<br>";
            }*/

            ######### testing find user by dinamic id method ###########

            /*$result_id = User::find_users_by_id();
            while ($row = mysqli_fetch_array($result_id)) {
                echo "when id is". " ". $row['id']. " " . "user name is". " " . $row['username'] . "<br>";
            }*/

            ######### testing find user sending parameter method ###########

            //$calling_by_id = User::find_users_by_id_with_parameter(1);

             //$user = User::instantiation($calling_by_id);


             //echo $user->username;

            /*$users = User::find_all_users();
            foreach ($users as $user) {
                echo $user->username . "<br>";
            }*/


            /*$calling_by_id = User::find_users_by_id_with_parameter(1);
            echo $calling_by_id->username;*/


            ######### testing create method ###########

            /*$user = new User();
            $user->username = "Example";
            $user->password = "password";
            $user->first_name = "first_name";
            $user->last_name = "last_name";

            $user->create();*/

            ######### testing update method ###########
            //$user = new User();
            /*$user = User::find_users_by_id_with_parameter(3);
            $user->last_name = "khan";
            $user->update();*/

            ######## testing delete method ###########

            $user = User::find_users_by_id_with_parameter(4);
            $user->delete();












            ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->