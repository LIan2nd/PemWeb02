<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700;800;900&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }
    </style>
</head>

<body>
    <div class="container-fluid mt-3">
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
    </div>
</body>

</html>