<!doctype html>
<?php include 'koneksi.php'; ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pemesanan Sayur</title>
  </head>
  <body class="container-fluid">
    <br><br><br>
    <div class="row">
      <div class="span6" style="float: none; margin: 0 auto;">
        <center><a href="view.php">Lihat Data</a> | <a href="index.php">Input Data</a></center><br>
        <div class="col-md-12 mb-12">
          <div class="card">
            <div class="card-header">
              Form input barang
            </div>
            <div class="card-body">
              <form method="post" action="insert.php">
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <?php $id = uniqid('php_'); ?>
                    <label for="validationCustom01">Kode Order</label>
                    <input type="text" name="nama" class="form-control" placeholder="Kode Order" value="<?php echo uniqid(''); ?>" required readonly>
                  </div>
                  <div class="col-md-12 mb-12">
                    <label for="validationCustom01">Item</label>
                    <select name="item" class="form-control" placeholder="Beras Merah" id="item" required>
                      <?php 
                        $sql = "SELECT * FROM tb_sayuran";
                        if($result = mysqli_query($koneksi, $sql)){
                          if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                              echo "<option value=". $row['sayuran_id'] .">" . $row['sayur'] . "</option>";
                            }
                          }
                        }
                      ?>
                    </select>
                  </div>
                  <div class="col-md-12 mb-12">
                    <label for="validationCustom02">Quantity(ton)</label>
                    <input type="number" name="jumlah" class="form-control" placeholder="quantity" id="qty" onchange="price();" required>
                  </div>
                  <div class="col-md-12 mb-12">
                    <label for="validationCustom02">Total harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="harga" required readonly id="calculation" onchange="price();">
                  </div>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Order</button>
              </form>

              <script type="text/javascript">
                function price() {
                  var a = parseInt(document.getElementById('qty').value)
                  var e = document.getElementById("item");
                  var strUser = e.options[e.selectedIndex].value;
                  var harga = 0;
                  var total = 0;

                  if (strUser==1) {
                    harga = 11000000;
                  } else if (strUser==2) {
                    harga = 12000000;
                  } else if (strUser==3) {
                    harga = 2000000;
                  } else if (strUser==4) {
                    harga = 5000000;
                  } else {
                    harga = 6000000;
                  }

                  total = a * harga;

                  document.getElementById('calculation').value = total;
                }

              </script>

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>