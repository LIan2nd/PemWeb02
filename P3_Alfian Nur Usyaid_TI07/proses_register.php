<?php

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

    function skor_skill($skills)
    {
        $skill_lists = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 20,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50
        ];

        $result = 0;
        foreach ($skills as $skill) {
            $result = $result + $skill_lists[$skill];
        }

        return $result;
    }

    $skor = skor_skill($skills);
    function kategori_skill($skor)
    {
        if ($skor == 0) {
            return "Tidak Memadai";
        } else if ($skor <= 40) {
            return "Kurang";
        } else if ($skor <= 60) {
            return "Cukup";
        } else if ($skor <= 100) {
            return "Baik";
        } else if ($skor <= 170) {
            return "Sangat Baik";
        }

        return "Skill tidak valid";
    }

    echo "NIM : $nim";
    echo "<br> Nama Lengkap : $nama";
    echo "<br> Jenis Kelamin : $gender";
    echo "<br> Program Studi : $prodi ";
    echo "<br> Skill Web & Programming : ";
    foreach ($skills as $skill) {
        echo $skill . ", ";
    }
    echo "<br> Skor Skill : " . skor_skill($skills);
    echo "<br> Kategori Skill : " . kategori_skill($skor);
    echo "<br> Tempat Domisili : $domisili";
    echo "<br> Email : $email";
}

?>