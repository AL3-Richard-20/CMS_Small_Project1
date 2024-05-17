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
      <title>Fiu</title>
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

   <body style="margin:0px; padding:0px;">



      <!-- header section start -->
         <?php include("includes/header.php"); ?>
      <!-- header section end -->



      <!-- banner section start -->
         <div class="banner_section layout_padding">

            <div id="main_slider" class="carousel slide" data-ride="carousel">

               <div class="carousel-inner">

                  <?php 

                     $columns1 = [ "Banner_Id", "Banner_head", "Banner_body", "Banner_img" ];
                     $where1   = [ "Status" => 1 ];
                     $orderBy1 = "Date_added DESC, Time_added DESC ";

                     $fetch1 = get('banners', $columns1, $where1, $orderBy1);

                     $counter = 1;

                     foreach($fetch1 as $row1){

                        $banner_Id     = $row1['Banner_Id'];
                        $banner_head   = $row1['Banner_head'];
                        $banner_body   = $row1['Banner_body'];
                        $banner_img    = $row1['Banner_img'];

                        $active_class1 = ($counter == 1) ? 'active' : '';

                        echo '<div class="carousel-item '.$active_class1.'">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <h1 class="banner_taital">'.$banner_head.'</h1>
                                          <p class="banner_text">'.$banner_body.'</p>
                                          <div class="btn_main">
                                             <div class="contact_bt"><a href="#">Contact US</a></div>
                                          </div>
                                       </div>
                                       <div class="col-md-6" style="text-align:center;">
                                          <div class="image_1"><img src="'.$banner_img.'"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>';

                        $counter++;
                     }
                  ?>

               </div>

               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                  <i class="fa fa-long-arrow-left" style="font-size:24px"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                  <i class="fa fa-long-arrow-right" style="font-size:24px"></i>
               </a>

            </div>
         </div>
      <!-- banner section end -->



      <!-- about section start -->
         <div class="about_section layout_padding">
            <div class="container">
               <div class="about_section_2">
                  <div class="row">
                     <?php

                        $query ="SELECT About_desc, About_img FROM about_us";
                        $fetch = mysqli_query($con, $query);

                        if($fetch){

                           $row = mysqli_fetch_assoc($fetch);

                           $about_desc = $row['About_desc'];
                           $about_img  = $row['About_img'];
                        }
                     ?>
                     <div class="col-md-6">
                        <div class="image_2 text-center">
                           <img src="<?= $about_img ?>" style="height:100%;">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <h1 class="about_taital">About Us</h1>
                        <p class="about_text"><?= substr($about_desc, 0, 250) ?></p>
                        <div class="readmore_bt"><a href="about.php">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <!-- about section end -->



      <!--  design section start -->
         <div class="design_section layout_padding">

            <h1 class="design_taital"><?php echo getSettingsVal('Design_section_head') ?></h1>
            <p class="design_text"><?php echo getSettingsVal('Design_section_body') ?></p>

            <div id="my_slider" class="carousel slide" data-ride="carousel">

               <div class="carousel-inner">

                  <?php

                     $query ="SELECT
                                 *
                              FROM
                                 items
                              WHERE
                                 Status = 1 ";
                              
                     $fetch = mysqli_query($con, $query);

                     $count = mysqli_num_rows($fetch);

                     $total_seg = $count / 3;

                     $batch = 0;

                     for($i=1; $i<=$total_seg; $i++){

                        $active_class = ($i == 1) ? "active" : "";

                        echo '<div class="carousel-item '.$active_class.'">
                              <div class="container">
                                 <div class="design_section_2">
                                    <div class="row">';

                                       $query2 ="SELECT
                                                *
                                             FROM
                                                items
                                             WHERE
                                                Status = 1 
                                             ORDER BY 
                                                Item_Id DESC 
                                             LIMIT 
                                                3 
                                             OFFSET 
                                                $batch ";

                                       $fetch2 = mysqli_query($con, $query2);

                                       while($row2 = mysqli_fetch_assoc($fetch2)){

                                          $item_Id    = $row2['Item_Id'];
                                          $item_name  = $row2['Item_name'];
                                          $item_price = $row2['Item_price'];
                                          $item_img   = $row2['Item_img'];

                                          echo '<div class="col-md-4">
                                                   <div class="box_main">
                                                      <p class="chair_text">'.$item_name.'</p>
                                                      <div class="image_3" href="#"><img src="'.$item_img.'" style="height:190px;"></div>
                                                      <p class="chair_text">Price P'.number_format($item_price).'</p>
                                                      <div class="buy_bt"><a href="#">Buy Now</a></div>
                                                   </div>
                                                </div>';
                                       }

                                    echo '</div>
                                 </div>
                              </div>
                           </div>';

                           $batch = $batch + 3;
                     }

                  ?>
                  
               </div>

               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-long-arrow-left" style="font-size:24px"></i>
               </a>

               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-long-arrow-right" style="font-size:24px"></i>
               </a>

            </div>

            <div class="container">
               <div class="read_bt"><a href="design.php">View More</a></div>
            </div>

         </div>
      <!--  design section end -->



      <!--  newsletter section start -->
         <div class="newsletter_section layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="imgage_6"><img src="<?php echo getSettingsVal('Newsletter'); ?>"></div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="newsletter_taital">Subscribe Newsletter</h1>
                     <input type="text" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
                     <div class="subscribe_bt"><a href="#">Subscribe Now</a></div>
                  </div>
               </div>
            </div>
         </div>
      <!--  newsletter section end -->



      <!-- contact section start -->
         <div class="contact_section layout_padding">
            <div class="container">
               <div class="contact_section_2">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="mail_section_1">
                           <h1 class="contact_taital">Contact Us</h1>
                           <input type="text" class="mail_text" placeholder="Name" name="text">
                           <input type="text" class="mail_text" placeholder="Email" name="text">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="text">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                           <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="map_main">
                           <div class="map-responsive">
                              <iframe src="<?php echo getSettingsVal('Google_map') ?>" width="600" height="360" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <!-- contact section end -->



      <!-- footer section start -->
         <?php include("includes/footer.php"); ?>
      <!-- footer section end -->



      <!-- copyright section start -->
         <!-- <div class="copyright_section">
            <div class="container">
               <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
            </div>
         </div> -->
      <!-- copyright section end -->



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