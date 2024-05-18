<?php

    include "../../../includes/db.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'login'){

            $username = $_POST['uname'];
            $password = $_POST['upass'];

            $columns = [ "User_Id", "Fullname", "Password" ];
            $where   = [ "Username" => $username ];
            $exists  = exists('users', $columns, $where);

            if($exists != 0){

                $db_password = $exists["Password"];

                if($password == $db_password){

                    $_SESSION['uid']        = $exists['User_Id'];
                    $_SESSION['Fullname']   = $exists['Fullname'];

                    echo json_encode('1');
                }

                else{

                    echo json_encode('4');
                }
            }
            else{

                echo json_encode('5');
            }
        }
    }

?>