<?php
$koneksi = mysqli_connect("localhost","root","","aplikasi_petshop");

$nama=$_POST['nama_user'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];

$query = "INSERT INTO tbl_datauser (nama_user, email, alamat) VALUES ('$nama','$email','$alamat')";
$hasil = mysqli_query($koneksi,$query);
if ($hasil) {
    header("location:http://localhost/barangpetshop/multiuser/halaman_users.php");
}
?>
