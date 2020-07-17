 <link rel="stylesheet" type="text/css" href="uts.css">


 <?php

 include_once 'konek.php';

 if (isset($_POST ['submit']))
 {
 	 $id = $_POST['id'];
	 $nama = $_POST['nama'];
	 $nisn = $_POST['nisn'];
	 $kelas = $_POST['kelas'];
	 $alamat = $_POST['alamat'];

$query= "INSERT INTO data_siswa (id,nama,nisn,kelas,alamat)";
$query .= " VALUE ('{}','{$nama}','{$nisn}','{$kelas}','{$alamat}')  ";
$result = mysqli_query($conn,$query);
	
 header('location: datasiswa.php');
 }

  include_once 'tambah_siswa.php';
 ?>












 <h2>Tambah Siswa</h2>
 <form method="post" action="tambah_siswa.php"enctype="multipart/form-data">
	 <div class="input">
		 <label>Nama siswa</label>
		 <input type="text" name="nama" />
	 </div>
	
	 <div class="input">
		 <label>NISN</label>
		 <input type="text" name="nisn" />
	 </div>
	 <div class="input">
		 <label>Kelas</label>
		 <input type="text" name="kelas" />
	 </div>
	 <div class="input">
		 <label>Alamat</label>
		 <input type="text" name="alamat" />
	 </div>
	 
	 <div class="submit">
		 <button type="submit" name="submit" style="margin-left: 153px; width: 180px;padding: 10px; border-radius: 15px; background-color: green;color: white; font-size: 15px;">Tambah Data</button>
	 </div>
 </form>