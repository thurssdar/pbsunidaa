<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class ="bg-danger-subtle">
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
    Penjadwalan
  </div>
  <div class="card-body">
        <form action="proses_form.php" method="POST" >
        <div class="mb-3">
            <label for="kodepj" class="form-label">Kode Penjadwalan</label>
            <input type="kodepj"  name="kodepj" class="form-control" id="kodepj" aria-describedby="kodepjHelp">
            <div id="nimHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="kodekl" class="form-label">Kode Kelas</label>
            <input type="kodekl"  name="kodekl" class="form-control" id="kodekl" aria-describedby="kodeklHelp">
            <div id="namaHelp" class="form-text"></div>
        </div>
       
        <div class="mb-3">
            <label for="kodemk" class="form-label">Kode MK</label>       
            <input type="kodemk" name="kodemk"  class="form-control" id="kodemk" aria-describedby="kodemkHelp">
        </div>
       

        <div class="mb-3">
            <label for="mk" class="form-label">Mata Kuliah</label>
            <input type="mk" name="mk" class="form-control" id="mk" aria-describedby="mkHelp">
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Hari</label>
            <input type="date" name="tanggal" class="form-control" id="Tanggal" aria-describedby="tanggalHelp">
        </div>

        <div class="mb-3">
        <label for="jam" class="form-label">JAM</label>
        <input type="jam" class="form-control timepicker-input" data-target="#timepicker"/>
        <div class="input-group date" id="timepicker" data-target-input="nearest">
        <div class="input-group-append" data-target="#timepicker" data-toggle="timepicker">
        <div class="input-group-text"><i class="far fa-clock"></i></div>
        </div>
        </div>
       
        <div class="mb-3">
            <label for="Emai1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="Emai1" aria-describedby="emailHelp">
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