<?php

include_once 'db_connect.php';
include "header.php";
session_start();

echo "<h4 >DOCTOR COUNT BY EXpertise<h4>";

$sql = "SELECT count(*),role
            FROM users 
           GROUP BY role'";
   
   $result = mysqli_query($conn , $sql);
   $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($row as $row){ ?>
   echo "
   <table>
          <thead>
            <tr>
              
              
           <th>   role   </th> 
           <th>  count   </th>
             
            </tr>
          </thead>
   </table>

   <tbody>
            <tr>
            <td>  echo $row['role'] ; ?> </td>
            <td>  echo $row['count(*)'] ; ?> </td>
          </tr>
          <?php } ?>
       <tbody>
     </table>"

  ?>  
 }