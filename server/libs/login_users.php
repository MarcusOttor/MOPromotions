<?php 
    if(isset($_POST['login'])){
        session_start();
        include_once('classes/class.ManageUsers.php');
        $username = $_POST['login_username'];
        $password = $_POST['login_password'];
        
        
        $login_users = new ManageUsers();
        $auth_users = $login_users->LoginUsers($username, $password);
        
        if($auth_users == 1){
            $make_session = $login_users->GetUserInfo($username);
            
            foreach($make_session as $userSessions){
                $_SESSION['app_name'] = $userSessions['username'];
                if(isset($_SESSION['app_name'])){
                    header("location: index.php");
                }
            }
        }else{
            $error = 'Invalid Credentials';
        }
    }


?>