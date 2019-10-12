<?php

//panggil koneksi ke database
include('config/koneksi.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO tbl_dosen (nama_dosen, alamat) VALUES ('$nama', '$alamat')";

if($connection->query($query) === TRUE) {
  header("location: tambah-dosen.php");
}else{
	echo "DATA GAGAL DISIMPAN!";
}