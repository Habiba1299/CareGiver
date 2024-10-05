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
    <center><h1 ><strong>INTERVIEW</strong></h1></center>
<body>
    <div class="table_responsive">
        <table>
          <thead>
            <tr>
              <th>interview no</th>
              <th>job id</th>
              <th>nurse name</th>
              <th>nurse email</th>
              <th>experience</th>
              <th>expertise</th>
              <th>interview link</th>
            
              <?php if($role == 'client' ) : ?>
                <th>action</th>
              <?php endif ?>
      
            </tr>
          </thead>
          
          <tbody>
          <?php
             
               $sql = "SELECT * 
                       FROM interviews ";

               $result = mysqli_query($conn , $sql);
               $count = mysqli_num_rows($result);
               echo $count;
                $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
                foreach($row as $row){
                 ?>
            <tr>
              <td><?php echo $row['interview_no'] ; ?></td>
              <td><?php echo $row['job_id'] ; ?></td>
              <td><?php
                   $nid = $row['nurse_id'];
                   $sql="SELECT username
                          FROM users
                          WHERE user_id = (SELECT user_id
                                           FROM nurses
                                           WHERE nurse_id ='$nid')";
                      $result = mysqli_query($conn , $sql);
                      $Nrow = mysqli_fetch_assoc($result);
                      echo $Nrow['username'];
                   ?>
              </td>
              <td><?php
                   $sql="SELECT *
                          FROM users AS u JOIN nurses AS n
                          ON u.user_id = n.user_id
                          WHERE n.nurse_id ='$nid' ";
                      $result = mysqli_query($conn , $sql);
                      $Nrow = mysqli_fetch_assoc($result);
                      echo $Nrow['email'];
                      ?>
                </td>
              <td><?php echo $Nrow['experience'] ; ?></td>
              <td><?php echo $Nrow['expertise'] ; ?></td>
              <td><?php echo 'https://meet.google.com/xkk-bczp-vnk' ; ?></td>


              <?php if($role == 'client' ) : ?>
                <td> 
                        <span class="action_btn">
                        <a href="http://localhost/careGiver/updatenurse.php?&jid=<?php echo $row['job_id'];?>&nr=<?php echo $row['nurse_id'];?>"id="select">SELECT </a>
                        </span>
                </td>  
              <?php endif ?>      
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>  
  </body>
</html>