<?php

    include "../../../includes/db.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'about_us_img'){

            $data = $_POST['image'];
    
            $image_array_1 = explode(';', $data);
            $image_array_2 = explode(',', $image_array_1[1]);

            $data = base64_decode($image_array_2[1]);

            $imageName = time().'.png';

            if(file_put_contents('../../../homepage/images/'.$imageName, $data)){

                $data1   = [ "About_img" => "images/".$imageName ];
                $where1  = [ "About_Id" => 1 ];
                $update1 = update('about_us', $data1, $where1);
    
                if($update1 == 1){
    
                    $res_req = 1;
                }
                else{
    
                    $res_req = 2;
                }
            }
            else{

                $res_req = 2;
            }


            echo json_encode($res_req);
        }
    }

?>