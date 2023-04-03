<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM kartu";
$cards = $dbh->query($sql);
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
                    <h1 class="m-0">List Kartu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active">Kartu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <a class="btn btn-success mb-2" href="form.php" role="button">Create Kartu</a>
            <table class="table text-center" width="100%" border="1" cellspacing="2" cellpadding="2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Diskon</th>
                        <th>Iuran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($cards as $card):
                        ?>
                    <tr>
                        <td>
                            <?= $nomor++; ?>
                        </td>
                        <td>
                            <?= $card['kode'] ?>
                        </td>
                        <td>
                            <?= $card['nama'] ?>
                        </td>
                        <td>
                            <?= $card['diskon'] ?>
                        </td>
                        <td>
                            <?= $card['iuran'] ?>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="view.php?id=<?= $card['id'] ?>">View</a>
                            <a class="btn btn-primary" href="edit.php?idedit=<?= $card['id'] ?>">Edit</a>
                            <a class="btn btn-primary" href="delete.php?iddel=<?= $card['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $row['nama'] ?>?')) {return
                                false}">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

</div>
</div>

<?php
include_once '../templates/footer.php'

    ?>