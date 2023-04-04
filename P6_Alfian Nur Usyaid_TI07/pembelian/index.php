<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pembelian";
$rs = $dbh->query($sql);
?>

<?php
include_once '../templates/Top.php';
include_once '../templates/Sidebar.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Pembelian</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active">Pembelian</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <a class="btn btn-success mb-2" href="form.php" role="button">Create Pembelian</a>
            <table class="table text-center" width="100%" border="1" cellspacing="2" cellpadding="2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nomor Pembelian</th>
                        <th>Id Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Id Vendor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($rs as $row) {
                        ?>
                        <tr>
                            <td>
                                <?= $nomor ?>
                            </td>
                            <td>
                                <?= $row['tanggal'] ?>
                            </td>
                            <td>
                                <?= $row['nomor'] ?>
                            </td>
                            <td>
                                <?= $row['produk_id'] ?>
                            </td>
                            <td>
                                <?= $row['jumlah'] ?>
                            </td>
                            <td>
                                <?= $row['harga'] ?>
                            </td>
                            <td>
                                <?= $row['vendor_id'] ?>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="view.php?id=<?= $row['id'] ?>">View</a>
                                <a class="btn btn-primary" href="edit.php?idedit=<?= $row['id'] ?>">Edit</a>
                                <a class="btn btn-primary" href="delete.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $row['nomor'] ?>?')) {return
                                false}">Delete</a>
                            </td>
                        </tr>
                        <?php
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
    </section>
</div>

</div>
</div>

<?php
include_once '../templates/footer.php'

    ?>