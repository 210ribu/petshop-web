<?php
$koneksi = mysqli_connect("localhost","root","","aplikasi_petshop");

$nama=$_POST['nama_barang'];
$harga=$_POST['harga'];
$stok=$_POST['stok_barang'];

$query = "INSERT INTO tbl_barang (nama_barang, harga, stok_barang) VALUES ('$nama','$harga','$stok')";
$hasil = mysqli_query($koneksi,$query);
if ($hasil) {
    header("location:halaman_admin.php");
}
?>

