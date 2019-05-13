<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM tb_barang where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:view.php");

?>