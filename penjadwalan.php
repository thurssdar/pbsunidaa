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
  <!-- Navbar -->
  <?php include_once('navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('sidebar.php') ?>

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Penjadwalan</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="col-md-12 m-auto">
      <a class="btn btn-outline-primary mb-1" href="formpj.php" ><i class="fa fa-calendar-plus"></i>  Tambah Jadwal </a>
      <br>
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jadwal</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Mata Kuliah</th>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Dosen</th>
                    <th></th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    //1. membuat koneksi
                    include_once("koneksi.php");

                    //2. membuat query utk menampilkan seluruh data 
                    $qry = "SELECT * FROM penjadwalan";

                    //3. menjalankan query
                    $tampil = mysqli_query($con,$qry);
                    //4. perulangan menampilkan data menggunakan looping foreach
                    $nomor = 1;
                  foreach($tampil as $data){
                  ?>
                  <tr>
                    <td><?php echo $data['mata_kuliah'] ?></td>
                    <td><?php echo $data['hari'] ?></td>
                    <td><?php echo $data['jam_mulai'] ?></td>
                    <td><?php echo $data['jam_selesai'] ?></td>
                    <td><?php echo $data['dosen'] ?></td>
                    <td>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-xl<?php echo $data['id_pj'] ?>">
                     Detail
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-xl<?php echo $data['id_pj'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content modal-xl">
                    <div class="modal-header modal-xl">
                        <h1 class="modal-title fs-5" id="modal-xl">Data Detail <?php echo $data['kode_penjadwalan'] ?></h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-dialog modal-xl">
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Kode Penjadwalan</th>
                        <th scope="col">Kode Kelas</th>
                        <th scope="col">Kode MK</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam Mulai</th>
                        <th scope="col">Jam Selesai</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Dosen</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo $data['kode_penjadwalan'] ?></td>
                        <td><?php echo $data['kode_kelas'] ?></td>
                        <td><?php echo $data['kode_mk'] ?></td>
                        <td><?php echo $data['mata_kuliah'] ?></td>
                        <td><?php echo $data['hari'] ?></td>
                        <td><?php echo $data['jam_mulai'] ?></td>
                        <td><?php echo $data['jam_selesai'] ?></td>
                        <td><?php echo $data['nip'] ?></td>
                        <td><?php echo $data['dosen'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                        </div>
                        </div>
                    </td>
                   
                    <td> 
                      <a href ="penjadwalan_edit.php?id_pj=<?php echo $data['id_pj'] ?>" class="btn btn-outline-secondary"><i class="fa fa-pencil-alt"></i></a>
                      <button  type="button"  class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_pj'] ?>"><i class="fa fa-trash"></i></button>
                      <!-- Modal -->
                      <div class="modal fade" id="hapus<?php echo $data['id_pj'] ?>" tabindex="-1" aria-labelledby="hapusLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              Apakah Penjadwalan Dengan Mata Kuliah <b><?php echo $data['mata_kuliah'] ?></b> Ingin Dihapus?
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                              <a href= "proses_pjhapus.php?id_pj=<?php echo $data['id_pj'] ?>" class="btn btn-danger">Ya</a>
                          </div>
                          </div>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <?php
                  }
                  ?>
                  </tbody>
                  <tfoot>
                  <tfoot>
                  <tr>
                    <th>Mata Kuliah</th>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Dosen</th>
                    <th></th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>