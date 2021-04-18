<?php
	include "conn.php";

	$BukuID = $_GET['BukuID'];

	$sql = "DELETE FROM sejarah WHERE BukuID = '".$BukuID."';";
	echo $sql;

	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Update data berhasil";
	}else{
		$msg = "Update data gagal"; 
	}
	echo $msg;
	
 ?>