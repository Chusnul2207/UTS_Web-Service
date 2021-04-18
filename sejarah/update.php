<?php
	include "conn.php";

	//menangkap variabel get
	$BukuID = $_GET['BukuID'];
	//echo $BukuID;

	$JudulBuku = $_POST['JudulBuku'];
	$Pengarang = $_POST['Pengarang'];
	$Tahun = $_POST['Tahun'];

	$sql = "UPDATE sejarah SET JudulBuku = '".$JudulBuku."', Pengarang = '".$Pengarang."',Tahun = '".$Tahun."' WHERE sejarah.BukuID = '".$BukuID."';"; 
	echo $sql;

	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Update data berhasil";
	}else{
		$msg = "Update data gagal"; 
	}
	echo $msg;
	
 ?>