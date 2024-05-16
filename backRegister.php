<?php 
session_start();
$host = 'localhost';
$dbname = 'snapcook';
$dbconn = mysqli_connect($host, 'root', 'rahasia', $dbname);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO akun (user, password) VALUES ('$username', '$password')";
    if ($dbconn->query($sql)) {
        header("Location: login.php");
    } else {
                echo '<script>alert("Masukkan password dan username dengan lengkap");</script>';
        }
        
// Menutup koneksi database
$dbconn = null;;