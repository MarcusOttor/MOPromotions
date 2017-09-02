<?php 

    include_once('class.database.php');

    class ManageLogs{
        public $link; 
        
        function __construct(){
            $db_connection = new dbConnection();
            $this->link = $db_connection->connect();
            return $this->link;
        }
        
        
        
        
        function ListLogs(){
            // список всех приложений
            $query = $this->link->query("SELECT * FROM u731614038_db.logs ORDER by id ASC");
            
            $counts = $query->rowCount();
            
            if($counts >=1){
                $result = $query->fetchAll();
            }else{
                $result = $counts;
            }
            
            return $result;
        }
        
    }
?>
