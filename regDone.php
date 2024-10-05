<?php

include_once 'db_connect.php';
session_start();
$role = $_SESSION['Role'];
$uid = $_SESSION['ID'];

if(isset($_POST['save'])){
   
    if ($role == 'admin'){

        $num = $_POST['num'];

        $sql= "UPDATE admins 
                SET phone_nmbr ='$num' 
                WHERE user_id ='$uid'";
        
        $result = mysqli_query($conn , $sql);
        if($result === TRUE ){
            header("Location:profile.php?=successful");
        }else{
            echo "Wrong";
        }

    }
    else if($role == 'doctor'){

        $num = $_POST['num'];
        $license =  $_POST['license'];
        $fee=  $_POST['fee'];
        $link=  $_POST['link'];
        $spcl =$_POST['spcl'];
        $day = $_POST['day'];
        $time = $_POST['time'];
        

        $sql= "UPDATE doctors SET phone_nmbr ='$num' 
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE doctors SET license_nmbr = '$license'
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE doctors SET  fee_amount ='$fee' 
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE doctors SET specialization ='$spcl' 
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE doctors SET appointment_link ='$link' 
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE doctors SET appointment_day ='$day' 
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE doctors SET appointment_time ='$time' 
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        if($result === TRUE ){
            header("Location:profile.php?=successful");
        }else{
            echo "Wrong";
        }


    }
    else if($role == 'nurse'){

        $num = $_POST['num'];
        $license =  $_POST['license'];
        $experience=  $_POST['experience'];
        $expertise=  $_POST['expertise'];
      

        $sql= "UPDATE nurses SET phone_nmbr ='$num' 
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE nurses SET license_nmbr ='$license' 
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE nurses SET experience ='$experience' 
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE nurses SET expertise ='$expertise' 
                WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);

        if($result === TRUE ){
            header("Location:profile.php?=successful");
        }else{
            echo "Wrong";
        }

    }
    else if($role == 'client'){

        $num = $_POST['num'];
        $divs = $_POST['divs'];
        $dist = $_POST['dist'];
        $dob = date('Y-m-d',strtotime($_POST['dob']));

        $sql= "UPDATE clients SET phone_nmbr ='$num' 
                WHERE user_id ='$uid'";
        $result = mysqli_query($conn , $sql);
        
        $sql= "UPDATE clients SET division ='$divs' 
        WHERE user_id ='$uid'";
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE clients SET district ='$dist' 
        WHERE user_id ='$uid'";
        $result = mysqli_query($conn , $sql);

        $sql= "UPDATE clients SET DOB ='$dob'
              WHERE user_id ='$uid'";        
        $result = mysqli_query($conn , $sql);
        
        if($result === TRUE ){
            header("Location:profile.php?=successful");
        }else{
            echo "Wrong";
        }

    }


}

?>