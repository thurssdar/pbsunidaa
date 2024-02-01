<?php
include_once("koneksi.php");
$id = $_GET['id'];
$qry = "SELECT * FROM penjadwalan WHERE id='$id'";
$data = mysqli_query($con,$qry);

$pjd = mysqli_fetch_array($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penjadwalan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class ="bg-body">
    <!-- awal navbar -->
    <?php
    include_once("navbar.php");
    ?>
    <!-- akhir navbar -->

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto mt-3">
        <div class="card">
  <div class="card-header">
    Edit Jadwal
  </div>
  <div class="card-body">
        <form action="proses_pjedit.php" method="POST" >
        <input type="hidden" name="id" value="<?php echo $pjd['id']?>" >
        <div class="mb-3">
            <label for="kode_penjadwalan" class="form-label">Kode Penjadwalan</label>
            <input type="nama" value="<?php echo $pjd['kode_penjadwalan']?>" name="kode_penjadwalan" class="form-control" id="kode_penjadwalan" aria-describedby="kodepjHelp">
            <div id="kode_penjadwalanHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="kode_kelas" class="form-label">Kode Kelas</label>
            <input type="nama" value="<?php echo $pjd['kode_kelas']?>" name="kode_kelas" class="form-control" id="kode_kelas" aria-describedby="kode_kelasHelp">
            <div id="kode_kelasHelp" class="form-text"></div>
        </div>
       
        <div class="mb-3">
            <label for="kode_mk" class="form-label">Kode MK</label>       
            <input type="nama" value="<?php echo $pjd['kode_mk']?>" name="kodemk"  class="form-control" id="kode_mk" aria-describedby="kode_mkHelp">
        </div>
       

        <div class="mb-3">
            <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
            <input type="nama" value="<?php echo $pjd['mata_kuliah']?>" name="mata_kuliah" class="form-control" id="mata_kuliah" aria-describedby="mata_kuliahHelp">
        </div>

        <div class="mb-3">
            <label for="hari" class="form-label">Hari</label>
            <input type="nama" value="<?php echo $pjd['hari']?>"name="hari" class="form-control" id="hari" aria-describedby="harilHelp">
        </div>

        <div class="mb-3">
        <label for="jam_mulai" class="form-label">Jam Mulai</label>
        <input type="time" value="<?php echo $pjd['jam_mulai']?>" name="jam_mulai" id="jam_mulai" class="form-control timepicker-input" data-target="#timepicker"/>
        </div>

        <div class="mb-3">
        <label for="jam_selesai" class="form-label">Jam Selesai</label>
        <input type="time" value="<?php echo $pjd['jam_selesai']?>" name="jam_selesai"  id="jam_selesai"class="form-control timepicker-input" data-target="#timepicker"/>
        </div>
       
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="name" value="<?php echo $pjd['nip']?>" name="nip" class="form-control" id="nip" aria-describedby="nipHelp">
        </div>

        <div class="mb-3">
            <label for="dosen" class="form-label">Dosen</label>
            <input type="name" value="<?php echo $pjd['dosen']?>" name="dosen" class="form-control" id="dosen" aria-describedby="dosenHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href = "index.php"> Batal </a>
        </form>
  </div>
</div>
    </div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>