<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pencatatan Barang</title>
  </head>
  <body class="container-fluid">
    <br><br><br>
    <div class="row">
      <div class="span6" style="float: none; margin: 0 auto;">
        <center><a href="view.php">Lihat Data</a> | <a href="index.php">Input Data</a></center><br>
        <div class="col-md-12 mb-12">
          <div class="card">
            <div class="card-header">
              Form Input Barang
            </div>
            <div class="card-body">

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Kode Pemesanan</th>
                    <th>Sayuran</th>
                    <th>Jumlah</th>
                    <th>Total harga</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"SELECT * FROM `tb_sayuran`, `tb_barang` WHERE tb_sayuran.sayuran_id=tb_barang.item");
                    while($d = mysqli_fetch_array($data)){
                  ?>

                  <tr>
                    <th><?php echo $no++; ?></th>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['sayur']; ?></td>
                    <td><?php echo $d['jumlah']; ?></td>
                    <td><?php
                      $totalharga = ($d['jumlah'] * $d['harga']) + ($d['jumlah'] * $d['harga']*20/100);
                      echo $totalharga; ?></td>
                    <td><!-- <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>| -->
                      <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a></td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>

            </div>
          </div>
        </div>

        </div>
    </div>

  </body>
</html>