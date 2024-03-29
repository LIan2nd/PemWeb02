<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700;800;900&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 my-3">
                <h2>Belanja Online</h2>
                <hr>

                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"
                                    required="required">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input"
                                    value="KULKAS" required="required">
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input"
                                    value="MESIN CUCI" required="required">
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah Pembelian" type="text"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4 my-3">
                <ul class="list-group">
                    <li class="list-group-item active">Daftar Harga</li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active">Harga dapat berubah setiap saat</li>
                </ul>
            </div>
        </div>
    </div>
    <hr>

    <!-- PHP -->
    <div class="container mt-5">
        <table class="table table-borderless text-center">
            <?php if (isset($_POST['submit'])):
                $nama = $_POST['nama'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];
                if ($produk == "TV") {
                    $total_belanja = $jumlah * 4200000;
                } elseif ($produk == "KULKAS") {
                    $total_belanja = $jumlah * 3100000;
                } elseif ($produk == "MESIN CUCI") {
                    $total_belanja = $jumlah * 3800000;
                }
                $total = number_format($total_belanja, 0, ".", ".");
                ?>
                <thead>
                    <tr class="font-weight-bold" style="background-color: #addbff;">
                        <td>Nama Customer</td>
                        <td>Produk Pilihan</td>
                        <td>Jumlah Beli</td>
                        <td>Total Belanja</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-light text-dark">
                        <td>
                            <?= $nama ?>
                        </td>
                        <td>
                            <?= $produk ?>
                        </td>
                        <td>
                            <?= $jumlah ?>
                        </td>
                        <td>
                            <?= "Rp. $total,-" ?>
                        </td>
                    </tr>
                </tbody>
            <?php endif ?>
        </table>
    </div>

</body>

</html>