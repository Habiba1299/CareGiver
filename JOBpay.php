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
    <title>Payment Form </title>
    <link rel="stylesheet" href="style/style_pay.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <h2>JOB PAYMENT</h2>
        <form action="Jpayment.php" method="post">
          <?php $jid = $_GET['$jid']; ?>
            <h4>Make a Payment</h4>
            <div class="input_group">
                JOB ID:<br>
                <div class="input_box">
                    <input type="number" placeholder="job_id" name="jid" value= <?php echo $jid ;?> required class="name">
                    <i class="fa fa-envelope icon" aria-hidden="true"></i>
                </div>
            </div>

            Amount:<br>
            <div class="input_box">
                <input type="number" placeholder="Enter Amount" name="amount" required class="name">
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
        