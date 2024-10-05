<?php

include_once 'db_connect.php';
session_start();

if(isset($_POST['save'])){

    $jid = $_POST['jid'];
    $amount = $_POST['amount'];
    

    $sql = "INSERT INTO jobpayment(job_id,amount)
        VALUES('$jid','$amount')";
     $result = mysqli_query($conn , $sql);

     $status='payment done';

    $sql="UPDATE jobs
         SET payment_status='$status'
         WHERE job_id='$jid'";
    $result = mysqli_query($conn , $sql);

     if($result === TRUE ){
        echo "payment Successful!!!!";
        }
        else{
        echo "sqlproblem";
        }
        

    
 }