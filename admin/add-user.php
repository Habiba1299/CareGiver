<?php include("header.php"); ?>
<div class="wrapper">
  
<?php 
$activeLi = 'user';
$menuActive = 'addUser';

include("func/menu.php"); 
include("sidebar.php"); 
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add User</h1>
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
              <form>
                <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Full Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Enter Full Name">
                  </div>
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="inputUsername" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail1">Email address</label>
                    <input type="email" class="form-control" id="inputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="inputConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Retype Password">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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