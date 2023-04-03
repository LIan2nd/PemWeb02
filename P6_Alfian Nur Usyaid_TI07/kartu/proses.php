<?php
require_once '../dbkoneksi.php';
?>
<?php
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_diskon = $_POST['diskon'];
$_iuran = $_POST['iuran'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_kode;
$ar_data[] = $_nama;
$ar_data[] = $_diskon;
$ar_data[] = $_iuran;

if ($_proses == "Simpan") {
    // data baru
    $sql = "INSERT INTO kartu (kode,nama,diskon,iuran) VALUES (?,?,?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit']; // ? 8
    $sql = "UPDATE kartu SET kode=?,nama=?,diskon=?,iuran=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:index.php');
?>