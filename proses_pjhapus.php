<?php
//1. Membuat Koneksi
include_once("koneksi.php");

//2. Mengambil  id dari URL
$id_pj = $_GET['id_pj'];

//3. Membuat Query delete
$qry= "DELETE FROM penjadwalan WHERE id_pj='$id_pj'";

//4. Menjalankan Query
$simpan = mysqli_query($con,$qry);

//5. Redirect ke index
?>
<script>
    document.location="penjadwalan.php";
</script>