<?php
session_start();
                
if(isset($_POST['loginadmin'])){
        $logins = array('admin' => 'admin123');
        
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

        if (isset($logins[$Username]) == $Password){
                $_SESSION['UserData']['Username']=$logins[$Username];
                header("location:tampilanadmin.php");
                exit;
        } 
        else {
                $failed = true;
        }
}
?>