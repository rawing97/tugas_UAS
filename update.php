<?php 

include 'koneksi.php';
$Nama = $_POST['Nama'];
$NISN = $_POST['NISN'];
$Alamat = $_POST['Alamat'];
$Kelas = $_POST['Kelas'];

mysql_query("UPDATE data_siswa SET Nama='$Nama', NISN='$NISN' ,Alamat='$Alamat', Kelas='$Kelas' WHERE NISN='$NISN'");

header("location:data_siswa.php?pesan=update");
?>