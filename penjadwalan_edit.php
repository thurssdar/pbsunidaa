
<?php
include_once("koneksi.php");
$id_pj = $_GET['id_pj'];
$qry = "SELECT * FROM penjadwalan WHERE id_pj='$id_pj'";
$data = mysqli_query($con,$qry);

$pjd = mysqli_fetch_array($data);

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
    Edit Jadwal
  </div>    
        <div class="card-body">
        <form action="proses_pjedit.php" method="POST" >
        <input type="hidden" name="id_pj" value="<?php echo $pjd['id_pj']?>" >
        <div class="mb-3">
            <label for="kode_penjadwalan" class="form-label">Kode Penjadwalan</label>
            <input type="nama"  name="kode_penjadwalan" value="<?php echo $pjd['kode_penjadwalan']?>" class="form-control" id="kode_penjadwalan" aria-describedby="kodepjHelp">
            <div id="kode_penjadwalan" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="kode_kelas" class="form-label">Kode Kelas</label>
            <input type="nama"  name="kode_kelas" value="<?php echo $pjd['kode_kelas']?>" class="form-control" id="kode_kelas" aria-describedby="kode_kelasHelp">
            <div id="kode_kelas" class="form-text"></div>
        </div>
       
        <div class="mb-3">
            <label for="kode_mk" class="form-label">Kode MK</label>       
            <input type="nama" name="kode_mk" value="<?php echo $pjd['kode_mk']?>"  class="form-control" id="kode_mk" aria-describedby="kode_mkHelp">
        </div>
       

        <div class="mb-3">
            <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
            <input type="nama" name="mata_kuliah" value="<?php echo $pjd['mata_kuliah']?>" class="form-control" id="mata_kuliah" aria-describedby="mata_kuliahHelp">
        </div>

        <div class="mb-3">
            <label for="hari" class="form-label">Hari</label>
            <input type="nama" name="hari" value="<?php echo $pjd['hari']?>" class="form-control" id="hari" aria-describedby="harilHelp">
        </div>

        <div class="mb-3">
        <label for="jam_mulai" class="form-label">Jam Mulai</label>
        <input type="time" name="jam_mulai" value="<?php echo $pjd['jam_mulai']?>" class="form-control timepicker-input" data-target="#timepicker"/>
        </div>

        <div class="mb-3">
        <label for="jam_selesai" class="form-label">Jam Selesai</label>
        <input type="time" name="jam_selesai" value="<?php echo $pjd['jam_selesai']?>" class="form-control timepicker-input" data-target="#timepicker"/>
        </div>
       
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="name" name="nip" value="<?php echo $pjd['nip']?>" class="form-control" id="nip" aria-describedby="nipHelp">
        </div>

        <div class="mb-3">
            <label for="dosen" class="form-label">Dosen</label>
            <input type="name" name="dosen" value="<?php echo $pjd['dosen']?>" class="form-control" id="dosen" aria-describedby="dosenHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href = "penjadwalan.php"> Batal </a>
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