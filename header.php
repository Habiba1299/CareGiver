<?php
session_start();
if(!isset($_SESSION['is_login'])){
    header("Location:index.php");
    die();
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    
    <link rel="stylesheet" href="style/style_header.css">
    
    <title>CareGiver</title>

</head>
<body>
    <?php
   $role = $_SESSION['Role'];
    ?>
  
 
      <div class="header">
      <a href="home.php" >
      <span>CareGiver</span>
      </a>
      <div class="header-right">
     <a class ="active" href="http://localhost/careGiver/home.php" >Home</a>   
     <a href="http://localhost/careGiver/profile.php">My profile</a>
    

    <?php if($role == 'client' ) : ?> 
         <a href="doctor_list.php">Doctor List</a>
       <a href="http://localhost/careGiver/appoinment.php">Appoinment</a>   
        <a href="http://localhost/careGiver/jobpost2.php">Post a Job</a>
        <a href="http://localhost/careGiver/jobTable.php">Job list</a>
       <a href="http://localhost/careGiver/intrvw_selection.php">interview</a>
    <?php endif ?>

    <?php if($role == 'doctor' ) : ?> 
         <a href="http://localhost/careGiver/appoinment.php">Appointment</a>

        <?php endif ?>

        <?php if($role == 'nurse' ) : ?> 
             <a href="http://localhost/careGiver/jobTable.php">Find a Job</a>
             <a href="http://localhost/careGiver/intrvw_selection.php">interview</a>

        <?php endif ?>

        <?php if($role == 'admin' ) : ?> 
              <a href="http://localhost/careGiver/admin/index.php">DashBoard</a>
          
        <?php endif ?>

    
       <a> <form action="logOut.php" method ="post" class="log-out-form">
        <input type="submit" class="btn" name ="save" value="LOG OUT" >
     </form>
        </a>
     </div>

   

        </header>
