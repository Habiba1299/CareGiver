<?php

include_once 'db_connect.php';
session_start();

$uid = $_SESSION['ID'];
$j_id = $_GET['jid'];
$n_id = $_GET['nr'];




$sql = "UPDATE jobs
         SET SelectNurses_id='$n_id'
         WHERE job_id='$j_id'";
$result = mysqli_query($conn , $sql);


if($result === TRUE ){
echo "nurseupdate  !!!!";
}
else{
echo "sqlproblem";
}


