<?php

    include "../../../includes/db.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'delete_banner'){

            $banner_Id = $_POST['bannerid'];

            $where1  = [ "Banner_Id" => $banner_Id ];
            $delete1 = hardDelete('banners', $where1);

            if($delete1 == 1){

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'delete_item'){

            $banner_Id = $_POST['bannerid'];

            $where1  = [ "Item_Id" => $banner_Id ];
            $delete1 = hardDelete('items', $where1);

            if($delete1 == 1){

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }
    }

?>