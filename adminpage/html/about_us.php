<?php

   include "../../includes/db.php";

    $columns1 = [ "About_desc", "About_img" ];
    $where1   = [ "About_Id" => 1 ];
    $fetch1   = get('about_us', $columns1, $where1);

    foreach($fetch1 as $row){

        $about_desc = $row["About_desc"];
        $about_img  = $row["About_img"];
    }

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
                        <h4 class="page-title">About Us</h4>
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
                <table class="table table-striped table-hover">
                    <thead class="table-bordered bg-secondary text-white font-weight-bold text-uppercase">
                        <tr>
                            <th>Setting</th>
                            <th>Value</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Business Logo</td>
                            <td><img src="../../homepage/<?php echo getSettingsVal('Company_Logo') ?>" width="30"></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" onclick="editLogo2()">
                                    <span class="fa fa-pencil-alt"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>About Info</td>
                            <td><?= $about_desc ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#aboutInfoMod">
                                    <span class="fa fa-pencil-alt"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>About Image</td>
                            <td><img src="../../homepage/<?= $about_img ?>" width="30"></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" onclick="editLogo()">
                                    <span class="fa fa-pencil-alt"></span>
                                </button>
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>Address</td>
                            <td><?php echo getSettingsVal('Address') ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">
                                    <span class="fa fa-pencil-alt"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><?php echo getSettingsVal('Phone_number') ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">
                                    <span class="fa fa-pencil-alt"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Gmail</td>
                            <td><?php echo getSettingsVal('Gmail') ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">
                                    <span class="fa fa-pencil-alt"></span>
                                </button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->



        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->


    <!-- about us logo -->
        <div class="modal" id="logoMod">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">About Us Image</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>  

                    <div class="modal-body">

                        <form method="POST" id="editLogoForm">

                            <div class="text-center">

                                <p>You can resize the picture</p>

                                <img src='../../homepage/<?= $about_img ?>' alt='photo' id='logo_pic'>

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
    <!-- about us logo -->

    <!-- business logo -->
        <div class="modal" id="logoMod2">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Business Logo</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>  

                    <div class="modal-body">

                        <form method="POST" id="editLogoForm2">

                            <div class="text-center">

                                <p>You can resize the picture</p>

                                <img src='../../homepage/<?= getSettingsVal('Company_Logo') ?>' alt='photo' id='logo_pic2'>

                            </div>

                            <input type="file" id="upload2"> 

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
    <!-- business logo -->

    <!-- about us info -->
        <div class="modal" id="aboutInfoMod">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">About Information</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>  

                    <div class="modal-body">

                        <form method="POST" id="aboutInfoForm">

                            <div class="form-group">
                                <textarea class="form-control" name="about_info" id="about_info" cols="30" rows="10"><?= $about_desc ?></textarea>
                            </div>

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
    <!-- about us info -->


    
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
            
            $('#editLogoForm').on('submit', function(aa){

                aa.preventDefault()

                $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function (resp) {

                    $.ajax({
                        type: "POST",
                        url: "exec/update.php",
                        data: {
                            image:resp,
                            action:"about_us_img"
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

            $('#editLogoForm2').on('submit', function(ab){

                ab.preventDefault()

                $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function (resp) {

                    $.ajax({
                        type: "POST",
                        url: "exec/update.php",
                        data: {
                            image2:resp,
                            action:"business_logo_img"
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

            $('#aboutInfoForm').on('submit', function(ac){

                ac.preventDefault()

                var about_info = $('#about_info').val()

                $.ajax({
                    type: "POST",
                    url: "exec/update.php",
                    data: {
                        aboutinfo:about_info,
                        action:"about_us_desc"
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

        $uploadCrop = $('#logo_pic').croppie({
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

        $uploadCrop = $('#logo_pic2').croppie({
            viewport: {
                width: 200,
                height: 100,
                type: 'square'
            },
            enforceBoundary:false,
            boundary: {
                width: 300,
                height: 200
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

        $('#upload2').on('change', function () { 
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

        function editLogo(){

            $('#logoMod').modal('show')

            $('#logo_pic').croppie('bind')
        }

        function editLogo2(){

            $('#logoMod2').modal('show')

            $('#logo_pic2').croppie('bind')
        }

    </script>

</body>

</html>