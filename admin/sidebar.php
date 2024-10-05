<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://localhost/careGiver/admin/index.php" class="brand-link">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="http://localhost/careGiver/home.php" target="_blank" class="d-block">Go To Home</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="./index.php" class="nav-link<?php menu_active('dashboard'); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
          </li>
          <li class="nav-item<?php menu_open('user'); ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                User & Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="all-users.php" class="nav-link<?php menu_active('allUsers'); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="all-admin.php" class="nav-link<?php menu_active('allAdmin'); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Admin</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="add-admin.php" class="nav-link<?php menu_active('addAdmin'); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Admin</p>
                </a>
              </li>
            </ul>
</li>
              <li class="nav-item<?php menu_open('hospital'); ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-hospital"></i>
              <p>
                Doctor-Nurse verification
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="doctor-verification.php" class="nav-link<?php menu_active('doctor-verification'); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doctor Verification</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="nurse-verification.php" class="nav-link<?php menu_active('nurse-verification'); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nurse Verification</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          
           
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>