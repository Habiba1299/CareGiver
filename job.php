<?php

include_once 'db_connect.php';

if(isset($_POST['done'])){
    session_start();
    $uid = $_SESSION['ID'];
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $details = isset($_POST['details']) ? $_POST['details'] : '';
    $relation = isset($_POST['relation']) ? $_POST['relation']: '';
    $disease= isset($_POST['disease']) ? $_POST['disease']: '';
    $age = isset($_POST['age']) ? $_POST['age']: '';
    $requ = isset($_POST['requ']) ? $_POST['requ']: '';
    $address = isset($_POST['address']) ? $_POST['address']: '';
    $day = isset($_POST['day']) ? $_POST['day']: '';
    $pay = isset($_POST['pay']) ? $_POST['pay']: '';


    $sql="SELECT client_id
        FROM clients
        WHERE user_id = '$uid'";

    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    
    $cid = $row['client_id'];
    
    $error=" ";
    if(empty($title) || empty($details) || empty($relation) || empty($disease) || empty($address) || empty($requ) || empty($age) || empty($day) || empty($pay)){

       echo "<script>alert('Fill all the fields !!!!');</script>";
       header("Location:jobpost2.php");
    }
    else{
            $sql = "INSERT INTO jobs(client_id,title,details,R_with_paitent,paitent_disease,paitent_age,requirements,address,job_day,pay_amount)
                  VALUES('$cid','$title','$details','$relation','$disease','$age','$requ','$address','$day','$pay')";
            $result = mysqli_query($conn , $sql);

        
           if($result === TRUE ){
            echo "job post successful !!!!";
             header("Location:jobTable.php");
           }
           else{
           echo "sqlproblem";
           }

    }

}

?>