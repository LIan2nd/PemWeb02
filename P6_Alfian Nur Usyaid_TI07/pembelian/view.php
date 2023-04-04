<?php
require_once '../dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM Pembelian WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>
<?php
include_once '../templates/top.php';
include_once '../templates/Sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Pembelian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Pembelian</a></li>
                        <li class="breadcrumb-item active">View Pembelian</li>
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
                <h3 class="card-title">View Pembelian</h3>

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
                                        <td>Tanggal</td>
                                        <td>
                                            <?= $row['tanggal'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Pembelian</td>
                                        <td>
                                            <?= $row['nomor'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Id Produk</td>
                                        <td>
                                            <?= $row['produk_id'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td>
                                            <?= $row['jumlah'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>
                                            <?= $row['harga'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Id Vendor</td>
                                        <td>
                                            <?= $row['vendor_id'] ?>
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