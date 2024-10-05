<?php
   include "header.php";
   include_once 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Eidt Profile Page</title>

<link rel="stylesheet" href="style/style_prof.css">
</head>
<body>
<br>
<br>
<br>
<br>
<center>
   <?php
      $role = $_SESSION['Role'];
   ?>
    
   <br>
   <br>
   <div class="box">
      <span class="tittle"><strong>Complete your profile</strong></span>

      <form action="regDone.php"  method ="post" class="Registration">
         <?php 
         if($role == 'admin') :?> 
         <input class=txtfield type="number" placeholder="Phone Number" name="num" ><br>
         
         <?php
         elseif($role == 'doctor') : ?>
            <input class=txtfield type="number" placeholder="Phone Number" name="num" ><br>
            <input class=txtfield type="text" placeholder="License Number" name="license" ><br>
            <input class=txtfield type="number" placeholder="Fee Amount" name="fee" ><br>
            <input class=txtfield type="text" placeholder="Specialization" name="spcl" list="default" >
               <datalist id="default">
                  <option value="Anatomical Pathology">
                  <option value="Cardiovascular/Thoracic Surgery">
                  <option value="Clinical Immunology/Allergy">
                  <option value="Urology">
                  <option value="Rheumatology">
                  <option value="Respirology">
                  <option value="Radiation Oncology">
                  <option value="Public Health and Preventive Medicine (PhPm)">
                  <option value="Physical Medicine and Rehabilitation (PM & R)">
                  <option value="Otolaryngology">
                  <option value="Nephrology">
                  <option value="Medical Oncology">
                  <option value="Medical Microbiology and Infectious Diseases">
                  <option value="Hematology">
                  <option value="General/Clinical Pathology">
                  <option value="General Internal Medicine">
                  <option value="Gastroenterology">
                  <option value="Emergency Medicine">
                  <option value="Diagnostic Radiology">
                  <option value="Critical Care Medicine">
                  <option value="Endocrinology and Metabolism"> 
                  </datalist> <br>    
            <input class=txtfield type="url" placeholder="Appoinment Link" name="link"><br>
            <input class=txtfield type="day" placeholder="Appointment Day" name="day"list="day" >
               <datalist id="day">
                  <option value="Saturday">
                  <option value="Sunday">
                  <option value="Monday">
                  <option value="Tuesday">
                  <option value="Wednesday">
                  <option value="Thursday">
                  <option value="Friday"> 
                  </datalist> <br>
            <input class=txtfield type="text" placeholder="Appoinmtment Time Slot" name="time"><br>    

         <?php
         elseif($role == 'nurse') : ?>
            <input class=txtfield type="number" placeholder="Phone Number" name="num" ><br>
            <input class=txtfield type="number" placeholder="License Number" name="license" ><br>
            <input class=txtfield type="text" placeholder="Experience" name="experience" ><br>
            <input class=txtfield type="text" placeholder="Expertise" name="expertise" ><br>
         
         <?php
         elseif($role == 'client') : ?>
            <input class=txtfield type="number" placeholder="Phone Number" name="num" ><br>
            <input class=txtfield type="text" placeholder="Division" name="divs" ><br>
            <input class=txtfield type="text" placeholder="District" name="dist" ><br>
            <label for="fname" style="text-align: left;">Date of birth</label>
            <input class=txtfield type="date" placeholder="placeholder="date of birth" name="dob"><br><br>
         <?php endif ?>

         <input type="submit" class="button" name ="save" value="SAVE" >
      </form>
   </div>
</center>



</body>
</html>