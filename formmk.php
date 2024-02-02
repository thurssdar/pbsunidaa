<?php
include_once ("cek_login.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PBS UNIDA | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- navbar -->
  <?php include_once('navbar.php') ?>

  <!-- Sidebar -->
  <?php include_once('sidebar.php') ?>

 
  <div class="container">
    <div class="row">
        <div class="col-md-6 m-auto mt-3">
        <div class="card">
  <div class="card-header">
    Tambah MK
  </div>    
        <div class="card-body">
        <form action="proses_formpj.php" method="POST" >
        <div class="mb-3">
            <label for="kode_mk" class="form-label">Kode MK</label>
            <input type="name"  name="kode_mk" class="form-control" id="kode_mk" aria-describedby="kode_mkHelp">
            <div id="kode_mk" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
            <input type="nama"  name="mata_kuliah" class="form-control" id="mata_kuliah" aria-describedby="mata_kuliahHelp">
            <div id="mata_kuliah" class="form-text"></div>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href = "index.php"> Batal </a>
        </form>
  </div>

</div>
    </div>
</div>

<?php include_once('footer.php')?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>