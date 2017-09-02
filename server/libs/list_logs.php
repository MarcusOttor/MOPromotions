<?php 
    include_once('session.php');
    include_once('classes/class.ManageLogs.php');

    $init = new ManageLogs();

    $list_logs = $init->listLogs();
?>