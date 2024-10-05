<?php

include_once 'db_connect.php';

if(isset($_POST['save'])){

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $passwd = $_POST['passwd'];
    $Rpasswd = $_POST['Rpasswd'];

    
    if($passwd !== $Rpasswd)
        header("Location:index.php?error=repeat_Password_Worngl&mail=$email");
    else{
        $sql = "SELECT email FROM users WHERE email='$email'";

        $result = mysqli_query($conn , $sql);
        $count = mysqli_num_rows($result);

        if($count === 0){
            $hashedPwd = password_hash($passwd,PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(first_name,last_name,email,role,passwd)
            VALUES('$f_name','$l_name','$email','$role','$hashedPwd')";
    
           $result = mysqli_query($conn , $sql);
           if($result === TRUE ){
            $sql= "UPDATE users SET username =(SELECT concat(first_name,' ',last_name) as username from users
                                              WHERE email ='$email')
                                             WHERE email ='$email'";

            $result = mysqli_query($conn , $sql);
            if($role == 'admin'){
                $sql = "INSERT INTO admins(user_id)
                        SELECT user_id FROM users WHERE email='$email'";
                $result = mysqli_query($conn , $sql);

            }else if($role == 'doctor'){
                $sql = "INSERT INTO doctors(user_id)
                        SELECT user_id FROM users WHERE email='$email'";
                $result = mysqli_query($conn , $sql);

            }else if($role == 'nurse'){
                $sql = "INSERT INTO nurses(user_id)
                        SELECT user_id FROM users WHERE email='$email'";
                $result = mysqli_query($conn , $sql);

            }else if($role == 'client'){
                $sql = "INSERT INTO clients(user_id)
                        SELECT user_id FROM users WHERE email='$email'";
                $result = mysqli_query($conn , $sql);
            }

            if($result === TRUE ){
                header("Location:index.php?signup=success");

            }else{
                header("Location:index.php?signup=failed&error=tableSql&mail=$email");

            }

            
            }else{ 
                header("Location:index.php?signup=failed&error=sql&mail=$email");
            }

        }
        else{
            header("Location:index.php?signup=failed&error=mail_already_taken");
        }

    }

}

?>