<?php
include_once '../db_connect.php';

if(isset($_POST['save'])){

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $role = 'admin';
    $passwd = $_POST['passwd'];
    $Rpasswd = $_POST['Rpasswd'];

    
    if($passwd !== $Rpasswd)
        header("Location:admin/admin_add.php?error=repeat_Password_Worngl&mail=$email");
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
            $sql= "UPDATE users SET username =(SELECT concat(first_name,' ',last_name) as username from    users
                                              WHERE email ='$email')
                                             WHERE email ='$email'";

            $result = mysqli_query($conn , $sql);
          
                $sql = "INSERT INTO admins(user_id)
                        SELECT user_id FROM users WHERE email='$email'";
                $result = mysqli_query($conn , $sql);


            if($result === TRUE ){
                header("Location:admin/add-admin?signup=success");
           
            }else{
                header("Location:admin/add-admin?signup=failed&error=tableSql&mail=$email");

            }

            
            }else{ 
                header("Location:admin/add-adminsignup=failed&error=sql&mail=$email");
            }

        }
        else{
            header("Location:add-admin=failed&error=mail_already_taken");
        }

    }

}

?>