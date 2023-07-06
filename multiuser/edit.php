<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<body>
    <h2>Form Edit</h2>
    <?php
    $koneksi=mysqli_connect("localhost","root","","aplikasi_petshop");
    $id=$_GET['id'];
    $query=mysqli_query($koneksi,"SELECT * FROM tbl_barang WHERE id_barang='$id'");
    $data=mysqli_fetch_array($query);
    ?>
    <form action="edit_proses.php" method="post">
        <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
            </tr>
            <tr>
                <td>Stok Barang</td>
                <td><input type="text" name="stok_barang" value="<?php echo $data['stok_barang']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
