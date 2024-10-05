<?php
   include "header.php";
   include_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_Dappoinment.css">
    <title>Doctors appoinment</title>
</head>
<h1 ><b> DOCTORS LIST</b></h1>
<body>
    <div class="table_responsive">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Phone</th>
              <th>expertise</th>
              <th>Time</th>
              <th>Fee Amaount</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
               
               $role = $_SESSION['Role'];
               $uid = $_SESSION['ID'];
             
               $sql = "SELECT * 
                       FROM doctors ";

               $result = mysqli_query($conn , $sql);
               $count = mysqli_num_rows($result);
               echo $count;
                $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
                foreach($row as $row){
                 ?>
                  <tr>
                      <td> 
                        <?php echo $row['doctor_id'] ; ?> </td>

                      <td> <?php
                          $d_id = $row['doctor_id'];

                          $sql = "SELECT username
                                  FROM users
                                  WHERE user_id =(SELECT user_id
                                                    FROM doctors
                                                    WHERE doctor_id = '$d_id' )  ";
                            $result = mysqli_query($conn , $sql);
                            $count = mysqli_num_rows($result);
                            if($count > 0){
                                $drow = mysqli_fetch_assoc($result); 
                            }
                            echo $drow['username'];             
                        ?> </td>
                        <td> <?php echo $row['phone_nmbr'] ?></td>
                        <td> <?php echo $row['specialization'] ?> </td>
                        <td > <?php echo $row['appointment_day']. " - ";
                            echo $row['appointment_time']; ?> </td>
                        <td> <?php echo $row['fee_amount'] ?> </td>
                        <td>
                          <span class="action_btn">
                            <a href="insert_appointment.php?return&did= <?php echo $row['doctor_id']; ?>">request an apoinment
                          </span>
                        </td>
                    </tr>
                  
                <?php
                     } ?>
           </tbody>     
        </table>
     </div>       
</body>
</html>