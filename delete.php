<?php
//masukan juga koneksi ke database
include("config.php");

//dapatkan id dari url
$id = $_GET['id'];

//hapus baris dalam tabel
$result = mysqli_query($mysqli, "DELETE FROM universitas_putera_batam WHERE id=$id");

//di arahkan ke beranda
header("Location:index.php");
?>

