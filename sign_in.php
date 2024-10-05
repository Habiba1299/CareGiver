<?php

include_once 'db_connect.php';

if(isset($_POST['signin'])){

    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    $sql = "SELECT * FROM users WHERE email =?";

    $stmt =mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:index.php?error=sqlerror&mail=$email");
    }
    else{

        $hashedPwd = password_hash($passwd,PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $count = mysqli_num_rows($result);

        if($count > 0){
            $row = mysqli_fetch_assoc($result);
            $pwdCheck=password_verify($passwd,$row['passwd']);
            if($pwdCheck == false){
               
                header("Location:index.php?error=wrong_password");
                   
            }else{
                session_start();
                $_SESSION['Role'] = $row['role'];
                $_SESSION['Mail'] = $row['email'];
                $_SESSION['ID'] = $row['user_id'];
                $_SESSION['is_login'] = 'yes';
                echo $_SESSION['Role'];
                header("Location:home.php?login=successful&name=$username");
                die();
            }
        }else{
            header("Location:index.php?error=no_user&mail=$email");
        }
    }
 }

?>