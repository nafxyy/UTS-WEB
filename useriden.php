<?php  
session_start();
            
        if(isset($_POST['userlogin'])){
                $logins = array('user' => 'user123');
                
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                  
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:index.php");
                        exit;
                } else {
                        $failed = true;
                }
        }
?>
