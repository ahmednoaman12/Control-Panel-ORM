<?php require "./crud/group.php";
// if(!isset( $_GET["id"])){
//     echo "Sorry you can't browse this page directly";
//     die;
// };

// if ($data === null){
//     echo "sorry this id doesn't exist in user table";
//     die;
// }
$group = new Group();
$data = $group->getGroupBytId($_GET["id"]);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // $user = new User();
    $result = $group->updateGroup($_POST ,$_GET["id"] );
    header('Location:view-edit-groups.php?id='.$_GET["id"].'');
}
?>
<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student edit</title>
    <meta name="description" content="student Edit">
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
                        <h1>Detailed course info</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="view-edit-groups.php">Groups data</a></li>
                            <li><a href='group-detailed.php?id=<?php echo $_GET["id"]?>'>More actions</a></li>
                            <li class=" active">Edit group data</li>
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
                                <form method="post" class="row">
                                    <div class="col-md-6 m-5 row align-items-center">
                                        <span class="col-6 ">Course id</span>
                                        <span class="col-6"><?php echo $data["id"];
                                        ?></span>
                                        
                                        <label class="col-6 " for="description">Description</label>
                                        <input type="text" name="description" id="description" value="<?php echo $data["description"];?>">

                                        <label class="col-6 " for="max_no_student">Max number of student</label>
                                        <input type="text" name="max_no_student" id="max_no_student" value="<?php echo $data["max_no_student"];?>">

                                        <label class="col-6 " for="price">Price</label>
                                        <input type="number" name="price" id="price" value="<?php echo $data["price"];?>">

                                        <label class="col-6 " for="no_lec">Number of lectures</label>
                                        <input type="number" name="no_lec" id="no_lec" value="<?php echo $data["no_lec"];?>">
                                        
                                        <label class="col-6 " for="language">Language</label>
                                        <input type="text" name="language" id="language" value="<?php echo $data["language"];?>">


                                        <label class="col-6 " for="start_date">Start date</label>
                                        <input type="date" name="start_date" id="start_date" value="<?php echo $data["start_date"];?>">

                                        <label class="col-6 " for="end_date">End date</label>
                                        <input type="date" name="end_date" id="end_date" value="<?php echo $data["end_date"];?>">

                                        <label class="col-6 " for="requirements">Requirements</label>
                                        <input type="text" name="requirements" id="requirements" value="<?php echo $data["requirements"];?>">

                                        <label class="col-6 " for="start_time">Start time</label>
                                        <input type="time" name="start_time" id="start_time" value="<?php echo $data["start_time"];?>">

                                        <label class="col-6 " for="end_time">End time</label>
                                        <input type="time" name="end_time" id="end_time" value="<?php echo $data["end_time"];?>">

                                        <label class="col-6 " for="briefDescription">Brief description</label>
                                        <input type="text" name="briefDescription" id="briefDescription" value="<?php echo $data["briefDescription"];?>">

                                        <label class="col-6 " for="whatLearn">What we learn</label>
                                        <input type="text" name="whatLearn" id="whatLearn" value="<?php echo $data["whatLearn"];?>">

                                        

                                        
                                    </div>
                                  
                                    <span class="col-12 text-right">
                                        <input type="submit" value="submit" class="btn btn-primary" />
                                    </span>
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