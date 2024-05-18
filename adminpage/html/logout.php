<?php

    session_start();

    unset($_SESSION['uid']);
    unset($_SESSION['Fullname']);

    session_destroy();

    header('location: authentication-login1.php');

?>