<?php
   
   include_once 'db_connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/style_jobpost.css">
    <title>post a job </title>
    <style>

</style>
</head>
<body>
    <br>
    
    <?php include('header.php'); ?>
    <div>
    <form action="job.php"  method ="post" >
 
        
        <input type="text" placeholder="Job Details" name="details" > <br>
        <input type="text" placeholder="Relation With Paitent" name="relation"> <br>
        <input type="text" placeholder="Paitent's Disease" name="disease"> <br>
        <input type="number" placeholder="Paitent's Age" name="age" > <br>
        <input type="text" placeholder="requirements" name="requ" > <br>
        <input type="text" placeholder="Address" name="address" > <br>
        <input type="number" placeholder="How Many Days" name="day" > <br>
        <input type="number" placeholder="Want to pay" name="pay" > <br>  
        <button type="submit" name="done" >Submit</button>
       
</form> 
    </div>
    


    
    </body>
    </html>

