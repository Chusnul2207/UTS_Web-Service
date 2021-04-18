<?php
	include "conn.php";

	$BukuID = $_GET['BukuID'];

	$sql = "DELETE FROM science WHERE BukuID = '".$BukuID."';";
	echo $sql;

	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Hapus data berhasil";
	}else{
		$msg = "Hapus data gagal"; 
	}
	echo $msg;
	
 ?>
