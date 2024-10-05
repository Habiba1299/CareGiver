<?php
session_start();
if(!isset($_SESSION['is_login'])){
    header("Location:index.php");
    die();
}
?>
<?php
   $role = $_SESSION['Role'];
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>We Care </title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="home.php">Home</a></li>
                     
                        <li><a href="profile.php">My Profile</a></li>

                        <?php switch ($role){
                            case 'client':
                                ?>
                                <li><a href="doctor_list.php">Doctor List</a></li>
                                <li><a href="http://localhost/careGiver/appoinment.php">Appoinment</a></li>
                                <li><a href="http://localhost/careGiver/jobpost2.php">Post a Job</a></li>
                                <li><a href="http://localhost/careGiver/jobTable.php">Job list</a></li>
                                <li><a href="http://localhost/careGiver/intrvw_selection.php">interview</a></li>
                                <?php
                                break;

                            case 'doctor':
                                ?>
                                <li><a href="http://localhost/careGiver/appoinment.php">Appointment</a></li>
                               
                                <?php
                                break;
                            case 'admin':
                                ?>
                                <li><a href="http://localhost/careGiver/admin/index.php">DashBoard</a></li>
                               
                                <?php
                                break;
                            case 'nurse':
                                    ?>
                                    <li><a href="http://localhost/careGiver/jobTable.php">Find a Job</a></li>
                                    <li><a href="http://localhost/careGiver/intrvw_selection.php">interview</a></li>
    
                                    
                                    <?php
                                    break;
                            } ?>
                        <li> 
                            <form action="logOut.php" method ="post" class="log-out-form">
                                <input type="submit" class="btn" name ="save" value="LOG OUT" >
                            </form>
                        
                        </li>
                                        
                     </ul>
                  </div>
               </nav>
               
            </div>
         </div>
      </header>