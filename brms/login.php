
<?php
session_start();
if(!empty($_SESSION['username'])) {
    
}
require 'connection.php';

    if(isset($_POST['login']) & !empty($_POST)) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if(empty($user) || empty($pass)) {
           
        }
        else{
            $query = $conn->prepare("SELECT username, password FROM login WHERE username=? AND password=?");
            $query->execute(array($user,$pass));
            $row = $query->fetch(PDO::FETCH_BOTH);

            if($query->rowCount() > 0) {
                $_SESSION['username'] = $user;
                header('location:home.php');
            }
             
            else {
                $error = "Username/Password is wrong";
            }
        }
    }
?>

