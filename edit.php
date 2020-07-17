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

	$sql = 'UPDATE data_siswa SET ';
	$sql .= "nama = '{$nama}', nisn = '{$nisn}', kelas = '{$kelas}', alamat = '{$alamat}' ";
	$sql .= "WHERE id = '{$id}'";
	$result = mysqli_query($conn,$sql);
	
 header('location: datasiswa.php');
 }
 	 $id = $_GET['id'];
	 $sql = "SELECT * FROM data_siswa WHERE id = '{$id}'";
	 $result = mysqli_query($conn, $sql);
	 if (!$result) die('Error: Data tidak tersedia');
	 $data = mysqli_fetch_array($result);

 function is_select($var, $val) {
	 if ($var == $val) return 'selected="selected"';
	 return false;
	}

  include_once 'edit.php';
 ?>

 <h2>Edit Data Siswa</h2>
 <form method="post" action="edit.php"enctype="multipart/form-data">
	 <div class="input">
		 <label>Nama siswa</label>
		 <input type="text" name="nama" value="<?php echo $data['nama']; ?>" />
	 </div>
	
	 <div class="input">
		 <label>NISN</label>
		 <input type="text" name="nisn" value="<?php echo $data['nisn']; ?>" />
	 </div>
	 <div class="input">
		 <label>Kelas</label>
		 <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"/>
	 </div>
	 <div class="input">
		 <label>Alamat</label>
		 <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"/>
	 </div>
	 
	 <div class="submit">
	 	<input type="hidden" name="id" value="<?php echo $data['id'];?>"/>
		<input type="submit" name="submit" value="Simpan"/>
	 </div>
 </form>