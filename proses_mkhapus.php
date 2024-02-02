<?php
//1. Membuat Koneksi
include_once("koneksi.php");

//2. Mengambil  id dari URL
$id_mk = $_GET['id_mk'];

//3. Membuat Query delete
$qry= "DELETE FROM mata_kuliah WHERE id_mk='$id_mk'";

//4. Menjalankan Query
$simpan = mysqli_query($con,$qry);

//5. Redirect ke index
?>
<script>
    document.location="matakuliah.php";
</script>