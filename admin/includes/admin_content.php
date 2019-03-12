<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php


            include ("user.php");
            
            $result_set = User::find_all_users(); // static methods are called by writing first letter of class in capital letter and two clone like :: ... it is used to avoid instantiating object of class

            /*while ($row = mysqli_fetch_array($result_set)){

                echo $row['username'] . "<br>";
            }

            $result_id = User::find_users_by_id();
            while ($row = mysqli_fetch_array($result_id)) {
                echo "when id is". " ". $row['id']. " " . "user name is". " " . $row['username'] . "<br>";
            }*/

            $calling_by_id = User::find_users_by_id_with_parameter(1);

             $user = User::instantiation($calling_by_id);


             echo $user->username;
            










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