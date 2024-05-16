<?php

session_start();
                $host = 'localhost';
                $dbname = 'snapcook';
                $dbconn = mysqli_connect($host, 'root', 'rahasia', $dbname);
                
                $username = $_POST["username"];
                $password = $_POST["password"];

                
                    $sql = "SELECT * FROM akun WHERE user = '$username' AND password = '$password'";
                    $sqlcheck = "SELECT * FROM akun";
                    $result = $dbconn->query($sql);
                    $resultcheck = $dbconn->query($sqlcheck);

                    if ($result->num_rows > 0) {
                        $_SESSION["login"]=true;
                        header("Location: homepage.php");
                        exit();
                    }
                    else if($resultcheck->num_rows > 0){
                            echo '<script> alert("Username atau password salah.");</script>';
                    } else {
                            echo '<script> alert("Belum ada akun yang terdaftar. Silakan daftar terlebih dahulu.");</script>';
                        }
                
                // Menutup koneksi database
                $dbconn->close();