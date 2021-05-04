<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
        require "./crud/user.php";
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        $name = $_POST['name'];
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        $user_data = array("name" => $name,
                            "email" => $email ,
                            "password" => $password,

                            "role"=> "teacher",
                   
                            
                            );

                            

        $user = new User();
        $users = $user->addUser($user_data);
        header('Location:view-edit-teachers.php');

        
        }
?>
<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Teacher</title>
    <meta name="description" content="Create Teacher">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- start Left Panel -->
    <?php
            require "menu_left.php";
        ?>
    <!-- end left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Start Header-->
        <?php
                require "header.php";

            ?>

        <!--End Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>View & Edit teachers</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li class="active">Teachers data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Add <strong>Teacher</strong>
                            </div>
                            <div class="card-body card-block">

                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Static</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">User Teacher</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input"
                                                class=" form-control-label">First Name</label>
                                        </div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input"
                                                value="<?php (isset($_POST['name'])) ? $_POST['name']:'' ?>" name="name"
                                                placeholder="First Name" class="form-control"><small
                                                class="form-text text-muted">Please write Full name</small></div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input"
                                                class=" form-control-label">Email</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="email-input"
                                                value="<?php (isset($_POST['email'])) ? $_POST['email']:'' ?>"
                                                name="email" placeholder="Enter Email" class="form-control">
                                            <small class="help-block form-text">Please enter your email</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input"
                                                class="form-control-label">Password</label>
                                        </div>
                                        <div class="col-12 col-md-9"><input type="password" id="password-input"
                                                value="<?php (isset($_POST['password'])) ? $_POST['password']:'' ?>"
                                                name="password" placeholder="Password" class="form-control"><small
                                                class="help-block form-text">Please
                                                enter
                                                a complex password</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="Confirm-input"
                                                class="form-control-label">Confirm password</label>
                                        </div>
                                        <div class="col-12 col-md-9"><input type="password" id="Confirm-input"
                                                value="<?php (isset($_POST['confirmPassword'])) ? $_POST['confirmPassword']:'' ?>"
                                                name="confirmPassword" placeholder="confirm password"
                                                class="form-control"><small class="help-block form-text">Please
                                                enter
                                                a complex Confirm</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="disabled-input" class=" form-control-label">Phone Number</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="disabled-input"
                                                value="<?php (isset($_POST['mobile'])) ? $_POST['mobile']:'' ?>"
                                                name="mobile" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="government" class=" form-control-label">Government</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input"
                                                value="<?php (isset($_POST['government'])) ? $_POST['government']:'' ?>"
                                                name="government" class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>