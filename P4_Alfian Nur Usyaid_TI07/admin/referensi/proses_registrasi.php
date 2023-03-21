<?php
    $domisili = ['Jakarta', 'Bogor', 'Depok', 'Tanggerang'];

    $program_studi = [
        "SI" => "Sistem Informasi",
        "TI" => "Teknik Informatika",
        "BD" => "Bisnis Digital"
    ];

    $skills = [
        "HTML" => 10,
        "CSS" => 10,
        "Javascript" => 20,
        "RWD Bootstrap" => 20,
        "PHP" => 30,
        "Python" => 30,
        "Java" => 50
    ];

    function skor_skill($skill_user)
    {
        $skills = [
            "HTML" => 10,
            "CSS" => 10,
            "Javascript" => 20,
            "RWD Bootstrap" => 20,
            "PHP" => 30,
            "Python" => 30,
            "Java" => 50
        ];

        $hasil = 0;
        foreach ($skill_user as $skill) {
            $hasil += $skills[$skill];
        }

        return $hasil;
    }

    $skill_user = $_POST['skill'];
    $skor = skor_skill($skill_user);
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


?>