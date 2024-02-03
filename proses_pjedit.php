<?php
//1. Membuat Koneksi
include_once("koneksi.php");

//2. Mengambil Seluruh Nilai Input Dan Dimasukkan Dalam Variabel
$id_pj =$_POST['id_pj'];
$kode_penjadwalan = $_POST['kode_penjadwalan'];
$kode_kelas = $_POST['kode_kelas'];
$kode_mk = $_POST['kode_mk'];
$mata_kuliah = $_POST['mata_kuliah'];
$hari = $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$nip = $_POST['nip'];
$dosen = $_POST['dosen'];

//3. Membuat query update
$qry = "UPDATE penjadwalan SET kode_penjadwalan='$kode_penjadwalan', kode_kelas='$kode_kelas', kode_mk='$kode_mk', mata_kuliah='$mata_kuliah', hari='$hari', jam_mulai='$jam_mulai',
jam_selesai='$jam_selesai', nip='$nip', dosen='$dosen' WHERE id_pj='$id_pj'";
//4. Menjalankan Query
$simpan = mysqli_query($con,$qry);

//5. ALihkan ke halaman index.php
?>
<script>
    document.location="penjadwalan.php";
</script>
