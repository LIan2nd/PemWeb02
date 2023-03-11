<!-- ===PHP=== -->
<?php
// Array Majors
$majors = [
    'SI' => 'Sistem Informasi',
    'TI' => 'Teknik Informatika',
    'BD' => 'Bisnis Digital'
];

// Array Skills
$skills = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaScript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50
];

// Array Domisili
$domisiles = ['Jakarta', 'Bogor', 'Depok', 'Tenggerang', 'Bekasi', 'Lainnya'];
?>
<!-- ===PHP END=== -->

<!-- ===HTML=== -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-4">
        <form method="POST" action="proses_register.php" style="background-color: #f5f5dc;"
            class="border border-dark p-3">
            <legend class="display-4 text-center mb-4">Form-Registrasi IT Club Data Science</legend>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adn"></i>
                            </div>
                        </div>
                        <input id="nim" name="nim" placeholder="Masukkan Nim" type="text" required="required"
                            class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" required="required"
                            class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki">
                        <label for="gender_0" class="custom-control-label">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan">
                        <label for="gender_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select">
                        <?php foreach ($majors as $k => $major): ?>
                        <option value="<?= $major ?>"><?= $major ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web &amp; Programming</label>
                <div class="col-8">
                    <?php foreach ($skills as $skill => $v): ?>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="<?= $skill ?>" type="checkbox" class="custom-control-input"
                            value="<?= $skill ?>">
                        <label for="<?= $skill ?>" class="custom-control-label">
                            <?= $skill ?>
                        </label>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class=" form-group row">
                <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select">
                        <?php foreach ($domisiles as $domicile): ?>
                        <option value="<?= $domicile ?>"><?= $domicile ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class=" form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control"
                            required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>