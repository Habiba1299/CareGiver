
<?php include("header.php");?>
<div class="container">
   <div class="spacer p-4"></div>
   <div class="row">
      <div class="col-12">
         <h1 class="text-center mb-4">Search Hospital</h1>
         <form action="" method="post">
            <div class="input-group">
               <input type="search" name="hospital" class="form-control form-control-lg rounded" placeholder="Search Hospital" aria-label="Search"
                  aria-describedby="search-addon" value="<?php echo isset($_POST['hospital'])? $_POST['hospital'] : ''; ?>" />
               <select name="searchType">
                  <option value="hospitalName">Hospital name</option>
                  <option <?php echo isset($_POST['searchType']) && $_POST['searchType'] == 'areaName' ? 'selected="selected"' : ''; ?> value="areaName">Area name</option>
               </select>
               <button type="submit" class="btn btn-outline-primary">search</button>
            </div>
         </form>
      </div>
   </div>
   <div class="spacer p-5"></div>
   <?php
      if(isset($_POST['hospital'])):
      
          //include db-func
          require_once('../admin/func/db-func.php');
          $search = $_POST['hospital'];
          if($_POST['searchType'] == 'areaName'){
            $sql = "SELECT `location_id` FROM `location` WHERE `area_name` REGEXP '(?i)$search'";
            $result = search_result_from_db($sql);
            $location_id = intval($result->fetch_assoc()['location_id']);
            $sql = "SELECT * FROM `hospital` WHERE `location_id` = $location_id";

         }else{
            $sql = "SELECT * FROM `hospital` WHERE `hospital_name` REGEXP '(?i)$search'";
         }
         $result = search_result_from_db($sql);

          printf('<h2 class="mb-4">Search results for <em>"%s"</em> </h2>', $search);
      ?>
   <table class="table table-hover text-nowrap">
      <thead>
         <tr>
            <th>Hospital Name</th>
            <th>Area</th>
            <th>ICU</th>
            <th>Oxygen</th>
            <th>Covid</th>
         </tr>
      </thead>
      <tbody>
         <?php while ($row = $result->fetch_assoc()): ?>
         <tr>
            <td><?php echo $row['hospital_name']; ?></td>
            <td><?php 
            $location_id = $row['location_id'];
            $sql = "SELECT * FROM `location` WHERE `location_id`='$location_id'";
            $res = search_result_from_db($sql);
            while ($row_area = $res->fetch_assoc()):
                print($row_area['area_name']);
            endwhile;
            ?></td>
            <td><?php echo $row['icu']; ?></td>
            <td><?php echo $row['oxygen']; ?></td>
            <td><?php echo $row['covid_test']; ?></td>
         </tr>
         <?php endwhile;  ?>
      </tbody>
   </table>
   <?php endif; ?>
</div>
<?php
include("footer.php");