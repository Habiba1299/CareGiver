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
    <title>Payment Form - Sagar Developer</title>
    <link rel="stylesheet" href="style/style_pay.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <h2>FEEs</h2>
        <form action="Apayment.php" method="post">
          <?php $aid = $_GET['$aid']; ?>
            <h4>Make a Payment</h4>
            <div class="input_group">
                Appointment ID:<br>
                <div class="input_box">
                    <input type="number" placeholder="appointment_id" name="aid" value= <?php echo $aid ;?> required class="name">
                    <i class="fa fa-envelope icon" aria-hidden="true"></i>
                </div>
            </div>

            Amount:<br>
            <div class="input_box">
                <input type="number" placeholder="Enter Amount" name="amount"  required class="name">
                <i class="fa fa-money icon" aria-hidden="true"></i>
            </div>
       

            <div class="input_group">
                <div class="input_box">
                    <button type="submit" name="save" class="btn solid">PAY NOW</button>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" class="radio" id="bc1" checked>
                    <label for="bc1"><span>
                            <i class="fa fa-cc-visa"></i>Credit Card</span></label>
                    <input type="radio" name="pay" class="radio" id="bc2">
                    <label for="bc2"><span>
                            <i class="fa fa-cc-paypal"></i>Paypal</span></label>
                </div>
            </div>

        </form>
    </div>

</body>

</html>
        