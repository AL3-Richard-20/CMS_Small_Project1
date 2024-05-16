<?php

   include "../includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Design</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>

      <!-- header section start -->
      <?php include("includes/header.php"); ?>
      <!-- header section end -->

      <!--  design section start -->
         <div class="design_section layout_padding">

            <h1 class="design_taital"><?php echo getSettingsVal('Design_section_head') ?></h1>
            <p class="design_text"><?php echo getSettingsVal('Design_section_body') ?></p>

            <div id="my_slider" class="carousel slide" data-ride="carousel">

               <div class="carousel-inner">

                  <div class="container">

                     <div class="design_section_2">

                        <div class="row">

                           <?php

                              $query2 ="SELECT
                                       *
                                    FROM
                                       items
                                    WHERE
                                       Status = 1 
                                    ORDER BY 
                                       Item_Id DESC ";

                              $fetch2 = mysqli_query($con, $query2);

                              while($row2 = mysqli_fetch_assoc($fetch2)){

                                 $item_Id    = $row2['Item_Id'];
                                 $item_name  = $row2['Item_name'];
                                 $item_price = $row2['Item_price'];
                                 $item_img   = $row2['Item_img'];

                                 echo '<div class="col-md-4">
                                          <div class="box_main" style="margin: 10px;">
                                             <p class="chair_text">'.$item_name.'</p>
                                             <div class="image_3" href="#"><img src="'.$item_img.'" style="height:190px;"></div>
                                             <p class="chair_text">Price P'.number_format($item_price).'</p>
                                             <div class="buy_bt"><a href="#">Buy Now</a></div>
                                          </div>
                                       </div>';
                              }

                           ?>
                  
                     </div>

                  </div>

               </div>

            </div>

         </div>
      <!--  design section end -->

      <br><br>

      <!-- footer section start -->
         <?php include("includes/footer.php"); ?>
      <!-- footer section end -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>