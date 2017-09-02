<?php 

    include_once('classes/class.ManageApps.php');
    include_once('session.php');

    $init = new ManageApps();

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = $init->deleteApp($id);
        header("location: edit.php");
    }





?>