<?php
include "koneksi.php";
$koneksi=mysqli_connect("localhost","root","","aplikasi_petshop");
$id=$_POST['id_barang'];
$nama=$_POST['nama_barang'];
$harga=$_POST['harga'];
$stok_barang=$_POST['stok_barang'];

$query = "UPDATE tbl_barang SET nama_barang='$nama', harga='$harga', stok_barang='$stok_barang' WHERE id_barang='$id'";
$hasil = mysqli_query($koneksi,$query);
if($hasil){
    header("location:halaman_admin.php");
}
?>
