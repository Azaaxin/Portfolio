<?php
include("solo_sql.php");


session_start();
   
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($db,$_POST['user']);
    $password = mysqli_real_escape_string($db,$_POST['pass']);

    
    $sql = "SELECT * FROM Adminlog WHERE user = '$username' and pass = '$password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    
    if($count == 1) {
        //session_register(username);
        $_SESSION['login_user'] = $username;
        
    }else {
        
        
    }
   }
?>