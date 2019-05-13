<?php 
	$server = "johandicodingwebapp.mysql.database.azure.com";
	$user = "johansutrisno@johandicodingwebapp";
	$pass = "Johan300998";
	$db = "sayurandb";

	$koneksi = mysqli_connect($server,$user,$pass,$db);

	// Check connection
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

?>