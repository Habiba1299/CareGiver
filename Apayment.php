<?php

include_once 'db_connect.php';
session_start();

if(isset($_POST['save'])){

    $aid = $_POST['aid'];
    $amount = $_POST['amount'];
    echo $aid;


    $sql = "INSERT INTO doctorpayment(appointment_id,amount)
        VALUES('$aid','$amount')";
     $result = mysqli_query($conn , $sql);

     $status='payment done';

    $sql="UPDATE appointments 
         SET payment_status='$status'
         WHERE appointment_id='$aid'";
    $result = mysqli_query($conn , $sql);

     if($result === TRUE ){
        echo "payment Successful!!!!";
        }
        else{
        echo "sqlproblem";
        }
        

    
 }
