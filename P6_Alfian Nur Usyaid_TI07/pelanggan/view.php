<?php
require_once '../dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
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
                    <h1>Kelola Pelanggan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Pelanggan</a></li>
                        <li class="breadcrumb-item active">View Pelanggan</li>
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
                <h3 class="card-title">View Pelanggan</h3>

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
                                        <td>Nama Pelanggan</td>
                                        <td>
                                            <?= $row['nama'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <?= $row['jk'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>
                                            <?= $row['tmp_lahir'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>
                                            <?= $row['tgl_lahir'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            <?= $row['email'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kartu id</td>
                                        <td>
                                            <?= $row['kartu_id'] ?>
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