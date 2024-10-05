<?php

include_once 'db_connect.php';
session_start();

$uid = $_SESSION['ID'];
$d_id = $_GET['did'];



$sql="SELECT client_id
    FROM clients
    WHERE user_id = '$uid'";

$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
$cid = $row['client_id'];


$sql = "INSERT INTO appointments(client_id,doctor_id)
        VALUES('$cid','$d_id')";
$result = mysqli_query($conn , $sql);


if($result === TRUE ){
echo "appointment taken !!!!";
}
else{
echo "sqlproblem";
}




?>