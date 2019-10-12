<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>


	<div class="container"style="margin-top: 100px">
        <div class="row">
        	<div class="col-md-12">
          <a href="tambah-dosen.php" class="btn btn-success btn-md" style="margin-bottom: 10px">TAMBAH</a>
       <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NAMA DOSEN</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>

  <?php
     include('config/koneksi.php');
     ?>
     
    <?php
    $query = "SELECT * FROM tbl_dosen ORDER BY id_dosen DESC";
    $result = mysqli_query($connection, $query);
    ?>

    <?php
        while ($row = mysqli_fetch_array($result)){
          ?>

    <tr>
      <td><?php echo $row['nama_dosen']?></td>
      <td><?php echo $row['alamat']?></td>
      <td>
        <a href="edit-dosen.php?id=<?php echo $row['id_dosen']?>" class="btn btn-primary btn-sm">EDIT</a>
        <a href="hapus-dosen.php?id=<?php echo $row['id_dosen']?>" class="btn btn-danger btn-sm">HAPUS</a>
      </td>
    </tr>

  <?php } ?>
    
  </tbody>
</table>

	 </div>
    </div>
   </div>

</body>
</html>