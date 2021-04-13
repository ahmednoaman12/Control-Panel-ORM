<?php require "./crud/user.php";
if(!isset( $_GET["id"])){
    echo "Sorry you can't browse this page directly";
    die;
};
$user = new User();
$userData = $user->getUser($_GET["id"]);
if ($userData === null){
    echo "sorry this id doesn't exist in user table";
    die;
}
?>
<!doctype html>

<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>student details</title>
    <meta name="description" content="student details">
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
                        <h1>Detailed student info</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="view-edit-students.php">Students data</a></li>
                            <li class="active">Detailed student info</li>
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
                                <strong class="card-title">Detailed info</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 row">
                                        <span class="col-4">Student ID</span>
                                        <span class="col-8"><?php echo $userData["id"];
                                        ?></span>
                                        <span class="col-4"> name</span>
                                        <span class="col-8"><?php echo $userData["name"];
                                        ?></span>
                                        
                                        <span class="col-4">Email</span>
                                        <span class="col-8"><?php echo $userData["email"];
                                        ?></span>
                                    </div>
                                    <div class="col-md-12 row">
                                       
                                        <span class="col-6">Creation date</span>
                                        <span class="col-6"><?php echo $userData["created_at"];
                                        ?></span>
                                        <span class="col-6">Last modification date</span>
                                        <span class="col-6"><?php echo $userData["updated_at"];
                                        ?></span>

                                    </div>
                                    <span class="col-12 text-right">
                                        <a href="student-edit.php?id=<?php echo $userData["id"] ?>"
                                            class="btn btn-warning ml-auto">Edit
                                            student</a>
                                        <a href="student-delete.php?id=<?php echo $userData["id"]?>" class=" btn
                                            btn-danger">Delete student</a>
                                    </span>
                                </div>
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