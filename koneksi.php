<?php 
	$server = "johandicodingwebapp.mysql.database.azure.com";
	$user = "johansutrisno@johandicodingwebapp";
	$pass = "Johan300998";
	$db = "sayurandb";

	$koneksi = mysqli_init();

	mysqli_ssl_set($conn,NULL,NULL, "ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL) ; 
	mysqli_real_connect($conn, $server, $user, $pass, $db, 3306, MYSQLI_CLIENT_SSL);

	if (mysqli_connect_errno($conn)) {
		die('Failed to connect to MySQL: '.mysqli_connect_error());
	}

	// $koneksi = mysqli_connect($server,$user,$pass,$db);

	// Check connection
	// if (mysqli_connect_errno()){
		// echo "Koneksi database gagal : " . mysqli_connect_error();
	// }

?>