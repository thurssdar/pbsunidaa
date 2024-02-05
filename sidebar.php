<?php
$sidebar ='#637A9F';
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: <?php echo $sidebar; ?> ;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color:#ffffff ;">PBS UNIDA</span>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/all.css">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" >
        <div class="image">
          <img src="dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" >
          <a style="color:#ffffff;" href="#" class="d-block"><?php echo $l_nama ?>></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt" style="color:#ffffff;"></i>
              <p style="color:#ffffff;">
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="penjadwalan.php" class="nav-link">
              <i class="nav-icon fas fa-regular fa-calendar" style="color:#ffffff;"></i>
              <p style="color:#ffffff;">
                Penjadwalan 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="matakuliah.php" class="nav-link">
              <i class="nav-icon fas fa-solid fa-book" style="color:#ffffff;"></i>
              <p style="color:#ffffff;">
                Mata Kuliah
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>