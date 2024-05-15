<!DOCTYPE html>

<html dir="ltr" lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">


        <title>Title Here</title>


        <!-- This Page CSS -->
        <link rel="stylesheet" type="text/css" href="../assets/extra-libs/prism/prism.css">


        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

<body>


    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">



        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include "includes/top_nav.php"; ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->



        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include "includes/left_sidebar.php"; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->



        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">



            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Helper Classes</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->



            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <h4 class="card-title">Custom Classes</h4>
                        <div class="card">
                            <div class="card-body">
                                <!-- .row -->
                                <div class="row">
                                    <!-- .col -->
                                    <div class="col-12">
                                        <h4 class="card-title">Text Color Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-muted</code> </td>
                                                    <td class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-primary</code> </td>
                                                    <td class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-success</code> </td>
                                                    <td class="text-success">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-info</code> </td>
                                                    <td class="text-info">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-warning</code> </td>
                                                    <td class="text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-danger</code> </td>
                                                    <td class="text-danger">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.text-dark</code> </td>
                                                    <td class="text-dark">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-12 m-t-40 m-b-40">
                                        <hr/> </div>
                                    <!-- .col -->
                                    <div class="col-12">
                                        <h4 class="card-title">Font Weight</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.font-light</code> </td>
                                                    <td>Font weight will be light (300).</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.font-normal</code> </td>
                                                    <td>Font weight will be normal</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.font-bold </code> </td>
                                                    <td>Font weight will be bold (700)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-12 m-t-40 m-b-40">
                                        <hr/> </div>
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Padding Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-0</code> </td>
                                                    <td>Padding will be 0px from all side.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-10</code> </td>
                                                    <td>Padding will be 10px from all side.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-20</code> </td>
                                                    <td>Padding will be 20px from all side</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Padding Left Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-l-0</code> </td>
                                                    <td>Only Padding Left will be 0px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-l-10 </code> </td>
                                                    <td>Only Padding Left will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-l-20</code> </td>
                                                    <td>Only Padding Left will be 20px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Padding right Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-r-0</code> </td>
                                                    <td>Only Padding right will be 0px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-r-10 </code> </td>
                                                    <td>Only Padding right will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-r-20</code> </td>
                                                    <td>Only Padding right will be 20px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Padding top Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-t-0</code> </td>
                                                    <td>Only Padding top will be 0px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-t-10 </code> </td>
                                                    <td>Only Padding top will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.p-t-20</code> </td>
                                                    <td>Only Padding top will be 20px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-12 m-t-40 m-b-40">
                                        <hr/> </div>
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Margin top Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-5</code> </td>
                                                    <td>Only Margin top will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-10 </code> </td>
                                                    <td>Only Margin top will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-15 </code> </td>
                                                    <td>Only Margin top will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-20</code> </td>
                                                    <td>Only Margin top will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-30</code> </td>
                                                    <td>Only Margin top will be 30px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-t-40</code> </td>
                                                    <td>Only Margin top will be 40px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Margin Bottom Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-5</code> </td>
                                                    <td>Only Margin Bottom will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-10 </code> </td>
                                                    <td>Only Margin Bottom will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-15 </code> </td>
                                                    <td>Only Margin Bottom will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-20</code> </td>
                                                    <td>Only Margin Bottom will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-b-30</code> </td>
                                                    <td>Only Margin Bottom will be 30px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Margin Right Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-5</code> </td>
                                                    <td>Only Margin Right will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-10 </code> </td>
                                                    <td>Only Margin Right will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-15 </code> </td>
                                                    <td>Only Margin Right will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-20</code> </td>
                                                    <td>Only Margin Right will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-30</code> </td>
                                                    <td>Only Margin Right will be 30px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-r-40</code> </td>
                                                    <td>Only Margin Right will be 40px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- .col -->
                                    <div class="col-md-3">
                                        <h4 class="card-title">Margin Left Classes</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-5</code> </td>
                                                    <td>Only Margin Left will be 5px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-10 </code> </td>
                                                    <td>Only Margin Left will be 10px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-15 </code> </td>
                                                    <td>Only Margin Left will be 15px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-20</code> </td>
                                                    <td>Only Margin Left will be 20px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-30</code> </td>
                                                    <td>Only Margin Left will be 30px.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.m-l-40</code> </td>
                                                    <td>Only Margin Left will be 40px.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-12 m-t-40 m-b-40">
                                        <hr> </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <h4 class="card-title">Background Colors</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-primary</code> </td>
                                                    <td>For Primary background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-success</code> </td>
                                                    <td>For Success (green) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-info</code> </td>
                                                    <td>For info (Blue) background color</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <h4 class="card-title">&nbsp;</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-warning</code> </td>
                                                    <td>For Warning (yellow) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-danger</code> </td>
                                                    <td>For Danger (red) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-theme</code> </td>
                                                    <td>For Theme background color</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <h4 class="card-title">&nbsp;</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Class</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-theme-dark</code> </td>
                                                    <td>For theme dark background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-inverse </code> </td>
                                                    <td>For inverse (dark) background color</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap"> <code>.bg-purple</code> </td>
                                                    <td>For Purple background color</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <h4 class="card-title m-t-40">Bootstrap Classes</h4>
                <!-- Borders -->
                <div class="card">
                    <!--Add borders-->
                    <div class="card-body">
                        <h4 class="card-title">Borders</h4>
                        <h6 class="card-subtitle">Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons, or any other element.</h6>
                        <h4 class="card-title m-t-30">Additive border</h4>
                        <h6 class="card-subtitle">Use of below classes as per your requiements, which side you want border.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.border</code></td>
                                    <td>Use to add solid border of 1px on every side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-top</code></td>
                                    <td>Use to add solid border top of 1px on obejct.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-bottom</code></td>
                                    <td>Use to add solid border bottom of 1px on object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-left</code></td>
                                    <td>Use to add solid border left of 1px on object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-right</code></td>
                                    <td>Use to add solid border right of 1px on object.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Add borders-->
                    <!--Remove borders-->
                    <div class="card-body">
                        <div class="card-text my-1">
                            <h4 class="card-title">Subtractive border</h4>
                            <h6 class="card-subtitle">Use of below classes as per your requiements, which side you don't want to add border.</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.no-border</code></td>
                                    <td>Use when remove border from all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-top-0</code></td>
                                    <td>Use when remove border from the top side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-bottom-0</code></td>
                                    <td>Use when remove border from the bottom side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-left-0</code></td>
                                    <td>Use when remove border from the left side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border-right-0</code></td>
                                    <td>Use when remove border from the right side of the object.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Remove borders-->
                    <!--Border color-->
                    <div class="card-body">
                        <h4 class="card-title">Border color</h4>
                        <h6 class="card-subtitle">When you want add color in the border you can choose any of the below classes.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.border border-primary</code></td>
                                    <td>Use when add primary color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-secondary</code></td>
                                    <td>Use when add secondary color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-success</code></td>
                                    <td>Use when add success color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-danger</code></td>
                                    <td>Use when add danger color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-warning</code></td>
                                    <td>Use when add warning color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-info</code></td>
                                    <td>Use when add info color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-light</code></td>
                                    <td>Use when add light color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-dark</code></td>
                                    <td>Use when add dark color border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.border border-white</code></td>
                                    <td>Use when add white color border to all side of the object.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Border color-->
                    <!--Border-radius-->
                    <div class="card-body">
                        <h4 class="card-title">Border-radius</h4>
                        <h6 class="card-subtitle">Use to give rounded corner to the object.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.rounded</code></td>
                                    <td>Add round corners border to all side of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-top</code></td>
                                    <td>Add round corners border to top side only of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-bottom</code></td>
                                    <td>Add round corners border to bottom side only of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-left</code></td>
                                    <td>Add round corners border to left side only of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-right</code></td>
                                    <td>Add round corners border to right side only of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-circle</code></td>
                                    <td>Create round circle border of the object.</td>
                                </tr>
                                <tr>
                                    <td><code>.rounded-0</code></td>
                                    <td>Remove border corder from the all side of the object.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Border-radius-->
                </div>
                <!--/ Borders-->
                <!--Clearfix-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Clearfix</h4>
                        <h6 class="card-subtitle">Quickly and easily clear floated content within a container by adding a clearfix utility.</h6>
                        <span>Easily clear <code>float</code>s by adding <code>.clearfix</code> <strong>to the parent element</strong>. Can also be used as a mixin.</span>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="clearfix"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                        <pre class="language-html scrollable">
                                <code>
                                    // Mixin itself
                                    @mixin clearfix() {
                                      &::after {
                                        display: block;
                                        content: "";
                                        clear: both;
                                      }
                                    }
                                    
                                    // Usage as a mixin
                                    .element {
                                      @include clearfix;
                                    };
                                </code>
                            </pre>
                        <p class="py-1">The following example shows how the clearfix can be used. Without the clearfix the wrapping div would not span around the buttons which would cause a broken layout.</p>
                        <div class="bd-example my-3">
                            <div class="bg-cyan clearfix">
                                <button type="button" class="btn btn-secondary float-left">Example Button floated left</button>
                                <button type="button" class="btn btn-secondary float-right">Example Button floated right</button>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="bg-cyan clearfix"&gt;
                                  &lt;button type="button" class="btn btn-secondary float-left"&gt;Example Button floated left&lt;/button&gt;
                                  &lt;button type="button" class="btn btn-secondary float-right"&gt;Example Button floated right&lt;/button&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/Clearfix-->
                <!--Close icon-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Close icon</h4>
                        <h6 class="card-subtitle">Use a generic close icon for dismissing content like modals and alerts.</h6>
                        <span><strong>Be sure to include text for screen readers</strong>, as we’ve done with <code>aria-label</code>.</span>
                        <div class="bd-example d-flex">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;button type="button" class="close" aria-label="Close"&gt;
                                  &lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;
                                &lt;/button&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/Close icon-->
                <!-- Display property -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Display property</h4>
                        <h6 class="card-subtitle">Quickly and responsively toggle the display value of components and more with our display utilities. Includes support for some of the more common values, as well as some extras for controlling display when printing.</h6>
                        <h4 class="card-title m-t-30">Basic display values</h4>
                        <h6 class="card-subtitle">The <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/display"><code>display</code> property</a> accepts a handful of values and we support many of them with utility classes. We purposefully don’t provide every value as a utility, so here’s what we support:</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.d-none</code></td>
                                    <td>Used for object to hide on all viewports.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-inline</code></td>
                                    <td>Used for object to behave like an inline object.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-inline-block</code></td>
                                    <td>Used for object to behave like an inline-block object.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-block</code></td>
                                    <td>Used for object to behave like an block object.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-table</code></td>
                                    <td>Used for object to behave like <code>&lt;table&gt;</code> object.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-table-cell</code></td>
                                    <td>Used for object to behave like <code>&lt;td&gt;</code> object.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-flex</code></td>
                                    <td>Used for object as a block-level flex container.</td>
                                </tr>
                                <tr>
                                    <td><code>.d-inline-flex</code></td>
                                    <td>Used for object as an inline-level flex container.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <p>Use above classes as per your requirements. For example, here’s how you could use the inline, block, or inline-block utilities.</p>
                        <div class="bd-example my-3">
                            <div class="d-inline bg-info p-1 text-white">d-inline</div>
                            <div class="d-inline bg-info  p-1 text-white">d-inline</div>
                        </div>
                        <pre class="language-markup">
                                <code>
                                    &lt;div class="d-inline bg-info"&gt;d-inline&lt;/div&gt;
                                    &lt;div class="d-inline bg-info"&gt;d-inline&lt;/div&gt;
                                </code>
                            </pre>
                        <div class="bd-example my-3">
                            <span class="d-block bg-info p-1 text-white">d-block</span>
                        </div>
                        <pre><code class="language-markup">
                                &lt;span class="d-block bg-info"&gt;d-block&lt;/span&gt;
                                </code></pre>
                        <div class="bd-example my-3">
                            <div class="d-inline-block bg-info p-1 text-white">d-inline-block</div>
                            <div class="d-inline-block bg-info p-1 text-white">d-inline-block</div>
                        </div>
                        <pre><code class="language-markup">
                            &lt;div class="d-inline-block bg-info"&gt;d-inline-block&lt;/div&gt;
                            &lt;div class="d-inline-block bg-info"&gt;d-inline-block&lt;/div&gt;
                            </code></pre>
                        <p>Responsive variations also exist for every single utility mentioned above.
                        </p>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-inline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-inline-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-table</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-table-cell</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-inline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-inline-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-table</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-table-cell</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-inline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-inline-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-table</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-table-cell</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-inline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-inline-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-table</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-table-cell</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-inline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-inline-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-block</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-table</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-table-cell</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-inline-flex</code></li>
                        </ul>
                        <h4 class="card-title m-t-30">Hiding Elements</h4>
                        <p>For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide element responsively for each screen size.</p>
                        <p>To hide elements simply use the <code>.d-none</code> class or one of the <code>.d-{sm,md,lg,xl}-none</code> classes for any responsive screen variation.</p>
                        <p>To show an element only on a given interval of screen sizes you can combine one <code>.d-*-none</code> class with a <code>.d-*-*</code> class, for example <code>.d-none.d-md-block.d-xl-none</code> will hide the element for all screen sizes except on medium and large devices.</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Screen Size</th>
                                    <th>Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hidden on all</td>
                                    <td><code>d-none</code></td>
                                </tr>
                                <tr>
                                    <td>Hidden only on xs</td>
                                    <td><code>d-none d-sm-block</code></td>
                                </tr>
                                <tr>
                                    <td>Hidden only on sm</td>
                                    <td><code>d-sm-none d-md-block</code></td>
                                </tr>
                                <tr>
                                    <td>Hidden only on md</td>
                                    <td><code>d-md-none d-lg-block</code></td>
                                </tr>
                                <tr>
                                    <td>Hidden only on lg</td>
                                    <td><code>d-lg-none d-xl-block</code></td>
                                </tr>
                                <tr>
                                    <td>Hidden only on xl</td>
                                    <td><code>d-xl-none</code></td>
                                </tr>
                                <tr>
                                    <td>Visible on all</td>
                                    <td><code>d-block</code></td>
                                </tr>
                                <tr>
                                    <td>Visible only on xs</td>
                                    <td><code>d-block d-sm-none</code></td>
                                </tr>
                                <tr>
                                    <td>Visible only on sm</td>
                                    <td><code>d-none d-sm-block d-md-none</code></td>
                                </tr>
                                <tr>
                                    <td>Visible only on md</td>
                                    <td><code>d-none d-md-block d-lg-none</code></td>
                                </tr>
                                <tr>
                                    <td>Visible only on lg</td>
                                    <td><code>d-none d-lg-block d-xl-none</code></td>
                                </tr>
                                <tr>
                                    <td>Visible only on xl</td>
                                    <td><code>d-none d-xl-block</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Display in print</h4>
                        <h6 class="card-subtitle">Change the <code>display</code> value of elements when printing with our print display utilities.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Class</th>
                                    <th>Print style</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.d-print-none</code></td>
                                    <td>Applies <code>display: none</code> to the element when printing</td>
                                </tr>
                                <tr>
                                    <td><code>.d-print-inline</code></td>
                                    <td>Applies <code>display: inline</code> to the element when printing</td>
                                </tr>
                                <tr>
                                    <td><code>.d-print-inline-block</code></td>
                                    <td>Applies <code>display: inline-block</code> to the element when printing</td>
                                </tr>
                                <tr>
                                    <td><code>.d-print-block</code></td>
                                    <td>Applies <code>display: block</code> to the element when printing</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Display-->
                </div>
                <!--Embeds-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Embed</h4>
                        <h6 class="card-subtitle">Create responsive video or slideshow embeds based on the width of the parent by creating an intrinsic ratio that scales on any device.</h6>
                        <p>Rules are directly applied to <code>&lt;iframe&gt;</code>, <code>&lt;embed&gt;</code>, <code>&lt;video&gt;</code>, and <code>&lt;object&gt;</code> elements; optionally use an explicit descendant class <code>.embed-responsive-item</code> when you want to match the styling for other attributes.</p>
                        <p><strong>Pro-Tip!</strong> You don’t need to include <code>frameborder="0"</code> in your <code>&lt;iframe&gt;</code>s as we override that for you.</p>
                        <h4 class="card-title m-t-30">Example</h4>
                        <h6 class="card-subtitle">Wrap any embed like an <code>&lt;iframe&gt;</code> in a parent element with <code>.embed-responsive</code> and an aspect ratio. The <code>.embed-responsive-item</code> isn’t strictly required, but we encourage it.</h6>
                        <div class="bd-example">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DDwbjWCgxVM?" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="embed-responsive embed-responsive-16by9"&gt;
                                  &lt;iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen&gt;&lt;/iframe&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <h4 class="card-title m-t-30">Aspect ratios</h4>
                        <h6 class="card-subtitle">Aspect ratios can be customized with modifier classes.</h6>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;!-- 21:9 aspect ratio --&gt;
                                &lt;div class="embed-responsive embed-responsive-21by9"&gt;
                                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                                &lt;/div&gt;
                                
                                &lt;!-- 16:9 aspect ratio --&gt;
                                &lt;div class="embed-responsive embed-responsive-16by9"&gt;
                                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                                &lt;/div&gt;
                                
                                &lt;!-- 4:3 aspect ratio --&gt;
                                &lt;div class="embed-responsive embed-responsive-4by3"&gt;
                                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                                &lt;/div&gt;
                                
                                &lt;!-- 1:1 aspect ratio --&gt;
                                &lt;div class="embed-responsive embed-responsive-1by1"&gt;
                                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/Embeds-->
                <!--Flex-->
                <div class="card">
                    <!--Enable flex behaviors-->
                    <div class="card-body">
                        <h4 class="card-title">Flex</h4>
                        <h6 class="card-subtitle">Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.</h6>
                        <h4 class="card-title m-t-30">Enable flex behaviors</h4>
                        <h6 class="card-subtitle">Apply <code>display</code> utilities to create a flexbox container and transform <strong>direct children elements</strong> into flex items. Flex containers and items are able to be modified further with additional flex properties.</h6>
                        <div class="bd-example">
                            <div class="d-flex p-2 bg-cyan text-white">I'm a flexbox container!</div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex p-2"&gt;I'm a flexbox container!&lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-inline-flex p-2 bg-cyan text-white">I'm an inline flexbox container!</div>
                        </div>
                        <pre>
                            <code class="language-markup">
                                &lt;div class="d-inline-flex p-2"&gt;I'm an inline flexbox container!&lt;/div&gt;
                            </code>
                        </pre>
                        <p>Responsive variations also exist for <code>.d-flex</code> and <code>.d-inline-flex</code>.</p>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-sm-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-md-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-lg-inline-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-flex</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.d-xl-inline-flex</code></li>
                        </ul>
                    </div>
                    <!--Direction-->
                    <div class="card-body">
                        <h4 class="card-title">Direction</h4>
                        <p>Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is <code>row</code>. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts).</p>
                        <p>Use <code>.flex-row</code> to set a horizontal direction (the browser default), or <code>.flex-row-reverse</code> to start the horizontal direction from the opposite side.</p>
                        <div class="bd-example">
                            <div class="d-flex flex-row bg-info text-white mb-3">
                                <div class="p-2 bg-info border-right">Flex item 1</div>
                                <div class="p-2 bg-info border-right">Flex item 2</div>
                                <div class="p-2 bg-info border-right">Flex item 3</div>
                            </div>
                            <div class="d-flex flex-row-reverse bg-info text-white">
                                <div class="p-2 bg-info border-left">Flex item 1</div>
                                <div class="p-2 bg-info border-left">Flex item 2</div>
                                <div class="p-2 bg-info border-left">Flex item 3</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex flex-row"&gt;
                                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex flex-row-reverse"&gt;
                                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <p>Use <code>.flex-column</code> to set a vertical direction, or <code>.flex-column-reverse</code> to start the vertical direction from the opposite side.</p>
                        <div class="bd-example">
                            <div class="d-flex flex-column bg-info text-white mb-3">
                                <div class="p-2 bg-info border-bottom">Flex item 1</div>
                                <div class="p-2 bg-info border-bottom">Flex item 2</div>
                                <div class="p-2 bg-info">Flex item 3</div>
                            </div>
                            <div class="d-flex flex-column-reverse bg-info text-white">
                                <div class="p-2 bg-info">Flex item 1</div>
                                <div class="p-2 bg-info border-bottom">Flex item 2</div>
                                <div class="p-2 bg-info border-bottom">Flex item 3</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex flex-column"&gt;
                                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex flex-column-reverse"&gt;
                                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>flex-direction</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-row</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-row-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-column</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-column-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-row</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-row-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-column</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-column-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-row</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-row-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-column</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-column-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-row</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-row-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-column</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-column-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-row</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-row-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-column</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-column-reverse</code></li>
                        </ul>
                    </div>
                    <!--Justify content-->
                    <div class="card-body">
                        <div class="card-text">
                            <h4 class="card-title">Justify content</h4>
                            <h6 class="card-subtitle">Use <code>justify-content</code> utilities on flexbox containers to change the alignment of flex items on the main axis (the x-axis to start, y-axis if <code>flex-direction: column</code>). Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>,
                                <code>between</code>, or <code>around</code>.</h6>
                            <div class="bd-example">
                                <div class="d-flex justify-content-start bg-light mb-3 text-white">
                                    <div class="p-2 bg-cyan border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-right">Flex item</div>
                                </div>
                                <div class="d-flex justify-content-end bg-light mb-3 text-white">
                                    <div class="p-2 bg-info border-left">Flex item</div>
                                    <div class="p-2 bg-info border-left">Flex item</div>
                                    <div class="p-2 bg-info border-left">Flex item</div>
                                </div>
                                <div class="d-flex justify-content-center bg-light mb-3 text-white">
                                    <div class="p-2 bg-cyan border-left border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-right">Flex item</div>
                                </div>
                                <div class="d-flex justify-content-between bg-light mb-3 text-white">
                                    <div class="p-2 bg-info border-right">Flex item</div>
                                    <div class="p-2 bg-info border-left border-right">Flex item</div>
                                    <div class="p-2 bg-info border-left">Flex item</div>
                                </div>
                                <div class="d-flex justify-content-around bg-light text-white">
                                    <div class="p-2 bg-cyan border-left border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-left border-right">Flex item</div>
                                    <div class="p-2 bg-cyan border-left border-right">Flex item</div>
                                </div>
                            </div>
                            <pre class="language-markup scrollable">
                                <code>
                                    &lt;div class="d-flex justify-content-start"&gt;...&lt;/div&gt;
                                    &lt;div class="d-flex justify-content-end"&gt;...&lt;/div&gt;
                                    &lt;div class="d-flex justify-content-center"&gt;...&lt;/div&gt;
                                    &lt;div class="d-flex justify-content-between"&gt;...&lt;/div&gt;
                                    &lt;div class="d-flex justify-content-around"&gt;...&lt;/div&gt;
                                </code>
                            </pre>
                            <span>Responsive variations also exist for <code>justify-content</code>.</span>
                            <ul class="list-style-none">
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-start</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-end</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-center</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-between</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-around</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-sm-start</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-sm-end</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-sm-center</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-sm-between</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-sm-around</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-md-start</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-md-end</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-md-center</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-md-between</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-md-around</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-lg-start</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-lg-end</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-lg-center</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-lg-between</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-lg-around</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-xl-start</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-xl-end</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-xl-center</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-xl-between</code></li>
                                <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.justify-content-xl-around</code></li>
                            </ul>
                        </div>
                    </div>
                    <!--Align items-->
                    <div class="card-body">
                        <h4 class="card-title">Align items</h4>
                        <h6 class="card-subtitle">Use <code>align-items</code> utilities on flexbox containers to change the alignment of flex items on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>). Choose from <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).</h6>
                        <div class="bd-example">
                            <div class="d-flex align-items-start bg-light mb-3 text-white" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                            <div class="d-flex align-items-end bg-light mb-3 text-white" style="height: 100px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                            <div class="d-flex align-items-center bg-light mb-3 text-white" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                            <div class="d-flex align-items-baseline bg-light mb-3 text-white" style="height: 100px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                            <div class="d-flex align-items-stretch bg-light text-white" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex align-items-start"&gt;...&lt;/div&gt;
                                &lt;div class="d-flex align-items-end"&gt;...&lt;/div&gt;
                                &lt;div class="d-flex align-items-center"&gt;...&lt;/div&gt;
                                &lt;div class="d-flex align-items-baseline"&gt;...&lt;/div&gt;
                                &lt;div class="d-flex align-items-stretch"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>align-items</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-sm-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-sm-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-sm-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-sm-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-sm-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-md-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-md-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-md-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-md-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-md-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-lg-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-lg-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-lg-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-lg-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-lg-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-xl-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-xl-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-xl-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-xl-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-items-xl-stretch</code></li>
                        </ul>
                    </div>
                    <!--Align self-->
                    <div class="card-body">
                        <h4 class="card-title">Align self</h4>
                        <h6 class="card-subtitle">Use <code>align-self</code> utilities on flexbox items to individually change their alignment on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>). Choose from the same options as <code>align-items</code>: <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).</h6>
                        <div class="bd-example">
                            <div class="d-flex bg-light text-white mb-3" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="align-self-start p-2 bg-info border-right">Aligned flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white mb-3" style="height: 100px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="align-self-end p-2 bg-cyan border-right">Aligned flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white mb-3" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="align-self-center p-2 bg-info border-right">Aligned flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white mb-3" style="height: 100px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="align-self-baseline p-2 bg-cyan border-right">Aligned flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white" style="height: 100px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="align-self-stretch p-2 bg-info border-right">Aligned flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="align-self-start"&gt;Aligned flex item&lt;/div&gt;
                                &lt;div class="align-self-end"&gt;Aligned flex item&lt;/div&gt;
                                &lt;div class="align-self-center"&gt;Aligned flex item&lt;/div&gt;
                                &lt;div class="align-self-baseline"&gt;Aligned flex item&lt;/div&gt;
                                &lt;div class="align-self-stretch"&gt;Aligned flex item&lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>align-self</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-sm-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-sm-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-sm-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-sm-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-sm-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-md-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-md-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-md-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-md-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-md-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-lg-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-lg-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-lg-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-lg-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-lg-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-xl-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-xl-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-xl-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-xl-baseline</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-self-xl-stretch</code></li>
                        </ul>
                    </div>
                    <!--Auto margins-->
                    <div class="card-body">
                        <h4 class="card-title">Auto margins</h4>
                        <h6 class="card-subtitle">Flexbox can do some pretty awesome things when you mix flex alignments with auto margins. Shown below are three examples of controlling flex items via auto margins: default (no auto margin), pushing two items to the right (<code>.mr-auto</code>), and pushing two items to the left (<code>.ml-auto</code>).</h6>
                        <span><strong>Unfortunately, IE10 and IE11 do not properly support auto margins on flex items whose parent has a non-default <code>justify-content</code> value.</strong> <a href="https://stackoverflow.com/a/37535548">See this StackOverflow answer</a> for more details.</span>
                        <div class="bd-example m-t-15">
                            <div class="d-flex bg-light text-white mb-3">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white mb-3">
                                <div class="mr-auto p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-left">Flex item</div>
                                <div class="p-2 bg-cyan border-left">Flex item</div>
                            </div>
                            <div class="d-flex bg-light text-white mb-3">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="ml-auto p-2 bg-info border-left">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex"&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                &lt;/div&gt;
                                
                                &lt;div class="d-flex"&gt;
                                  &lt;div class="mr-auto p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                &lt;/div&gt;
                                
                                &lt;div class="d-flex"&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="ml-auto p-2"&gt;Flex item&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                    <!--With align-items-->
                    <div class="card-body">
                        <h4 class="card-title">With align-items</h4>
                        <h6 class="card-subtitle">Vertically move one flex item to the top or bottom of a container by mixing <code>align-items</code>, <code>flex-direction: column</code>, and <code>margin-top: auto</code> or <code>margin-bottom: auto</code>.</h6>
                        <div class="bd-example">
                            <div class="d-flex align-items-start flex-column bg-light text-white mb-3" style="height: 200px;">
                                <div class="mb-auto p-2 bg-cyan">Flex item</div>
                                <div class="p-2 bg-cyan border-bottom">Flex item</div>
                                <div class="p-2 bg-cyan">Flex item</div>
                            </div>
                            <div class="d-flex align-items-end flex-column bg-light text-white mb-3" style="height: 200px;">
                                <div class="p-2 bg-info border-bottom">Flex item</div>
                                <div class="p-2 bg-info">Flex item</div>
                                <div class="mt-auto p-2 bg-info">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex align-items-start flex-column" style="height: 200px;"&gt;
                                  &lt;div class="mb-auto p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                &lt;/div&gt;
                                
                                &lt;div class="d-flex align-items-end flex-column" style="height: 200px;"&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                                  &lt;div class="mt-auto p-2"&gt;Flex item&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                    <!--Wrap-->
                    <div class="card-body">
                        <h4 class="card-title">Wrap</h4>
                        <h6 class="card-subtitle">Change how flex items wrap in a flex container. Choose from no wrapping at all (the browser default) with <code>.flex-nowrap</code>, wrapping with <code>.flex-wrap</code>, or reverse wrapping with <code>.flex-wrap-reverse</code>.</h6>
                        <div class="bd-example">
                            <div class="d-flex flex-nowrap bg-light">
                                <div class="p-2 bg-cyan text-white">Flex item</div>
                                <div class="p-2 bg-cyan text-white">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                                <div class="p-2 ">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex flex-nowrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex flex-wrap bg-light text-white">
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right bg-cyan">Flex item</div>
                                <div class="p-2 border-right border-top bg-cyan">Flex item</div>
                                <div class="p-2 border-right border-top bg-cyan">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex flex-wrap-reverse bg-light text-white">
                                <div class="p-2 bg-cyan border-bottom border-right border-top">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex flex-wrap-reverse"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>flex-wrap</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-nowrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-wrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-wrap-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-nowrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-wrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-sm-wrap-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-nowrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-wrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-md-wrap-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-nowrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-wrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-lg-wrap-reverse</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-nowrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-wrap</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.flex-xl-wrap-reverse</code></li>
                        </ul>
                    </div>
                    <!--Order-->
                    <div class="card-body">
                        <h4 class="card-title">Order</h4>
                        <h6 class="card-subtitle">Change the <em>visual</em> order of specific flex items with a handful of <code>order</code> utilities. We only provide options for making an item first or last, as well as a reset to use the DOM order. As <code>order</code> takes any integer value (e.g., <code>5</code>), add custom CSS for any additional values needed.</h6>
                        <div class="bd-example">
                            <div class="d-flex flex-nowrap bg-light text-white">
                                <div class="order-3 p-2 bg-info border-right">First flex item</div>
                                <div class="order-2 p-2 bg-info border-right">Second flex item</div>
                                <div class="order-1 p-2 bg-info border-right">Third flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="d-flex flex-nowrap"&gt;
                                  &lt;div class="order-3 p-2"&gt;First flex item&lt;/div&gt;
                                  &lt;div class="order-2 p-2"&gt;Second flex item&lt;/div&gt;
                                  &lt;div class="order-1 p-2"&gt;Third flex item&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>order</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-1</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-2</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-4</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-6</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-7</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-8</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-9</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-10</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-11</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-12</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-1</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-2</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-4</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-6</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-7</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-8</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-9</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-10</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-11</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-sm-12</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-1</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-2</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-4</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-6</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-7</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-8</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-9</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-10</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-11</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-md-12</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-1</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-2</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-4</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-6</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-7</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-8</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-9</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-10</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-11</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-lg-12</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-1</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-2</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-4</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-6</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-7</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-8</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-9</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-10</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-11</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.order-xl-12</code></li>
                        </ul>
                    </div>
                    <!--Align content-->
                    <div class="card-body">
                        <h4 class="card-title">Align content</h4>
                        <h6 class="card-subtitle">Use <code>align-content</code> utilities on flexbox containers to align flex items <em>together</em> on the cross axis. Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, <code>around</code>, or <code>stretch</code>. To demonstrate these utilities, we’ve enforced <code>flex-wrap: wrap</code> and increased the number of flex items.</h6>
                        <span><strong>Heads up!</strong> This property has no effect on single rows of flex items.</span>
                        <div class="bd-example">
                            <div class="d-flex align-content-start flex-wrap bg-light text-white mb-3" style="height: 140px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-start flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex align-content-end flex-wrap bg-light text-white mb-3" style="height: 140px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right border-top">Flex item</div>
                                <div class="p-2 bg-info border-right border-top">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-end flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex align-content-center flex-wrap bg-light text-white mb-3" style="height: 140px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                                <div class="p-2 bg-cyan border-right border-top">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-center flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex align-content-between flex-wrap bg-light text-white mb-3" style="height: 200px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-between flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex align-content-around flex-wrap bg-light text-white mb-3" style="height: 140px">
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                                <div class="p-2 bg-cyan border-right">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-around flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example">
                            <div class="d-flex align-content-stretch flex-wrap bg-light text-white mb-3" style="height: 140px">
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right">Flex item</div>
                                <div class="p-2 bg-info border-right border-top">Flex item</div>
                                <div class="p-2 bg-info border-right border-top">Flex item</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="d-flex align-content-stretch flex-wrap"&gt;
                                  ...
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <span>Responsive variations also exist for <code>align-content</code>.</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-around</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-sm-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-sm-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-sm-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-sm-around</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-sm-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-md-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-md-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-md-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-md-around</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-md-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-lg-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-lg-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-lg-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-lg-around</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-lg-stretch</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-xl-start</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-xl-end</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-xl-center</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-xl-around</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.align-content-xl-stretch</code></li>
                        </ul>
                    </div>
                </div>
                <!--/Flex-->
                <!--Float-->
                <div class="card">
                    <!--Overview-->
                    <div class="card-body">
                        <h4 class="card-title">Float</h4>
                        <h6 class="card-subtitle">Toggle floats on any element, across any breakpoint, using our responsive float utilities.</h6>
                        <span>These utility classes float an element to the left or right, or disable floating, based on the current viewport size using the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/float">CSS <code>float</code> property</a>.
                        <code>!important</code> is included to avoid specificity issues. These use the same viewport breakpoints as our grid system.</span>
                        <span>Toggle a float with a class:</span>
                        <div class="bd-example bg-light m-t-15">
                            <div class="float-left">Float left on all viewport sizes</div>
                            <br>
                            <div class="float-right">Float right on all viewport sizes</div>
                            <br>
                            <div class="float-none">Don't float on all viewport sizes</div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="float-left"&gt;Float left on all viewport sizes&lt;/div&gt;&lt;br&gt;
                                &lt;div class="float-right"&gt;Float right on all viewport sizes&lt;/div&gt;&lt;br&gt;
                                &lt;div class="float-none"&gt;Don't float on all viewport sizes&lt;/div&gt;
                            </code>
                        </pre>
                        <h4 class="card-title m-t-30">Responsive</h4>
                        <h6 class="card-subtitle">Responsive variations also exist for each <code>float</code> value.</h6>
                        <div class="bd-example bg-light">
                            <div class="float-sm-left">Float left on viewports sized SM (small) or wider</div>
                            <br>
                            <div class="float-md-left">Float left on viewports sized MD (medium) or wider</div>
                            <br>
                            <div class="float-lg-left">Float left on viewports sized LG (large) or wider</div>
                            <br>
                            <div class="float-xl-left">Float left on viewports sized XL (extra-large) or wider</div>
                            <br>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="float-sm-left"&gt;Float left on viewports sized SM (small) or wider&lt;/div&gt;&lt;br&gt;
                                &lt;div class="float-md-left"&gt;Float left on viewports sized MD (medium) or wider&lt;/div&gt;&lt;br&gt;
                                &lt;div class="float-lg-left"&gt;Float left on viewports sized LG (large) or wider&lt;/div&gt;&lt;br&gt;
                                &lt;div class="float-xl-left"&gt;Float left on viewports sized XL (extra-large) or wider&lt;/div&gt;&lt;br&gt;
                            </code>
                        </pre>
                        <span>Here are all the support classes;</span>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-right</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-sm-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-sm-right</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-sm-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-md-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-md-right</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-md-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-lg-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-lg-right</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-lg-none</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-xl-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-xl-right</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>.float-xl-none</code></li>
                        </ul>
                    </div>
                </div>
                <!--Image replacement-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Image replacement</h4>
                        <h6 class="card-subtitle">Swap text for background images with the image replacement class.</h6>
                        <span>Utilize the <code>.text-hide</code> class or mixin to help replace an element’s text content with a background image.</span>
                        <pre>
                            <code class="language-markup">
                                &lt;h1 class="text-hide"&gt;Custom heading&lt;/h1&gt;
                            </code>
                        </pre>
                        <span>Use the <code>.text-hide</code> class to maintain the accessibility and SEO benefits of heading tags, but want to utilize a <code>background-image</code> instead of text.</span>
                        <div class="bd-example">
                            <h1 class="text-hide my-2" style="background-image: url('../../assets/images/logo-icon.png'); width: 30px; height: 26px;">Bootstrap</h1>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;h1 class="text-hide my-2" style="background-image: url('../../assets/images/logo-icon.png'); width: 30px; height: 26px;"&gt;Bootstrap&lt;/h1&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/Image replacement-->
                <!--position-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Position</h4>
                        <h6 class="card-subtitle">Use these shorthand utilities for quickly configuring the position of an element.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Classes</th>
                                    <th>Use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.position-fixed</code></td>
                                    <td>Changes object's position to fixed.</td>
                                </tr>
                                <tr>
                                    <td><code>.position-relative</code></td>
                                    <td>Changes object's position to relative.</td>
                                </tr>
                                <tr>
                                    <td><code>.position-absolute</code></td>
                                    <td>Changes object's position to absolute.</td>
                                </tr>
                                <tr>
                                    <td><code>.position-static</code></td>
                                    <td>Changes object's position to static.</td>
                                </tr>
                                <tr>
                                    <td><code>.position-sticky</code></td>
                                    <td>Changes object's position to static.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Fixed top</h4>
                        <h6 class="card-subtitle">Position an element at the top of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add aditional CSS.</h6>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="fixed-top"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Fixed bottom</h4>
                        <h6 class="card-subtitle">Position an element at the bottom of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add aditional CSS.</h6>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="fixed-bottom"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Sticky top</h4>
                        <h6 class="card-subtitle">Position an element at the top of the viewport, from edge to edge, but only after you scroll past it. The <code>.sticky-top</code> utility uses CSS’s <code>position: sticky</code>, which isn’t fully supported in all browsers.</h6>
                        <span><strong>Microsoft Edge and IE11 will render <code>position: sticky</code> as <code>position: relative</code>.</strong> As such, we wrap the styles in a <code>@supports</code> query, limiting the stickiness to only browsers that properly can render it.</span>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="sticky-top"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/position-->
                <!--Screenreaders-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Screenreaders</h4>
                        <h6 class="card-subtitle">Use screenreader utilities to hide elements on all devices except screen readers.</h6>
                        <span>Hide an element to all devices <strong>except screen readers</strong> with <code>.sr-only</code>. Combine <code>.sr-only</code> with <code>.sr-only-focusable</code> to show the element again when it’s focused (e.g. by a keyboard-only user). Can also be used as mixins.</span>
                        <pre class="language-markup">
                            <code>
                                &lt;a class="sr-only sr-only-focusable" href="#content"&gt;Skip to main content&lt;/a&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/ Screenreaders-->
                <!--Sizing-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sizing</h4>
                        <h6 class="card-subtitle">Easily make an element as wide or as tall (relative to its parent) with our width and height utilities.</h6>
                        <span>Width and height utilities are generated from the <code>$sizes</code> Sass map in <code>_variables.scss</code>. Includes support for <code>25%</code>,<code>50%</code>, <code>75%</code>, and <code>100%</code> by default. Modify those values as you need to generate different utilities here.</span>
                        <div class="bd-example m-t-30">
                            <div class="w-25 p-3" style="background-color: #eee;">Width 25%</div>
                            <div class="w-50 p-3" style="background-color: #eee;">Width 50%</div>
                            <div class="w-75 p-3" style="background-color: #eee;">Width 75%</div>
                            <div class="w-100 p-3" style="background-color: #eee;">Width 100%</div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div class="w-25 p-3" style="background-color: #eee;"&gt;Width 25%&lt;/div&gt;
                                &lt;div class="w-50 p-3" style="background-color: #eee;"&gt;Width 50%&lt;/div&gt;
                                &lt;div class="w-75 p-3" style="background-color: #eee;"&gt;Width 75%&lt;/div&gt;
                                &lt;div class="w-100 p-3" style="background-color: #eee;"&gt;Width 100%&lt;/div&gt;
                            </code>
                        </pre>
                        <div class="bd-example m-t-30">
                            <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
                                <div class="h-25 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 25%</div>
                                <div class="h-50 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 50%</div>
                                <div class="h-75 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 75%</div>
                                <div class="h-100 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 100%</div>
                            </div>
                        </div>
                        <pre class="language-markup scrollable">
                            <code>
                                &lt;div style="height: 100px; background-color: rgba(255,0,0,0.1);"&gt;
                                  &lt;div class="h-25 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 25%&lt;/div&gt;
                                  &lt;div class="h-50 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 50%&lt;/div&gt;
                                  &lt;div class="h-75 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 75%&lt;/div&gt;
                                  &lt;div class="h-100 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 100%&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                        <span>You can also use <code>max-width: 100%;</code> and <code>max-height: 100%;</code> utilities as needed.</span>
                        <div class="bd-example m-t-30">
                            <!-- <img class="mw-100" data-src="holder.js/1000px100?text=Max-width%20%3D%20100%25" alt="Max-width = 100% [1000%x100]" style="height: 100px; width: 1000%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22782%22%20height%3D%22100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20782%20100%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15fc00274c0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15fc00274c0%22%3E%3Crect%20width%3D%22782%22%20height%3D%22100%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22176.3984375%22%20y%3D%2267.4%22%3EMax-width%20%3D%20100%25%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> -->
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;img class="mw-100" src="..." alt="Max-width 100%"&gt;
                            </code>
                        </pre>
                        <div class="bd-example m-t-30">
                            <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
                                <div class="mh-100" style="width: 100px; height: 200px; background-color: rgba(0,0,255,0.1);">Max-height 100%</div>
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div style="height: 100px; background-color: rgba(255,0,0,0.1);"&gt;
                                  &lt;div class="mh-100" style="width: 100px; height: 200px; background-color: rgba(0,0,255,0.1);"&gt;Max-height 100%&lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                    <!--Fixed Width-->
                    <div class="card-body">
                        <h4 class="card-title">Fixed Width</h4>
                        <h6 class="card-subtitle">Add one of these to class to set fixed width of the content.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.width-{size}</code></td>
                                    <td>Set content fixed width in pixel of selected size where size can be 50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750 and 800. i.e <code>.width-50</code></td>
                                </tr>
                                <tr>
                                    <td><code>.width-{size}-per</code></td>
                                    <td>Set content fixed width in percentage of selected size where size can be 5%, 10%, 15%, 20%, 25%, 30%, 35%, 40%, 45%, 50%, 55%, 60%, 65%, 70%, 75% and 80%. i.e <code>.width-5-per</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Fixed Width-->
                    <!--Fixed Height-->
                    <div class="card-body">
                        <h4 class="card-title">Fixed Height</h4>
                        <h6 class="card-subtitle">Add one of these to class to set fixed height of the content.</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.height-{size}</code></td>
                                    <td>Set content fixed height in pixel of selected size where size can be 50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750 and 800. i.e <code>.height-50</code></td>
                                </tr>
                                <tr>
                                    <td><code>.height-{size}-per</code></td>
                                    <td>Set content fixed height in percentage of selected size where size can be 5%, 10%, 15%, 20%, 25%, 30%, 35%, 40%, 45%, 50%, 55%, 60%, 65%, 70%, 75% and 80%. i.e <code>.height-5-per</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/Fixed Height-->
                </div>
                <!--/Sizing-->
                <!-- Spacing -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Spacing</h4>
                        <h6 class="card-subtitle">Bootstrap includes a wide range of shorthand responsive margin and padding utility classes to modify an element's appearance.</h6>
                        <h4 class="card-title m-t-30">How it works</h4>
                        <p>Assign responsive-friendly <code>margin</code> or <code>padding</code> values to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. Classes are built from a default Sass map ranging from <code>.25rem</code> to <code>3rem</code>.</p>
                        <h4 class="card-title m-t-30">Notation</h4>
                        <span>Spacing utilities that apply to all breakpoints, from <code>xs</code> to <code>xl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code>min-width: 0</code> and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.</span>
                        <span>The classes are named using the format <code>{property}{sides}-{size}</code> for <code>xs</code> and <code>{property}{sides}-{breakpoint}-{size}</code> for <code>sm</code>, <code>md</code>, <code>lg</code>, and <code>xl</code>.</span>
                        <p class="m-t-20 m-b-0">Where <em>property</em> is one of:</p>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>m</code> - for classes that set
                                <code>margin</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>p</code> - for classes that set
                                <code>padding</code></li>
                        </ul>
                        <p class="m-t-20 m-b-0">Where<em>sides</em> is one of:</p>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>t</code> - for classes that set
                                <code>margin-top</code> or <code>padding-top</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>b</code> - for classes that set
                                <code>margin-bottom</code> or
                                <code>padding-bottom</code>
                            </li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>l</code> - for classes that set
                                <code>margin-left</code> or <code>padding-left</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>r</code> - for classes that set
                                <code>margin-right</code> or
                                <code>padding-right</code>
                            </li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>x</code> - for classes that set both <code>*-left</code> and
                                <code>*-right</code>
                            </li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>y</code> - for classes that set both <code>*-top</code> and <code>*-bottom</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i>blank - for classes that set a <code>margin</code> or <code>padding</code> on all 4 sides of the element</li>
                        </ul>
                        <p class="m-t-20 m-b-0">Where <em>size</em> is one of:</p>
                        <ul class="list-style-none">
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>0</code> - for classes that eliminate the <code>margin</code> or <code>padding</code> by setting it to <code>0</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>1</code> - (by default) for classes that set the <code>margin</code> or
                                <code>padding</code> to <code>$spacer * .25</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>2</code> - (by default) for classes that set the <code>margin</code> or
                                <code>padding</code> to <code>$spacer * .5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>3</code> - (by default) for classes that set the <code>margin</code> or
                                <code>padding</code> to <code>$spacer</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>4</code> - (by default) for classes that set the <code>margin</code> or
                                <code>padding</code> to <code>$spacer * 1.5</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>5</code> - (by default) for classes that set the <code>margin</code> or
                                <code>padding</code> to <code>$spacer * 3</code></li>
                            <li><i class="m-r-10 mdi mdi-arrow-right"></i><code>auto</code> - for classes that set the <code>margin</code> to auto</li>
                        </ul>
                        <p class="m-t-20 m-b-0">(You can add more sizes by adding entries to the <code>$spacers</code> Sass map variable.)</p>
                        <h4 class="card-title m-t-30">Horizontal centering</h4>
                        <h6 class="card-subtitle">Additionally, Bootstrap also includes an <code>.mx-auto</code> class for horizontally centering fixed-width block level content—that is, content that has <code>display: block</code> and a <code>width</code> set—by setting the horizontal margins to <code>auto</code>.</h6>
                        <div class="bd-example my-2">
                            <div class="mx-auto" style="width: 200px; background-color: rgba(86,61,124,.15);">
                                Centered element
                            </div>
                        </div>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="mx-auto" style="width: 200px;"&gt;
                                    Centered element
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/ Spacing -->
                <!--vertical alignment-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Vertical alignment</h4>
                        <h6 class="card-subtitle">Easily change the vertical alignment of inline, inline-block, inline-table, and table cell elements.</h6>
                        <p>Change the alignment of elements with the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/vertical-align"><code>vertical-alignment</code></a> utilities. Please note that vertical-align only affects inline, inline-block, inline-table, and table cell elements.</p>
                        <p>Choose from <code>.align-baseline</code>, <code>.align-top</code>, <code>.align-middle</code>, <code>.align-bottom</code>, <code>.align-text-bottom</code>, and <code>.align-text-top</code> as needed.</p>
                        <div class="bd-example">
                            <span class="align-baseline">baseline</span>
                            <span class="align-top">top</span>
                            <span class="align-middle">middle</span>
                            <span class="align-bottom">bottom</span>
                            <span class="align-text-top">text-top</span>
                            <span class="align-text-bottom">text-bottom</span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-cyan text-white">
                                <tr>
                                    <th>Classes</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>.align-top</code></td>
                                    <td>Changes element's vertical alignment to top.</td>
                                </tr>
                                <tr>
                                    <td><code>.align-middle</code></td>
                                    <td>Changes element's vertical alignment to middle.</td>
                                </tr>
                                <tr>
                                    <td><code>.align-bottom</code></td>
                                    <td>Changes element's vertical alignment to bottom.</td>
                                </tr>
                                <tr>
                                    <td><code>.align-baseline</code></td>
                                    <td>Changes element's vertical alignment to baseline.</td>
                                </tr>
                                <tr>
                                    <td><code>.align-text-top</code></td>
                                    <td>Top of the element is aligned with the top of the parent element's font.
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>.align-text-bottom</code></td>
                                    <td>The bottom of the element is aligned with the bottom of the parent element's font.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p>With table cells:</p>
                            <div class="bd-example">
                                <table class="bg-light" style="height: 100px;">
                                    <tbody>
                                        <tr>
                                            <td class="align-baseline">baseline</td>
                                            <td class="align-top">top</td>
                                            <td class="align-middle">middle</td>
                                            <td class="align-bottom">bottom</td>
                                            <td class="align-text-top">text-top</td>
                                            <td class="align-text-bottom">text-bottom</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <pre class="language-markup scrollable">
                                <code>
                                    &lt;table style="height: 100px;"&gt;
                                      &lt;tbody&gt;
                                        &lt;tr&gt;
                                          &lt;td class="align-baseline"&gt;baseline&lt;/td&gt;
                                          &lt;td class="align-top"&gt;top&lt;/td&gt;
                                          &lt;td class="align-middle"&gt;middle&lt;/td&gt;
                                          &lt;td class="align-bottom"&gt;bottom&lt;/td&gt;
                                          &lt;td class="align-text-top"&gt;text-top&lt;/td&gt;
                                          &lt;td class="align-text-bottom"&gt;text-bottom&lt;/td&gt;
                                        &lt;/tr&gt;
                                      &lt;/tbody&gt;
                                    &lt;/table&gt;
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
                <!--/vertical alignment-->
                <!--Visibility-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Visibility</h4>
                        <h6 class="card-subtitle">Control the visibility, without modifying the display, of elements with visibility utilities.</h6>
                        <p>Set the <code>visibility</code> of elements with our visibility utilities. These do not modify the <code>display</code> value at all and are helpful for hiding content from most users, but still keeping them for screen readers.</p>
                        <p>Apply <code>.visible</code> or <code>.invisible</code> as needed.</p>
                        <pre class="language-markup">
                            <code>
                                &lt;div class="visible"&gt;...&lt;/div&gt;
                                &lt;div class="invisible"&gt;...&lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!--/ visibility-->
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->



        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include "includes/footer.php"; ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->



    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->



    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <?php include "includes/customizer.php"; ?>
    <!-- ============================================================== -->
    <!-- End customizer Panel -->
    <!-- ============================================================== -->



    <div class="chat-windows"></div>



    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>


    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>


    <!-- apps -->
    <script src="../dist/js/app.min.js"></script>
    <script src="../dist/js/app.init.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>


    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>


    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>


    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>


    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>


    <!-- This Page JS -->
    <script src="../assets/extra-libs/prism/prism.js"></script>


</body>

</html>