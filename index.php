<?php

//masukan juga koneksi ke database
include_once("config.php");

//menampilkan data dengan urutan (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM universitas_putera_batam ORDER BY id ASC"); // using mysqli_query instead
?>

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Beranda</title>
</head>

<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="about_upb.jpg">
      <div class="carousel-caption">
        <h3>About</h3>
        <p>Universitas Putera Batam berdiri pada tahun 2008 yang pada awal nya merupakan sebuah Lembaga Pendidikan Komputer dan Bahasa Inggris yang telah berdiri pada tahun 1992 dengan nama Lembaga Pendidikan Putera Batam, dan berkat landasan yang kuat, visi yang jelas serta dedikasi yang berkesinambungan, dan juga dukungan dari masyarakat Kota Batam maka lembaga pendidikan ini terus berkembang menjadi Akademi Bahasa Asing (ABA) Putera Batam pada tahun 2002.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="pintu_utama_upb.jpg" alt="Image 2">
      <div class="carousel-caption">
        <h3>Lokasi</h3>
        <h5>Lokasi Universitas Putera Batam terdiri dari :</h5>
        <ul>
          <li><h5>Kampus A :</h5></li>
            <ul>
              <li>Jalan R. Soeprapto, Muka Kuning, Batam. </li>
              <li>Kode Pos 29452</li>
            </ul>
        </ul>
        <ul>
          <li><h5>Kampus B:</h5></li>
          <ul>
            <li>Jalan Raden Patah, Nagoya, Batam. </li>
            <li>Kode Pos 29444 </li>
          </ul>
        </ul>
      </div>
    </div>
    <div class="carousel-item">
      <img src="fasilitas.jpg" alt="Image 3">
      <div class="carousel-caption">
        <h3>Fasilitas</h3>
        <h5>Kampus Putera Batam memiliki Fasilitas lengkap dan canggih sehingga memudahkan proses belajar mengajar sebagai berikut :</h5>
        <ul>
          <li>1. Biro Penerimaan Mahasiswa Baru dan layanan mahasiswa</li>
          <li>2. Migas Center</li>
          <li>3. Ruang Lab Cisco</li>
          <li>4. Lab Multimedia</li>
          <li>dst...</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br/>
<!-- Button Rombak -->
<!-- <div class="ml-3">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
      Open Modal
  </button>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myModalLabel">Post Request</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="tambah.php" method="post" name="form1">
            <div class="form-group">
              <label for="merek">NPM :</label>
              <input type="text" class="form-control" name="npm" required>
            </div>
            <div class="form-group">
              <label for="size">Nama :</label>
              <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
              <label for="jumlah">Jenis Kelamin</label>
              <input type="text" class="form-control" name="jenis_kelamin" required>
            </div>
            <div class="form-group">
              <label for="keterangan">Prodi</label>
              <input type="text" class="form-control" name="prodi" required>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="Submit" value="Tambah">Save Mahasiswa</button>
          </div>
        </form>
			</div>
		</div>
	</div>
</div> -->

<!-- Button Bootstrap Ends Here-->
<button onclick="location.href='tambah.html'"; style="margin-left:12px"> Tambah Data </button> 
<br/>
<br/>
<div align="center">
<table width='90%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td style="text-align:center">Id</td>
		<td style="text-align:center">NPM</td>
		<td style="text-align:center">Nama Mahasiswa</td>
		<td style="text-align:center">Jenis Kelamin</td>
		<td style="text-align:center">Prodi</td>
    <td style="text-align:center">Aksi</td>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td style=\"text-align:center\">".$res['id']."</td>";
		echo "<td style=\"text-align:center\">".$res['npm']."</td>";
		echo "<td style=\"text-align:center\">".$res['nama']."</td>";
		echo "<td style=\"text-align:center\">".$res['jenis_kelamin']."</td>";
    echo "<td style=\"text-align:center\">".$res['prodi']."</td>";
    echo "<td style=\"text-align:center\"><a href=\"edit.php?id=$res[id]\"><i class=\"mdi mdi-pencil\"></i></a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"> <i class=\"mdi mdi-trash-can\"></i></a></td>";
  }
	?>
	</table>
</div>
	
</body>

<style>
.carousel-inner {
  height:450px;
}

.carousel-item {
  height:100%;
}

.carousel-caption {
  background-color: rgba(0,0,0,0.5);
  padding: 20px;
  color: #fff;
}

ul {
      list-style: none;
    }

    li {
      list-style: none;
    }
</style>

</html>
