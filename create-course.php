<?php

require "./crud/course.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $briefDescription = $_POST['briefDescription'];
    $language = $_POST['language'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $whatLearn = $_POST['whatLearn'];
    $rating = $_POST['rating'];
    $image = $_POST['image'];
    $requirements = $_POST['requirements'];


    $data = array(
        "name" => $name, "briefDescription" => $briefDescription, "language" => $language, "price" => $price,
        "description" => $description, "whatLearn" => $whatLearn, "rating" => $rating, "image" => "physics.jpg", "requirements" => $requirements
    );



    $course = new Course();
    $courses = $course->addCourse($data);
    header('Location:view-edit-courses.php');
}

?>
<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create course</title>
    <meta name="description" content="create course">
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
                        <h1>View & edit corses</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li class="active">Courses data</li>
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
                                Add course
                            </div>
                            <div class="card-body card-block">

                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Course name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="name" value="<?php (isset($_POST['name'])) ? $_POST['name'] : '' ?>" placeholder="Course name" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Brief description</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="briefDescription" id="textarea-input" rows="2" placeholder="Content..." value="<?php (isset($_POST['briefDescription'])) ? $_POST['briefDescription'] : '' ?>" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Language</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="language" value="<?php (isset($_POST['language'])) ? $_POST['language'] : '' ?>" placeholder="Course language" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="price" min=5 value="<?php (isset($_POST['price'])) ? $_POST['price'] : '' ?>" placeholder="0.00" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." value="<?php (isset($_POST['description'])) ? $_POST['description'] : '' ?>" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">What learn</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="whatLearn" id="textarea-input" rows="2" placeholder="Content..." value="<?php (isset($_POST['whatLearn'])) ? $_POST['whatLearn'] : '' ?>" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Rating</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="rating" min=0 max=5 value="<?php (isset($_POST['rating'])) ? $_POST['rating'] : '' ?>" placeholder="***" class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Upload image</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" name="image" value="<?php (isset($_POST['image'])) ? $_POST['image'] : '' ?>" class="form-control" id="customFile" />
                                        </div>
                                    </div> -->

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Requirements</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="requirements" id="textarea-input" rows="2" placeholder="requirements..." value="<?php (isset($_POST['requirements'])) ? $_POST['requirements'] : '' ?>" class="form-control"></textarea>
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