<?php

    include "../../../includes/db.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'banner_item'){

            $banner_title   = $_POST['bannertitle'];
            $banner_body    = $_POST['bannerbody'];
            $data           = $_POST['image'];
    
            $image_array_1 = explode(';', $data);
            $image_array_2 = explode(',', $image_array_1[1]);

            $data = base64_decode($image_array_2[1]);

            $imageName = time().'.png';

            if(file_put_contents('../../../homepage/images/'.$imageName, $data)){

                $data1   = [
                    "Banner_head" => $banner_title,
                    "Banner_body" => $banner_body,
                    "Banner_img" => "images/".$imageName,
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ]; 
                $insert1 = insert('banners', $data1);
    
                if($insert1 == '1'){
    
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

        else if($_POST['action'] == 'new_item'){

            $item_name    = $_POST['itemname'];
            $item_price   = $_POST['itemprice'];
            $data         = $_POST['image'];
    
            $image_array_1 = explode(';', $data);
            $image_array_2 = explode(',', $image_array_1[1]);

            $data = base64_decode($image_array_2[1]);

            $imageName = time().'.png';

            if(file_put_contents('../../../homepage/images/'.$imageName, $data)){

                $data1   = [
                    "Item_name" => $item_name,
                    "Item_price" => $item_price,
                    "Item_img" => "images/".$imageName,
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ]; 
                $insert1 = insert('items', $data1);
    
                if($insert1 == '1'){
    
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