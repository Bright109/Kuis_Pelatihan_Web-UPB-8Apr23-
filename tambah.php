<html>
<head>
	<title>Tambah Data</title>
</head>

<body>
<?php
//masukan juga koneksi ke database
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$npm = mysqli_real_escape_string($mysqli, $_POST['npm']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$jenis_kelamin = mysqli_real_escape_string($mysqli, $_POST['jenis_kelamin']);
	$prodi = mysqli_real_escape_string($mysqli, $_POST['prodi']);

	// untuk mengecek kosong atau terisi
	if(empty($nama) || empty($npm) || empty($jenis_kelamin) || empty($prodi)) {
				
		if(empty($nama)) {
			echo "<font color='red'>Nama field is empty.</font><br/>";
		}
		
		if(empty($npm)) {
			echo "<font color='red'>NPM field is empty.</font><br/>";
		}elseif(!preg_match('/^[0-9]+$/', $npm)) {
			echo "<font color='red'>NPM field is must be Number.</font><br/>";
		}
		
		if(empty($jenis_kelamin)) {
			echo "<font color='red'>Jenis Kelamin field is empty.</font><br/>";
		}

		if(empty($prodi)) {
			echo "<font color='red'>Prodi field is empty.</font><br/>";
		}
		//link ke halaman sebelum nya
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// jika semua terisi semua
			
		//masukan data ke database	
		$result = mysqli_query($mysqli, "INSERT INTO universitas_putera_batam(npm,nama,jenis_kelamin,prodi) VALUES('$npm','$nama','$jenis_kelamin','$prodi')");
		
		//menampilkan pesan berhasil
		echo "<font color='green'>Data Berhasil Ditambahkan.";
		echo "<br/><a href='index.php'>Lihat Hasil</a>";
	}
}
?>
</body>
</html>
