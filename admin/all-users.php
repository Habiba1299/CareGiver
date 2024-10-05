<?php include("header.php"); 
      include_once '../db_connect.php';
      ?>
<div class="wrapper">
  
<?php 
$activeLi = 'user';
$menuActive = 'allUsers';

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
            <h1 class="m-0">All Users</h1>
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
          
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Details</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th> 
                      <th>Action</th>                     
                    </tr>
                  </thead>
                  <tbody>
                        <?php 
                            

             
                               $sql = "SELECT * 
                                       FROM users ";

                               $result = mysqli_query($conn , $sql);
                               $count = mysqli_num_rows($result);
                               echo $count;
                                $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
                                foreach($row as $row){
                                 ?>
                                  <tr>
                                      <td> 
                                        <?php echo $row['user_id'] ; ?> </td>

                                      <td>
                                       <?php echo $row['username']; ?> </td>
                                        <td> <?php echo $row['email'] ?></td>
                                        <td> <?php echo $row['role'] ?> </td>

                                        <td>
                                        <button class="deleteList btn btn-outline-danger btn-sm" data-key-value="<?php echo $row['user_id']; ?>">Delete</button>
                                        <button class="editList btn btn-outline-danger btn-sm" data-table="users" data-primary-key="user_id" data-key-value="<?php echo $row['user_id']; ?>">Edit</button>
                                        </td>
                                    </tr>
                                  
                                <?php
                                     } ?>
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
              <!-- /.card-body -->
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