<?php

   include "../../includes/db.php";

?>

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


        <!-- Custom CSS -->
        <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/libs/morris.js/morris.css" rel="stylesheet">

        <link href="../dist/css/croppie.min.css" rel="stylesheet">


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
                        <h4 class="page-title">Banner</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <!-- <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div> -->
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
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 text-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newBannerMod">Add New</button>
                    </div>
                </div><br>
                <table class="table table-striped">
                    <thead class="font-weight-bold text-uppercase bg-secondary text-white">
                        <tr>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Image</th>
                            <th>Date Added</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $columns1   = [ "Banner_Id", "Banner_head", "Banner_body", "Banner_img", "Date_added", "Time_added" ];
                            $where1     = [ "Status" => 1 ];
                            $orderBy1   = "Date_added DESC, Time_added DESC "; 

                            $fetch1     = get('banners', $columns1, $where1, $orderBy1);

                            foreach($fetch1 as $row){

                                $banner_Id   = $row["Banner_Id"];
                                $banner_head = $row["Banner_head"];
                                $banner_body = $row["Banner_body"];
                                $banner_img  = $row["Banner_img"];
                                $date_added  = $row["Date_added"];
                                $time_added  = $row["Time_added"];

                                echo "<tr>
                                        <td>".$banner_head."</td>
                                        <td>".$banner_body."</td>
                                        <td><img src='../../homepage/".$banner_img."' width='30'></td>
                                        <td>".$date_added." ".$time_added."</td>
                                        <td>
                                            <button type='button' class='btn btn-danger' onclick='deleteBanner(`".$banner_Id."`)'>
                                                <span class='fa fa-trash'></span>
                                            </button>
                                        </td>
                                    </tr>";
                            }

                        ?>
                    </tbody>
                </table>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->


            <!-- add new banner -->
                <div class="modal" id="newBannerMod">

                    <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title">Add New Banner</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>  

                            <div class="modal-body">

                                <form method="POST" id="newBannerForm">

                                    <div class="form-group">
                                        <p><b>Title</b></p>
                                        <input type="text" class="form-control" name="banner_title" id="banner_title">
                                    </div>

                                    <div class="form-group">
                                        <p><b>Body</b></p>
                                        <input type="text" class="form-control" name="banner_body" id="banner_body">
                                    </div>

                                    <div class="text-center">

                                        <p>You can resize the picture</p>

                                        <img src='#' alt='photo' id='banner_pic'>

                                    </div>

                                    <input type = "file" id="upload"> 

                                    <hr>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success" ><i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>
            <!-- add new banner -->



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
    <!-- ============================================================== -->
    <!-- End customizer Panel -->
    <!-- ============================================================== -->


    
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


    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>


    <!--c3 charts -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>


    <!--chartjs -->
    <script src="../assets/libs/raphael/raphael.min.js"></script>
    <script src="../assets/libs/morris.js/morris.min.js"></script>

    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>

    <script src="../dist/js/croppie.js"></script>

    <script>

        $(document).ready(function () {
            
            $('#newBannerForm').on('submit', function(aa){

                aa.preventDefault()

                var banner_title    = $('#banner_title').val()
                var banner_body     = $('#banner_body').val()

                $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function (resp) {

                    $.ajax({
                        type: "POST",
                        url: "exec/insert.php",
                        data: {
                            image:resp,
                            bannertitle:banner_title,
                            bannerbody:banner_body,
                            action:"banner_item"
                        },
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == '1'){

                                location.reload()
                            }

                            else if(response == '2'){
                                
                                alert('Something went wrong')
                            }

                            else if(response == '3'){
                                
                                alert('Item has been missing')
                            }
                        }
                    })

                })
            })

        })

        $uploadCrop = $('#banner_pic').croppie({
            viewport: {
                width: 200,
                height: 200,
                type: 'square'
            },
            enforceBoundary:false,
            boundary: {
                width: 300,
                height: 300
            }
        })


        $('#upload').on('change', function () { 
            var reader = new FileReader();
            reader.onload = function (e) {
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
                
            }
            reader.readAsDataURL(this.files[0]);
        })

        function deleteBanner(banner_Id){

            $.ajax({
                type: "POST",
                url: "exec/delete.php",
                data: {
                    action:"delete_banner",
                    bannerid:banner_Id
                },
                dataType: "JSON",
                success: function (response) {
                    
                    if(response == '1'){

                        location.reload()
                    }
                }
            })
        }

    </script>

</body>

</html>