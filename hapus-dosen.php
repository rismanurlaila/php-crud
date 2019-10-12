<?php

include('config/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_dosen WHERE id_dosen = '$id'";

if($connection->query($query) === TRUE) {
  header("location: index.php");
}else{
	echo "DATA GAGAL DIHAPUS!";
}