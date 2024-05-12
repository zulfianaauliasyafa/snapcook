<?php

session_start();

                $host = 'localhost';
                $dbname = 'snapcook';
                $dbconn = mysqli_connect($host, 'root', 'rahasia', $dbname);
                
                $username = $_POST["username"];
                $password = $_POST["password"];

                
                    $sql = "SELECT * FROM akun WHERE user = '$username' AND password = '$password'";
                    $result = $dbconn->query($sql);

                    if ($result->num_rows > 0) {
                        $_SESSION["login"]=true;
                        header("Location: homepage.php");
                        exit();
                    } else {
                            echo '<script> alert("Belum ada akun yang terdaftar. Silakan daftar terlebih dahulu.");</script>';
                        }
                
                // Menutup koneksi database
                $dbconn->close();