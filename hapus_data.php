<?php
	
	 include_once 'konek.php';

	 $id = $_GET['id'];
	 $sql = "DELETE FROM data_siswa WHERE id = '{$id}' ";
	 $result = mysqli_query($conn,$sql);

 

  header('location: datasiswa.php');

 	
 ?>