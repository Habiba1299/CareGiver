<?php
   include "header.php";
   include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
   
    <title>profile</title>
    <link rel="stylesheet" href="style/style_profile.css">

</head>
<body style="background-color: white;">
  <center>
    <div class="container">
     <div class="wrapper">
         <?php
           $role =$_SESSION['Role'];  
           $mail =$_SESSION['Mail'];
           $uid = $_SESSION['ID'];
         ?>

         <br>
         <br>
         
         <span class="tittletxt"><h2>My profile</h2></span>

         <div class="wname"><strong>Welcome        </strong>
            
              <strong>  <?php 
                $sql = "SELECT * FROM users WHERE email ='$mail'";  
                $result = mysqli_query($conn , $sql);
                $count = mysqli_num_rows($result);
                if($count > 0){
                    $row = mysqli_fetch_assoc($result);
                    echo $row['username']."<br>";
                  } 
                ?>
              </strong>
            
            </div>
            <br>
           
           <table >  
                    <tr>
                      <td>
                        <b>ID:</b>
                     </td>            
                     <td>
                        <?php echo $row['user_id']."<br>"; ?>
                     </td>
                   </tr>


                   <tr>
                      <td>
                        <b>First Name:</b>
                     </td>            
                     <td>
                        <?php echo $row['first_name']."<br>"; ?>
                     </td>
                   </tr>

                  <tr>
                     <td>
                        <b>Last Name:</b>
                     </td>            
                     <td>
                      <?php echo $row['last_name']."<br>"; ?>
                      </td>
                  </tr>
                   
                  <tr>
                    <td>
                        <b>Email:</b>
                      </td>             
                      <td>
                        <?php echo $row['email']; ?>
                      </td>
                  </tr>
               
                <?php
                if($role == 'doctor' ) : 
               
                    $sql = "SELECT * FROM doctors WHERE user_id ='$uid'";  
                    $result = mysqli_query($conn , $sql);
                    $count = mysqli_num_rows($result);
                    if($count > 0)
                        $row = mysqli_fetch_assoc($result);      
               ?>
                    
                    <tr>
                      <td>
                         <b>Phone number:</b>
                      </td>            
                      <td>
                        <?php echo $row['phone_nmbr'] ; ?>
                      </td>
                    </tr>

                    <tr>
                     <td>
                        <b> License Number:</b>
                     </td>            
                     <td>
                         <?php echo $row['license_nmbr'] ; ?>
                     </td>
                    </tr>

                    <tr>
                      <td>
                         <b>Fee Amount:</b>
                      </td>            
                      <td>
                        <?php echo $row['fee_amount'] ; ?>
                      </td>
                    </tr>

                    <tr>
                      <td>
                         <b>Specialization:</b>
                      </td>            
                      <td>
                      <?php echo $row['specialization'] ; ?>
                      </td>
                    </tr>

                    <tr>
                      <td>
                         <b>Appoinment Link:</b>
                      </td>            
                      <td>
                      <?php echo $row['appointment_link'] ; ?>
                      </td>
                    </tr>

                    <tr>
                      <td>
                         <b>Appoinment Day:</b>
                      </td>            
                      <td>
                      <?php echo $row['appointment_day'] ; ?>
                      </td>
                    </tr>

                    <tr>
                      <td>
                         <b>Appoinment time:</b>
                      </td>            
                      <td>
                      <?php echo $row['appointment_time'] ; ?>
                      </td>
                    </tr>

                

                

                <?php
                  elseif($role == 'nurse') : 

                    $sql = "SELECT * FROM nurses WHERE user_id ='$uid'"; 
                    $result = mysqli_query($conn , $sql);
                    $count = mysqli_num_rows($result);
                    if($count > 0)
                        $row = mysqli_fetch_assoc($result);      
               ?>
                    
                    <tr>
                      <td>
                         <b>Phone number:</b>
                      </td>            
                      <td>
                       <?php echo $row['phone_nmbr'] ; ?>
                      </td>
                    </tr>

                    <tr>
                     <td>
                       <b> License Number:</b>
                     </td>            
                     <td>
                       <?php echo $row['license_nmbr'] ; ?>
                     </td>
                    </tr>


                    <tr>
                      <td>
                         <b>Experience:</b>
                      </td>            
                      <td>
                        <?php echo $row['experience'] ; ?>
                      </td>
                    </tr>

                    <tr>
                     <td>
                       <b>Expertise:</b>
                     </td>            
                     <td>
                       <?php echo $row['expertise'] ; ?>
                     </td>
                    </tr>

                <?php
                  elseif($role == 'client') : 

                    $sql = "SELECT * FROM clients WHERE user_id ='$uid'";  
                    $result = mysqli_query($conn , $sql);
                    $count = mysqli_num_rows($result);
                    if($count > 0){
                        $row = mysqli_fetch_assoc($result);   
                    }   
               ?>
                    <tr>
                      <td>
                        <b>Location:</b>
                      </td>            
                      <td>
                        <?php 

                        echo $row['district'] ." , ". $row['division'];
                        ?>
                      </td>
                    </tr>
              

                    <tr>
                      <td>
                        <b>Phone number:</b>
                      </td>            
                      <td>
                        <?php echo $row['phone_nmbr'] ; ?>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <b>Date Of Birth:</b>
                      </td>            
                      <td>
                        <?php echo $row['DOB'] ; ?>
                      </td>
                    </tr>
              
                

                <?php

                  elseif($role == 'admin') : 
                  
                    $sql = "SELECT * FROM admins WHERE user_id ='$uid'";  
                    $result = mysqli_query($conn , $sql);
                    $count = mysqli_num_rows($result);
                    if($count > 0)
                        $row = mysqli_fetch_assoc($result);      
               ?>

                    <tr>
                      <td>
                        <b>Phone number:</b>
                      </td>            
                      <td>
                        <?php echo $row['phone_nmbr'] ; ?>
                      </td>
                    </tr>
              

              <?php endif ?>

            </table>
            <br>
            <br>
            <form action="edit_prof.php"  method="post">
                <button class="button" name=submit1>Edit </button>
           </form>     
     </div>
  </div>

  </div>
  </center>
    
</body>
</html>