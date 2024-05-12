<?php 
session_start();
$host = 'localhost';
$dbname = 'snapcook';
$dbconn = mysqli_connect($host, 'root', 'rahasia', $dbname);
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo $password;

    $sql = "INSERT INTO akun (user, password) VALUES ('$username', '$password')";
    if ($dbconn->execute_query($sql)) {
        header("Location: homepage.php");
    } else {
                echo '<script>alert("Username atau password salah.");</script>';
        }
// Menutup koneksi database
$dbconn = null;;