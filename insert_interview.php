<?php

include_once 'db_connect.php';
session_start();

$uid = $_SESSION['ID'];
$j_id = $_GET['jid'];
$n_id = $_GET['nr'];



$sql = "INSERT INTO interviews(job_id,nurse_id)
        VALUES('$j_id','$n_id')";
$result = mysqli_query($conn , $sql);


if($result === TRUE ){
echo "interview request successful!!!!";
}
else{
echo "sqlproblem";
}





?>