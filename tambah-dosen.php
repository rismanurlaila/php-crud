<!DOCTYPE html>
<html>
<head>
	<title>Tambah Dosen</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>


	<div class="container"style="margin-top: 100px">
        <div class="row">
        	<div class="col-md-8 offset-md-2">

       <form action="simpan-dosen.php" method="POST">

  <div class="form-group">
    <label>NAMA DOSEN</label>
    <input type="text" name="nama" class="form-control"placeholder="Masukan Nama Dosen" required > 
  </div>


 <div class="form-group">
    <label>ALAMAT DOSEN</label>
    <textarea class="form-control" name="alamat" rows="4" placeholder="Masukan Alamat Dosen" required></textarea>
  </div>
  <button type="submit" class="btn btn-success">SIMPAN</button>

  </form>

	 </div>
    </div>
   </div>

</body>
</html>