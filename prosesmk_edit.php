<?php
//1. Membuat Koneksi
include_once("koneksi.php");

//2. Mengambil Seluruh Nilai Input Dan Dimasukkan Dalam Variabel
$kode_mk = $_POST['kode_mk'];
$mata_kuliah = $_POST['mata_kuliah'];



//3. Membuat query update
$qry = "UPDATE mata_kuliah SET kode_kelas='$kode_mk', kode_mk='$mata_kuliah' WHERE id_mk='$id_mk'";
//4. Menjalankan Query
$simpan = mysqli_query($con,$qry);

//5. ALihkan ke halaman index.php
?>
<script>
    document.location="penjadwalan.php";
</script>
