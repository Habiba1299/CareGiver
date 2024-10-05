<?php
   
   include_once 'db_connect.php';


    $error = "";
   if(isset($_POST['done'])){
    session_start();
    $uid = $_SESSION['ID'];
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $details = isset($_POST['details']) ? $_POST['details'] : '';
    $relation = isset($_POST['relation']) ? $_POST['relation']: '';
    $disease= isset($_POST['disease']) ? $_POST['disease']: '';
    $age = isset($_POST['age']) ? $_POST['age']: '';
    $requ = isset($_POST['requ']) ? $_POST['requ']: '';
    $address = isset($_POST['address']) ? $_POST['address']: '';
    $day = isset($_POST['day']) ? $_POST['day']: '';
    $pay = isset($_POST['pay']) ? $_POST['pay']: '';


    $sql="SELECT client_id
        FROM clients
        WHERE user_id = '$uid'";

    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    
    $cid = $row['client_id'];
    
    if(empty($title) || empty($details) || empty($relation) || empty($disease) || empty($address) || empty($requ) || empty($age) || empty($day) || empty($pay)){

        $error="Fill all the fields ";

    }
    else{
            $sql = "INSERT INTO jobs(client_id,title,details,R_with_paitent,paitent_disease,paitent_age,requirements,address,job_day,pay_amount)
                  VALUES('$cid','$title','$details','$relation','$disease','$age','$requ','$address','$day','$pay')";
            $result = mysqli_query($conn , $sql);

        
           if($result === TRUE ){
            echo "job post successful !!!!";
             header("Location:jobTable.php");
           }
           else{
           $error="Please fill up again";
           }

    }

}  
?>



    
    <?php include('includes/header.php'); ?>
    <div class="container pt-5" style="padding-top: 100px;">
        <form action="" method="post" >
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="mb-3">
                            <input type="text" class="form-control"  placeholder="Job Title" name="title">
                        </div>
                        <div class="mb-3">
                            <input type="text"  class="form-control" placeholder="Job Details" name="details"  > 
                        </div>
                        <div class="mb-3">
                            <input type="text"  class="form-control"  placeholder="Relation With Paitent" name="relation"> 
                        </div>
                        <div class="mb-3">
                            <input type="text" id="jt" class="form-control"  placeholder="Paitent's Disease" name="disease"> 
                        </div>
                        <div class="mb-3">
                            <input type="number" id="jt" class="form-control" placeholder="Paitent's Age" name="age"> 
                        </div>
                        <div class="mb-3">
                            <input type="text" id="jt" class="form-control" placeholder="requirements" name="requ" > 
                        </div>
                        <div class="mb-3">
                            <input type="text" id="jt" class="form-control" placeholder="Address" name="address"> 
                        </div>
                        <div class="mb-3">
                            <input type="number" id="jt" class="form-control" placeholder="How Many Days" name="day"> 
                        </div>
                        <div class="mb-3">
                            <input type="number" id="jt" class="form-control" placeholder="Want to pay" name="pay" > 
                        </div>
                        <button type="submit" name="done" >Submit</button>
                    <center><?php echo $error ?></center>
                    </div>
                </div>
            </div>   
        </form> 
    </div>
    <?php include('includes/footer.php'); ?>


   