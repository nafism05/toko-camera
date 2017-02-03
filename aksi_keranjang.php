<?php

session_start();

include('koneksi.php');

$produk_id = $_GET['produk'];
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM keranjang WHERE produk_id='$produk_id' AND user_id='$user_id'";

if($result = mysqli_query($koneksi, $sql)){

    $rowcount = mysqli_num_rows($result);
    if($rowcount>0){ //data ditemukan, jumlah ditambahkan

        // update jumlah pada tabel keranjang, lihat cara update di crud-mysqli github
        // untuk where nya ada dua opsi, opsi pertama pakek produk_id dan user_id seperti query yg ada diatas
        // untuk opsi kedua pakek keranjang_id

    }else{ //data tidak ditemukan, buat keranjang baru

        // insert data ke tabel keranjang, lihat crud
        
        $sql = "INSERT INTO keranjang VALUES(NULL, '$produk_id', '$user_id', 1)";

    }
} else {
    die('Error: '.mysqli_error($koneksi));
}

?>
