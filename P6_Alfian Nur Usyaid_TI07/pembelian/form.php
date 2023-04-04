<?php
include_once '../templates/top.php';
include_once '../templates/Sidebar.php';
require_once '../dbkoneksi.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Kelola Pembelian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Pembelian</a></li>
                        <li class="breadcrumb-item active">Create Pembelian</li>
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
                <h3 class="card-title">Create Pembelian</h3>

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

                <form method="POST" action="proses.php">
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nomor" class="col-4 col-form-label">Nomor Pembelian</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-anchor"></i>
                                    </div>
                                </div>
                                <input id="nomor" name="nomor" type="text" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="produk_id" class="col-4 col-form-label">Id Produk</label>
                        <div class="col-8">
                            <?php
                            $sqljenis = "SELECT * FROM produk";
                            $rsjenis = $dbh->query($sqljenis);
                            ?>
                            <select id="produk_id" name="produk_id" class="custom-select">
                                <?php
                                foreach ($rsjenis as $rowjenis) {
                                    ?>
                                    <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-arrow-circle-up"></i>
                                    </div>
                                </div>
                                <input id="jumlah" name="jumlah" value="" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-4 col-form-label">Harga</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-arrow-circle-up"></i>
                                    </div>
                                </div>
                                <input id="harga" name="harga" value="" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="vendor_id" class="col-4 col-form-label">Id Vendor</label>
                        <div class="col-8">
                            <?php
                            $sqljenis = "SELECT * FROM vendor";
                            $rsjenis = $dbh->query($sqljenis);
                            ?>
                            <select id="vendor_id" name="vendor_id" class="custom-select">
                                <?php
                                foreach ($rsjenis as $rowjenis) {
                                    ?>
                                    <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <?php
                            $button = (empty($_idedit)) ? "Simpan" : "Update";
                            ?>
                            <input type="submit" name="proses" type="submit" class="btn btn-primary"
                                value="<?= $button ?>" />
                            <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<?php
include_once '../templates/footer.php';
?>