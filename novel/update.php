<?php
	include "conn.php";

	//menangkap variabel get
	$BukuID = $_GET['BukuID'];
	//echo $BukuID;

	$JudulBuku = $_POST['JudulBuku'];
	$Pengarang = $_POST['Pengarang'];
	$Penerbitan = $_POST['Penerbitan'];

	$sql = "UPDATE novel SET JudulBuku = '".$JudulBuku."', Pengarang = '".$Pengarang."',Penerbitan = '".$Penerbitan."' WHERE novel.BukuID = '".$BukuID."';"; 
	echo $sql;

	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Update data berhasil";
	}else{
		$msg = "Update data gagal"; 
	}
	echo $msg;
	
 ?>