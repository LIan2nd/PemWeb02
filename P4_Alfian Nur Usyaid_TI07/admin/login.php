<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (empty($email) || empty($password)) {
        echo "<script>alert('Email dan Password belum dimasukkan');</script>";
    } else {
        $valid_email = "admin@gmail.com";
        $valid_password = "admin123";

        if ($email == $valid_email && $password == $valid_password) {
            header("Location: index2.php");
            exit();
        } else {
            echo "<script>alert('Email atau password salah');</script>";
        }
    }
}
?>