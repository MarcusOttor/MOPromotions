<?php 
    include_once('session.php');
    include_once('classes/class.ManageApps.php');

    $init = new ManageApps();

    $list_apps = $init->listApp();
?>