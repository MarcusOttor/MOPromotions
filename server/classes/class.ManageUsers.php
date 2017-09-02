<?php 
    include_once('class.database.php');

    class ManageUsers{
        public $link;
        
        function __construct(){
            $db_connection = new dbConnection();
            $this->link = $db_connection->connect();
            return $this->link;
        }
        
        function LoginUsers($username, $password){
            $query = $this->link->query("SELECT * FROM u731614038_db.users WHERE username = '$username' AND password = '$password'");
            $rowcount = $query->rowCount();
            return $rowcount;
        }
        
        function GetUserInfo($username){
            $query = $this->link->query("SELECT * FROM u731614038_db.users WHERE username = '$username'");
            $rowcount = $query->rowCount();
            if($rowcount == 1){
                $result = $query->fetchAll();
                return $result;
            }else{
                return $rowcount;
            }
        }
        
        
        
    }
?>
