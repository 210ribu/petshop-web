<?php
$koneksi = mysqli_connect("localhost","root","","aplikasi_petshop");
$id=$_GET['id'];
$query = "DELETE FROM tbl_barang WHERE id_barang='$id'";
$hasil = mysqli_query($koneksi,$query);
if($hasil){
    header("location:halaman_admin.php");
}
?>