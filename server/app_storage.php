<?php 

    include_once('classes/class.database.php');

        $link = new mysqli('mysql.hostinger.com', 'u731614038_usr', '123456', 'u731614038_db');

        $package = $_POST['package'];

        $sql = "SELECT price FROM apps WHERE package = '$package'";
        $query = $link->query($sql);
        while($row = $query->fetch_assoc()){
            $price = $row['price'];
            break;
        }

        if (isset($price)) {
            $sql = "SELECT * FROM apps WHERE package <> '$package'";

            $res_str = "";

            $query = $link->query($sql);
            echo $query->num_rows;
            while ($row = $query->fetch_assoc()) {
                $fact_price = ($price * $row['priority'] / 10);
                $res_str .= $row['app_name'] . '+|-|+' . $row['package'] . '+|-|+' . $row['keywords'] . '+|-|+' . $fact_price . '+|-|+' . base64_encode($row['image']) . '||@\|/@||';
            }

            if (strlen($res_str) > 0) {
                echo substr($res_str, 0, strlen($res_str) - 9);
            } else {
                echo null;
            }
        } else {
            echo null;
        }

?>
