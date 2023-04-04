<?php
require_once '../dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM Vendor WHERE id=?";
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
                    <h1>Kelola vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">vendor</a></li>
                        <li class="breadcrumb-item active">View vendor</li>
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
                <h3 class="card-title">View vendor</h3>

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
                                        <td>Nomor Vendor</td>
                                        <td>
                                            <?= $row['nomor'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <?= $row['nama'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kota</td>
                                        <td>
                                            <?= $row['kota'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kontak</td>
                                        <td>
                                            <?= $row['kontak'] ?>
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