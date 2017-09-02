<?php 

    class dbConnection{
        protected $db_conn;
        public $db_name = 'u731614038_db';
        public $db_user = 'u731614038_usr';
        public $db_pass = '123456';
        public $db_host = 'mysql.hostinger.com';
        

        function connect(){
            try{
                $this->db_conn= new PDO("mysql:dbname=$db_name;host=$db_host",$this->db_user,$this->db_pass );
                $this->db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->db_conn;
            }
            catch(PDOExteption $e)
            {
                return $e->getMessage(); 
            }
        }
    }

?>
