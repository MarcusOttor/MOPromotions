<?php 
   include_once ('libs/session.php');
    include_once('classes/class.database.php');

   //$init = new ManageApps();
    $db_conn = new dbConnection();

    if(isset($_POST['add_new'])){
    
    $link = mysqli_connect($db_conn->db_host, $db_conn->db_user, $db_conn->db_pass, $db_conn->db_name);
    
        $app_name = $_POST['app_name'];
        $app_package = $_POST['app_package'];
        $priority = $_POST['priority'];
        $price = $_POST['price'];
        $keywords = $_POST['keywords'];
        $created = date("H:i:s d-m-Y");
    
    
    if(isset($_FILES['userfile'])){
        $maxsize = 10000000;
            if($_FILES['userfile']['error']==UPLOAD_ERR_OK){
                if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
                    if($_FILES['userfile']['size']<$maxsize){
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']), "image")===0){
                            $imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
                                   
                            $sql = "INSERT INTO apps (app_name, name, image, package, priority, price, keywords, created) VALUES  ('$app_name', '{$_FILES['userfile']['name']}', '{$imgData}', '$app_package', '$priority', '$price', '$keywords', '$created');";
                                   
                            $query = mysqli_query($link, $sql) or die ("Error in Query: " .mysqli_error($link));
                            
                            // begin log
                                $description = '<b>Добавлено новое приложение     </b> <br>
                                <b>Автор:</b> '.$_SESSION['app_name'].'<br>
                                <b>Дата:</b> '.$created.' <br><br>
                                <b>Детали:</b><br>
                                Название -> '.$app_name.' <br> 
                                Пакет -> '.$app_package.' <br>
                                Приоритет -> '.$priority.' <br>
                                Ключевые слова -> '.$keywords.' <br>
                                Цена -> '.$price.' <br>';
                                
                                $sql = "INSERT INTO logs (log_date, log_author, description) VALUES ('$created', '".$_SESSION['app_name']."', '$description');";
                                 
                                $query = mysqli_query($link, $sql);
                            // end log
        
                           header("Location: index.php");
                           exit();
                           
                        }
                    }
                }
            }
        }
    }

    if(isset($_POST['edit_app'])){
        
        
        $link = mysqli_connect($db_conn->db_host, $db_conn->db_user, $db_conn->db_pass, $db_conn->db_name);
    
        $id = $_POST['id_copy'];
        $app_name = $_POST['app_name'];
        $app_package = $_POST['app_package'];
        $priority = $_POST['priority'];
        $keywords = $_POST['keywords'];
        $price = $_POST['price'];
    
   
        
    if(isset($_FILES['userfile'])){
        $maxsize = 10000000;
        
            if($_FILES['userfile']['error']==UPLOAD_ERR_OK){
                if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
                    if($_FILES['userfile']['size']<$maxsize){
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']), "image")===0){
                            $imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
                                   
                           $sql = "UPDATE apps SET app_name='".$app_name."', name='".$_FILES['userfile']['name']."', image='".$imgData."',package='".$app_package."', priority='".$priority."', keywords='".$keywords."', price='".$price."' WHERE id = '".$id."'";
      
                            
                            $query = mysqli_query($link, $sql) or die ("Error in Query: " .mysqli_error($link));
                            
                        }
                    }
                }
            }
        }
            
                                  
                        // begin log
        
                         $now = date("H:i:s d-m-Y");
                        $author = $_SESSION['app_name'];
                        $sql = "SELECT * FROM apps WHERE id='$id'";
            $query = mysqli_query($link, $sql);
          while($row = mysqli_fetch_assoc($query)){
        
                $name_app = $row['app_name'];
                $package_app = $row['package'];
                $priority_app = $row['priority'];
                $price_app = $row['price'];
                $keywords_app = $row['keywords'];
                $description = '<b>Редактирование приложения    </b> <br>
                                <b>Автор:</b> '.$author.'<br>
                                <b>Дата:</b> '.$now.' <br><br>
                                <b>Детали:</b><br>
                                Название: '.$name_app.' -> '.$app_name.' <br> 
                                Пакет: '.$package_app.' -> '.$app_package.'<br>
                                Приоритет: '.$priority_app.' -> '.$priority.'<br>
                                Ключевые слова: '.$keywords_app.' -> '.$keywords.'<br>
                                Цена: '.$price_app.' -> '.$price.' <br>';
                                
                                $sql = "INSERT INTO logs (log_date, log_author, description) VALUES('$now','$author','$description')";
                        
                                $query = mysqli_query($link, $sql) or die ("Error in Query: " .mysqli_error($link));
             }
                        // end log
        
             $sql = "UPDATE apps SET app_name='$app_name', package='$app_package', priority='$priority', keywords='$keywords', price='$price' WHERE id = '$id'";
      
                            
            $query = mysqli_query($link, $sql) or die ("Error in Query: " .mysqli_error($link));
        
         
                           
        
        
        
        
        
    }

?>