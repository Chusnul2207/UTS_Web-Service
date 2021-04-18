<?php
	include "conn.php";

	//Mendapatkan variabel post
	$BukuID = isset($_POST["BukuID"])? $_POST["BukuID"] : "";
	$JudulBuku = isset($_POST["JudulBuku"])? $_POST["JudulBuku"] : "";
	$Pengarang = isset($_POST["Pengarang"])? $_POST["Pengarang"] : "";
	$Penerbitan = isset($_POST["Penerbitan"])? $_POST["Penerbitan"] : "";

	$sql = "INSERT INTO novel (BukuID, JudulBuku, Pengarang, Penerbitan) VALUES ('".$BukuID."','".$JudulBuku."', '".$Pengarang."', '".$Penerbitan."');";
	echo $sql;


	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Simpan data berhasil";
	}else{
		$msg = "Simpan data gagal";
	}
	echo $msg;
?>
