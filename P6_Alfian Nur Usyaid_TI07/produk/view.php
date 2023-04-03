<?php
require_once '../dbkoneksi.php';
include_once '../templates/top.php';
include_once '../templates/Sidebar.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Produk</a></li>
                        <li class="breadcrumb-item active">View Produk</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">View Produk</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>ID</td>

                                        <td>
                                            <?= $row['id'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kode</td>

                                        <td>
                                            <?= $row['kode'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Produk</td>

                                        <td>
                                            <?= $row['nama'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga Jual</td>

                                        <td>
                                            <?= $row['harga_jual'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga Beli</td>

                                        <td>
                                            <?= $row['harga_beli'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>

                                        <td>
                                            <?= $row['stok'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Stok</td>

                                        <td>
                                            <?= $row['min_stok'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Produk</td>

                                        <td>
                                            <?= $row['jenis_produk_id'] ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
include_once '../templates/footer.php';
?>