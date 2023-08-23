<?php 

include "server/koneksi.php";

$getidreservasi = $_GET['idreservasi'];

$deletereservasi = "DELETE FROM reservasi WHERE id_reservasi = '$getidreservasi'";
$connectcekreservasi = mysqli_query($koneksi, $cekreservasi);

if($connectcekreservasi){
	header("location:index.php");
}




 ?>