<?php 
    session_start();
    if(isset($_SESSION['app_name'])){
        $session_name = $_SESSION['app_name'];
    }else{
        header("location: login.php");
    }
?>