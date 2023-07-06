<?php
$koneksi = mysqli_connect("localhost","root","","aplikasi_petshop");
$id=$_GET['id'];
$query = "DELETE FROM tbl_datauser WHERE id_datauser='$id'";
$hasil = mysqli_query($koneksi,$query);
if($hasil){
    header("location:datauser.php");
}
?>