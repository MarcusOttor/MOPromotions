<?php

    include_once('classes/class.database.php');

    $link = new mysqli('mysql.hostinger.com', 'u731614038_usr', '123456', 'u731614038_db');

    $installs = $_POST['installs'];
    $package = $_POST['package'];

    $current_installs = 0;

    $sql = "SELECT * FROM apps WHERE package = '$package'";

    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $current_installs = $row['installs'];
            break;
        }

        $current_installs += $installs;

        $sql = "UPDATE apps SET installs = $current_installs WHERE package = '$package'";

        if ($link->query($sql) == true) {
            echo 'true';
        } else {
            echo 'false';
        }
    } else {
        echo 'false';
    }
?>