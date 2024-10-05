<?php 
      session_start();
      if(!isset($_SESSION['user'])){
        header('location: ..\login\login.php');
    }
      $servername = "localhost";
      $username = "root";
      $password = "";
      // Create connection
      $con = new mysqli($servername, $username, $password);

      mysqli_select_db($con, 'covid_19_e_service');

?>

<?php include("header.php");?>
<div class="container">
   <h1 class="mb-4 text-center">Search for hospital</h1>
   <div class="spacer p-4"></div>
   <div class="row">
      <div class="col-md-6 col-lg-6">
         <form>
            <div class="mb-3">
               <label for="hospitalArea">Area</label>
               <select class="select2 form-control" id="hospitalArea">
                  <option value="area one">area one</option>
                  <option value="area two">area two</option>
                  <option value="area three">area three</option>
               </select>
            </div>
            <button type="submit" class="btn btn-primary">Check details</button>
         </form>
      </div>
      <div class="col-md-6 col-lg-6">
         <form>
            <div class="mb-3">
               <label for="hospitalName">Hospital Name</label>
               <input class="form-control" id="hospitalName" type="text" placeholder="Type Hospital Name">
            </div>
            <button type="submit" class="btn btn-primary">Check details</button>
         </form>
      </div>
   </div>
   <!-- Hospital search end -->
   <!-- Search Pharmacy start -->
   <div class="spacer p-5"></div>

   <h1 class="mb-4 text-center">Search For Pharmacy</h1>
   <div class="spacer p-4"></div>
   <div class="row">
      <div class="col-md-6 col-lg-6">
         <form>
            <div class="mb-3">
               <label for="pharmacyArea">Area</label>
               <select class="select2 form-control" id="pharmacyArea">
                  <option value="area one">area one</option>
                  <option value="area two">area two</option>
                  <option value="area three">area three</option>
               </select>
            </div>
            <button type="submit" class="btn btn-primary">Check details</button>
         </form>
      </div>
      <div class="col-md-6 col-lg-6">
         <form>
            <div class="mb-3">
               <label for="pharmacyName">Pharmacy Name</label>
               <input class="form-control" id="pharmacyName" type="text" placeholder="Type Hospital Name">
            </div>
            <button type="submit" class="btn btn-primary">Check details</button>
         </form>
      </div>
   </div>
</div>
<?php
include("footer.php");