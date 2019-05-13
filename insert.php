<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$item = $_POST['item'];
$harga = $_POST['harga'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tb_barang (nama, jumlah, harga, item) values('$nama','$jumlah','$harga','$item')");

// mengalihkan halaman kembali ke index.php
header("location:view.php");

?>