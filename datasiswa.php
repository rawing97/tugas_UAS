<?php 
 include_once 'konek.php';
 $sql = 'SELECT * FROM data_siswa';
 $result = mysqli_query($conn, $sql);
   
?>





<html>
<head>
  <title>dashboard </title>
  <link rel="stylesheet" type="text/css" href="uts.css">
</head>
<body>

  
  <div class="sidebar">
    <h3>Admin</h3>
    <ul>
      <li ><a href="index.php">Dashboard</a></li>
      <li class="active"><a href="datasiswa.php">Data Siswa</a></li>
      <li><a href="pembayaran.html">Pembayaran</a></li>
      <li><a href="index.php">Log Out</a></li>
    </ul>
  </div>
  <div class="container ">
    <nav>
      <h3>SMKN 1 TAMBELANG</h3>
      <img src="logo.jpg" style="width: 55px; height:55px; float: right; margin-top: -42px;">
    </nav>
    <h1 style="text-align: center">DATA SISWA</h1>
     <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Cari Siswa ..." name="search">
      <button type="submit"  ><a href="cari.php">search</a></button>
    </form>
  </div>
  <br>
 <br>




<h1 style="border: 2px solid ; width: 28%;margin-bottom: 10px;border-radius: 15px; margin-left: 5px;padding: 5px; background-color: green; text-align: center;padding: 10px;"> <a href="tambah_siswa.php" >TAMBAH SISWA</a></h1>
    <table>
      <tr>
        <th>NO.ID</th>
        <th>NAMA</th>
        <th>NISN</th>
        <th>KELAS</th>
        <th>ALAMAT</th>
        <th>AKSI</th>
      </tr>
<?php while($row = mysqli_fetch_array($result)): ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['nama'];?></td>
        <td><?php echo $row['nisn'];?></td>
        <td><?php echo $row['kelas'];?></td>
        <td><?php echo $row['alamat'];?></td>
        <td>
          <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
          
          <a href="hapus_data.php?id=<?php echo $row['id'];?>">Delete</a>
        </td>
      </tr>
 <?php endwhile; ?>
    </table>

<a href="" style="float: right;"><i>Next Table>></i></a>

</body>
</html>