<?php
//masukan juga koneksi ke database
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$npm = mysqli_real_escape_string($mysqli, $_POST['npm']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$jenis_kelamin = mysqli_real_escape_string($mysqli, $_POST['jenis_kelamin']);
	$prodi = mysqli_real_escape_string($mysqli, $_POST['prodi']);
	// cek apakah ada yang kosong
	if(empty($npm) || empty($nama) || empty($jenis_kelamin) || empty($prodi)) {	
			
		if(empty($npm)) {
			echo "<font color='red'>NPM field is empty.</font><br/>";
		}elseif(!preg_match('/^[0-9]+$/', $npm)) {
			echo "<font color='red'>NPM field is must be Number.</font><br/>";
		}
		
		if(empty($nama)) {
			echo "<font color='red'>Nama field is empty.</font><br/>";
		}
		
		if(empty($jenis_kelamin)) {
			echo "<font color='red'>Jenis Kelamin field is empty.</font><br/>";
		}

		if(empty($prodi)) {
			echo "<font color='red'>Prodi field is empty.</font><br/>";
		}
	} else {	
		//updating isi table
		$result = mysqli_query($mysqli, "UPDATE universitas_putera_batam SET npm='$npm',nama='$nama',jenis_kelamin='$jenis_kelamin',prodi='$prodi' WHERE id=$id");
		
		//di arahkan ke halama depan
		header("Location: index.php");
	}
}
?>
<?php
//dapatkan id dari url
$id = $_GET['id'];

//memilih data yang berhubungan dengan id
$result = mysqli_query($mysqli, "SELECT * FROM universitas_putera_batam WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$npm = $res['npm'];
	$nama = $res['nama'];
	$jenis_kelamin = $res['jenis_kelamin'];
	$prodi = $res['prodi'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Beranda</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>NPM :</td>
				<td><input type="text" name="npm" value="<?php echo $npm;?>"></td>
			</tr>
			<tr> 
				<td>Nama :</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>
			<tr> 
				<td>Jenis Kelamin: </td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin;?>"></td>
			</tr>
			<tr> 
				<td>Prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $prodi;?>"></td>
			</tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
