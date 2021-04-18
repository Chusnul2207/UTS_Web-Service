<?php
	include "conn.php";

	//Mendapatkan variabel post
	$BukuID = isset($_POST["BukuID"])? $_POST["BukuID"] : "";
	$JudulBuku = isset($_POST["JudulBuku"])? $_POST["JudulBuku"] : "";
	$Pengarang = isset($_POST["Pengarang"])? $_POST["Pengarang"] : "";
	$Tahun = isset($_POST["Tahun"])? $_POST["Tahun"] : "";

	$sql = "INSERT INTO sejarah (BukuID, JudulBuku, Pengarang, Tahun) VALUES ('".$BukuID."','".$JudulBuku."', '".$Pengarang."', '".$Tahun."');";
	echo $sql;

	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Simpan data berhasil";
	}else{
		$msg = "Simpan data gagal";
	}
	echo $msg;
?>
