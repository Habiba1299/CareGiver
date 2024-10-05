<?php include("header.php"); ?>
<div class="wrapper">
  
<?php 

include("func/menu.php"); 
include_once '../db_connect.php';
include("sidebar.php"); 


?>







  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- form start -->
              <form action="admin_add.php" method="post" >
                <div class="card-body">

                      
                <div class="form-group">
                    <label for="inputName">First Name</label>
                    <input type="text" class="form-control" id="inputName" name="f_name" placeholder="Enter Full Name">
                  </div>


                  <div class="form-group">
                    <label for="inputName">Last Name</label>
                    <input type="text" class="form-control" id="inputName" name="l_name" placeholder="Enter Full Name">
                  </div>
  
                  <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="passwd" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="inputConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="inputConfirmPassword" name="Rpasswd" placeholder="Retype Password">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save "class="btn btn-primary">Submit</button>
                  
                </div>
                <!--<center><?php echo $error ?></center>-->
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<?php include("footer.php"); ?>