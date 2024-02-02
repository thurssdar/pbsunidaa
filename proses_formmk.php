<?php
//1. Membuat Koneksi
include_once("koneksi.php");

//2. Mengambil Seluruh Nilai Input Dan Dimasukkan Dalam Variabel

$kode_mk = $_POST['kode_mk'];
$mata_kuliah = $_POST['mata_kuliah'];

//3. Membuat query update
$qry = "INSERT INTO mata_kuliah (kode_mk,mata_kuliah)
 VALUES ('$kode_mk','$mata_kuliah')";

//4. Menjalankan Query
$simpan = mysqli_query($con,$qry);

//5. ALihkan ke halaman index.php
?>
<script>
    document.location="matakuliah.php";
</script>
