<?php 

    include_once('classes/class.database.php');

        $link = new mysqli('mysql.hostinger.com', 'u731614038_usr', '123456', 'u731614038_db');

        $package = $_POST['package'];
        $limit = $_POST['limit'];

        $sql = "SELECT price FROM apps WHERE package = '$package'";
        $query = $link->query($sql);
        while($row = $query->fetch_assoc()){
            $price = $row[0];
            break;
        }

        $sql = "SELECT * FROM apps WHERE package != '$package' DESC LIMIT $limit";

        $res_str = "";

        $query = $link->query($sql);
        while ($row = $query->fetch_assoc()) {
            $fact_price = $price * $row['priority'] / 10;
            $res_str .= $row['app_name'].'+|-|+'.$fact_price.'+-+'.$row['priority'].'+|-|+'.$row['image'].'||@\|/@||';
        }

        if (strlen($res_str) > 0) {
            echo json_encode(substr($res_str, 0, strlen($res_str) - 9));
        } else {
            echo json_encode("");
        }

?>