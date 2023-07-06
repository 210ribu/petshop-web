<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PETSHOP NGAB DIKSI</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
<head>
 <title>Halaman Admin</title>
</head>
<body>
    <table class="table">
    <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
                
            </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"SELECT * FROM tbl_datauser");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_user']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
            <a class="btn btn-danger" href="deletedatauser.php?id=<?php echo $d['id_datauser']; ?>">Hapus</a>
            
        </tr>

        <?php 
        }
        ?>
    </tbody>
    </table>
    <button type="button" class="btn btn-primary w-100 text-center" ><a href="halaman_admin.php" class="text-light">Kembali Ke Menu Admin</a></button>
</div>
</body>
</html>

                                        


                                        




                                        