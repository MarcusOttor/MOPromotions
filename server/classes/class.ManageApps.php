<?php 

    include_once('class.database.php');

    class ManageApps{
        public $link; 
        
        function __construct(){
            $db_connection = new dbConnection();
            $this->link = $db_connection->connect();
            return $this->link;
        }
        
        
        function createApp($app_name, $name, $image, $package, $priority, $price, $keywords, $created){
            // Cоздание нового приложения
            
            $query = $this->link->prepare('INSERT INTO u731614038_db.apps (app_name, name, image, package, priority, price, keywords, created) VALUES (?,?,?,?,?,?,?,?)');
            
            $values = array($app_name, $name, $image, $package, $priority, $price, $keywords, $created);
            
            $query->execute($values);
            $counts = $query->rowCount();
            return $counts;
            
        }
        
        function ListApp(){
            // список всех приложений
            $query = $this->link->query("SELECT * FROM u731614038_db.apps ORDER by id ASC");
            
            $counts = $query->rowCount();
            
            if($counts >=1){
                $result = $query->fetchAll();
            }else{
                $result = $counts;
            }
            
            return $result;
        }
        
        function CountApp(){
            // количество всех приложений
        }
        
        function editApp(){
            // редактирование приложений
        }
        
        function deleteApp($id){
            // удаление приложений
            $now = date("H:i:s d-m-Y");
            $query = $this->link->query("SELECT * FROM u731614038_db.apps WHERE id = '$id' ");
            $result = $query->fetchAll();
            // begin log
                                $description = '<b>Удалено приложение     </b> <br>
                                <b>Автор:</b> '.$_SESSION['app_name'].'<br>
                                <b>Дата:</b> '.$now.' <br><br>
                                
                                <b>Детали:</b><br>
                                Название -> '.$result[0]['app_name'].' <br> 
                                Пакет -> '.$result[0]['package'].' <br>
                                Приоритет -> '.$result[0]['priority'].' <br>
                                Цена -> '.$result[0]['price'].' <br>
                                Колличество установок -> '.$result[0]['installs'].' <br>';
                                
                                $query = $this->link->prepare('INSERT INTO u731614038_db.logs (log_date, log_author, description) VALUES (?,?,?)');
                                    
                                $values = array($now, $_SESSION['app_name'], $description);
        
                                $query->execute($values);
                            // end log
            
            $query = $this->link->query("DELETE FROM u731614038_db.apps WHERE id = '$id'");
            
            $counts = $query->rowCount();
            return $counts;
        }
        
        
    }
?>