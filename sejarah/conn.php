<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "buku";

	$conn = mysqli_connect($servername, $username, $password, $databasename);
		if(!$conn){
			die("Koneksi tidak berhasil");
		}
?>