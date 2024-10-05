<?php
   include "header.php";
   include_once 'db_connect.php';
   $role = $_SESSION['Role'];
   $uid = $_SESSION['ID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_apppoinment.css">
    <title>appoinment page</title>
</head>
<body>
    <br>
    <br>
    <br>
    
    <center><h1><strong> Appointments <strong></h1></center>
<body>
    <div class="table_responsive">
        <table>
          <thead>
            <tr>
              <th>appointment_id</th>
              <th>customer name</th>
              <th>doctor name</th>
              <th>fee_amount</th>
              <th>day</th>
              <th>time</th>
              <th>link</th>
              <th>payment status</th>
              

              <?php if($role == 'client' ) : ?>
                <th>action</th>
              <?php endif ?>
      
            </tr>
          </thead>
      
          <tbody>
          <?php
             
               $sql = "SELECT * 
                       FROM appointments ";

               $result = mysqli_query($conn , $sql);
               $count = mysqli_num_rows($result);
               echo $count;
                $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
                foreach($row as $row){
                 ?>
            <tr>
              <td><?php echo $row['appointment_id'] ; ?></td>
              <td><?php
                   $cid = $row['client_id'];
                   $sql="SELECT username
                          FROM users
                          WHERE user_id = (SELECT user_id
                                           FROM clients
                                           WHERE client_id ='$cid')";
                      $result = mysqli_query($conn , $sql);
                      $Crow = mysqli_fetch_assoc($result);
                      echo $Crow['username'];
                   ?>
              </td>
              <td><?php
                   $did = $row['doctor_id'];
                   $sql="SELECT *
                          FROM users AS u JOIN doctors AS d
                          ON u.user_id = d.user_id
                          WHERE d.doctor_id ='$did' ";
                      $result = mysqli_query($conn , $sql);
                      $Drow = mysqli_fetch_assoc($result);
                      echo $Drow['username'];
                      ?>
                </td>
              <td><?php echo $Drow['fee_amount'] ; ?></td>
              <td><?php echo $Drow['appointment_day'] ; ?></td>
             
              <td ><?php echo $Drow['appointment_time'] ; ?></td>
              <td ><?php echo $Drow['appointment_link'] ; ?></td>
              

              
                <td >
                  <?php if( $row['payment_status'] == null)
                               echo "payment pending";
                           else
                              echo $row['payment_status'] ; 
                  ?>
                </td>
               

              <?php if($role == 'client' ) : ?>
              <td> <?php 
                    if( $row['payment_status'] == null):?>
                        <span class="action_btn">
                        <a href="http://localhost/careGiver/Apay.php?return&$aid=<?php echo $row['appointment_id']; ?>" id="payment">payment  </a> 
                        </span>
                    <?php elseif( $row['payment_status'] != null) :
                        echo "Glad to help u"?>

                    <?php endif ?> 
              </td>  
              <?php endif ?>      
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>  
  </body>
</html>