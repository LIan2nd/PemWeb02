<?php
if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktikum = $_GET['praktikum'];
    $average = ($uts + $uas + $praktikum) / 3;

    echo "Nama              : $nama <br>";
    echo "Mata Kuliah       : $matkul <br>";
    echo "Nilai UTS         : $uts <br>";
    echo "Nilai UAS         : $uas <br>";
    echo "Nilai Praktikum   : $praktikum <br>";

    echo "<br> <br>";

    echo "Nilai Rata-rata : " . round($average, 2) . "<br>";
    echo "Grade Nilai : ";
    if ($average < 35) {
        echo "E";
    } elseif ($average < 55) {
        echo "D";
    } elseif ($average < 69) {
        echo "C";
    } elseif ($average < 84) {
        echo "B";
    } elseif ($average < 100) {
        echo "A";
    } else {
        echo "I";
    }
} else {
    echo "Data Kosong";
}
?>