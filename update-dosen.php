<?php

//panggil koneksi ke database
include('config/koneksi.php');

$id     = $POST['id_dosen'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];

$query = "UPDATE tbl_dosen SET nama_dosen = '$nama', alamat = '$alamat' WHERE id_dosen = '$id'";


if($connection->query($query) === TRUE) {
  header("location: index.php");
}else{
	echo "DATA GAGAL DIUPDATE!";
}