<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pelanggan";
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
                    <h1 class="m-0">List Pelanggan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active">Pelanggan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <a class="btn btn-success mb-2" href="form.php" role="button">Create Pelanggan</a>
            <table class="table text-center" width="100%" border="1" cellspacing="2" cellpadding="2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>ID</th>
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
                                <?= $row['kode'] ?>
                            </td>
                            <td>
                                <?= $row['nama'] ?>
                            </td>
                            <td>
                                <?= $row['jk'] ?>
                            </td>
                            <td>
                                <?= $row['tmp_lahir'] ?>
                            </td>
                            <td>
                                <?= $row['tgl_lahir'] ?>
                            </td>
                            <td>
                                <?= $row['email'] ?>
                            </td>
                            <td>
                                <?= $row['kartu_id'] ?>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="view.php?id=<?= $row['id'] ?>">View</a>
                                <a class="btn btn-primary" href="edit.php?idedit=<?= $row['id'] ?>">Edit</a>
                                <a class="btn btn-primary" href="delete.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $row['nama'] ?>?')) {return
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