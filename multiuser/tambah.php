<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<body>
    <h2>Form Tambah</h2>
    <form class="form-horizontal"action="tambah_proses.php" method="post" > 
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama_barang">Nama Barang:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang" name="nama_barang">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="harga">Harga:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="stok_barang">Stok Barang:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="stok_barang" placeholder="Masukkan Jumlah Stok Barang" name="stok_barang">
    </div>
  </div>
  <div class="form-group">
    <div class="mt-5 col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default ">Add </button>
    </div>
  </div>
</form>

</body>
</html>
