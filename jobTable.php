<?php
   include "header.php";
   include_once 'db_connect.php';
   $role = $_SESSION['Role'];
   $uid = $_SESSION['ID'];
   $sql = "SELECT nurse_id
          FROM nurses
          WHERE user_id = '$uid'";
    $result = mysqli_query($conn , $sql);
    $nr = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_Dappoinment.css">
    <title>job list</title>
</head>
<br>
<br>
<br>
<center><h1 ><strong>JOB LIST</strong></h1></center>
<body>
    <div class="table_responsive">
        <table>
          <thead>
            <tr>
              <th>JOB ID</th>
              <th>Title</th>  
              <th>Posted BY</th>
              <th>Payable Amount</th>
              <th>Details</th>
              <th>Relation with Paitent</th>
              <th>Paitent's Disease</th>
              <th>Paitent's Age</th>
              <th>Requirements</th>
              <th>Adress</th>
              <th>payment_status </th>
              <th>SelectNurses_id</th>

              <?php if($role == 'nurse' ) : ?> 
                <th>Action</th>
              <?php endif ?>

              <?php if($role == 'client' ) : ?> 
                <th>payment</th>
              <?php endif ?>
            </tr>
          </thead>

          <tbody>
            <?php
               
               $sql = "SELECT * 
                       FROM jobs ";
                       

               $result = mysqli_query($conn , $sql);
               $count = mysqli_num_rows($result);
               echo "$count";
                $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
                foreach($row as $row){
                 ?>
                  <tr>
                      <td> <?php echo $row['job_id'] ; ?> </td>
                      <td> <?php echo $row['title'] ; ?> </td>

                      <td>  
                        <?php
                          $c_id = $row['client_id'];

                          $sql = "SELECT username
                                 FROM users
                                 WHERE user_id =(SELECT user_id
                                              FROM clients
                                              WHERE client_id = '$c_id')";
                            $result = mysqli_query($conn , $sql);
                            $Jrow = mysqli_fetch_assoc($result); 
                          
                            echo $Jrow['username'];             
                        ?> 
                      </td>
                      <td> <?php echo $row['pay_amount']; ?></td>
                      <td> <?php echo $row['details']; ?></td>
                      <td> <?php echo $row['R_with_paitent']; ?> </td>
                      <td > <?php echo $row['paitent_disease']; ?></td>
                      <td>  <?php echo $row['paitent_age']; ?></td>
                      <td>  <?php echo $row['requirements']; ?></td>
                      <td>  <?php echo $row['address']; ?></td>
                      <td>  <?php echo $row['payment_status']; ?></td>
                      
                      
                       <td>
                       <?php
                          $n_id = $row['SelectNurses_id'];
                          if( $row['SelectNurses_id'] == null):
                            echo "None Selected";
                          elseif( $row['SelectNurses_id'] != null) :

                              $sql = "SELECT username
                                     FROM users
                                     WHERE user_id =(SELECT user_id
                                                  FROM nurses
                                                  WHERE nurse_id ='$n_id')";
                                $result = mysqli_query($conn , $sql);
                                $Nrow = mysqli_fetch_assoc($result); 
                                echo $Nrow['username'];  
                           endif 
                        ?> 
                      </td>
                       


                      
                      <?php if($role == 'nurse' ) : ?>
                        <td>
                          <span class="action_btn">
                            <a href="http://localhost/careGiver/insert_interview.php?&jid=<?php echo $row['job_id'];?>&nr=<?php echo $nr['nurse_id'];?>"id="interview">request for interview </a>
                          </span>
                        </td>
                        <?php endif ?>

              <?php if($role == 'client' ) : ?>
              <td> <?php 
                    if( $row['payment_status'] == null):?>
                        <span class="action_btn">
                        <a href="http://localhost/careGiver/JOBpay.php?return&$jid=<?php echo $row['job_id']; ?>" id="payment">payment  </a> 
                        </span>
                    <?php elseif( $row['payment_status'] != null) :
                        echo "Glad to help u"?>

                    <?php endif ?> 
              </td>  
              <?php endif ?>



                  
                    </tr>
                  
                <?php
                     } ?>
           </tbody>     
        </table>
     </div>       
</body>
</html>
