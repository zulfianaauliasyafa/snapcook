<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookSnap</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.css">
    <!-- css -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?= session_start(); ?>
  
    <div class="container-fluid">
        
        <div class="container containerform">

            <div class="form" id="inputForm">
                <h1>Log In to CookSnap<br></h1>
                <form action="backLogin.php" method="post">

               
                    <div class="flex-column">
                        <label for="">Username</label>
                        <input type="text" class="inputForm" name="username" id="username" placeholder="Enter Your username">
                    </div>

                    <div class="flex-column">
                        <label for="">Password</label>
                        <input type="password" class="inputForm" name="password" id="password" placeholder="Enter Your Password">
                        
                        <!-- coba show hide -->
                        <!-- <div class="input-group" id="show_hide_password">
                            <input class="form-control" type="password">
                            <div class="input-group-addon">
                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                        </div> -->

                    </div>
                    <div class="flex-row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <p> <input type="checkbox"> Remember me</p>
                                </div>
                                <div class="col">
                                    <p class=" forgot text-end">Forgot password?</p>
                                </div>
                            </div>
        
                            <div class="row">
                                <button type="submit" name="submit" class="button-submit" id="buttonSubmit">Log In</button>
                                <!-- <input type="submit" name="" id="" value="submit"> -->
                            </div>
                            
                            <div class="row">
                                <p class="text-center">Don't have an account? <a href="register.php"><span class="span">Register</span></a></p>
                                
                            </div>
                            
                            <div class="row">
                                <p class="text-center">or Log in with</p>
                            </div>
                        </div> 
                    </div>
                </form>

                <?php
                
                // session_start();
                // if(isset($_SESSION["login"])){
                //     header("Location: homepage.php");
                //     exit();
                // }
                // $usernameUser1 = "pakImut@gmail.com";
                // $passwordUser1 = "terang_bulan";

            //    if($_SERVER["REQUEST_METHOD"] == "POST"){
            //         $username = filter_input(INPUT_POST,'username');
            //         $password =filter_input(INPUT_POST,'password');


            //         if($username == $usernameUser1 && $password == $passwordUser1){
            //             $_SESSION["login"] = true;
            //             header("Location: homepage.php");
                        
            //             exit();
            //         }else{
            //             $message = "username atau password salah";
            //             echo "<script type='text/javascript'>alert('$message');</script>";
            //         }
                    
            //    }

            // function readAccounts() {
            //     $accounts = array();

            //     if (file_exists('akun.txt')) {
            //         $lines = file('akun.txt', FILE_IGNORE_NEW_LINES);
            //         foreach ($lines as $line) {
            //             $parts = explode(';', $line);
            //             $username = $parts[0];
            //             $password = $parts[1];
            //             $accounts[$username] = $password;
            //         }
            //     }
            
            //     return $accounts;
            // }

            // function addAccount($username, $password) {
            //     $file = fopen('akun.txt', 'a');
            //     fwrite($file, $username . ';' . $password . "\n");
            //     fclose($file);
            // }

            // if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            //     $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            //     $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            //     $accounts = readAccounts();
            
            //     // Cek apakah ada akun yang terdaftar
            //     if (!empty($accounts)) {
            //         if (isset($accounts[$username]) && $accounts[$username] === $password) {
            //             $_SESSION["login"] = true;
            //             header('Location: homepage.php');
            //             exit;
            //         } else {
            //             echo '<script>alert("Username atau password salah.");</script>';
            //         }
            //     } else {
            //         echo '<script> alert("Belum ada akun yang terdaftar. Silakan daftar terlebih dahulu.");</script>';
            //     }
            // }

            // $file = "akun.txt"; 
            //     $data = file_get_contents($file); 
            //     $users = explode("\n", $data); 

            //     foreach ($users as $user) {
                    // Memisahkan username dan password
                    // $userInfo = explode(";", $user); 
                    // if (count($userInfo) == 2) {
                    //   $usernameUser1 = $userInfo[0];
                    //   $passwordUser1 = $userInfo[1];
                  
                    //   if($_SERVER["REQUEST_METHOD"] == "POST"){
                    //     $username = filter_input(INPUT_POST,'username');
                    //     $password = filter_input(INPUT_POST,'password');
    
                    //     if($username == $usernameUser1 && $password == $passwordUser1){
                    //         $_SESSION["login"] = true;
                    //         header("Location: homepage.php");
                            
                    //         exit();
                    //     }else{
                    //         $message = "username atau password salah";
                    //         echo "<script type='text/javascript'>alert('$message');</script>";
                    //     }    
                    // }
                //   }
                // }
                ?>

                <div class="flex-row justify-content-center align-content-center">
                    <button style="border-color: black;" class="btn google">
                        <svg version="1.1" width="20" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
                    c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
                    C103.821,274.792,107.225,292.797,113.47,309.408z"></path>
                <path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
                    c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
                    c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"></path>
                <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
                    c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
                    c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"></path>
                <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
                    c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
                    C318.115,0,375.068,22.126,419.404,58.936z"></path>
                
                </svg>
                   
                        Google 

                      </button>
                </div>

            </div>
        </div>
    </div>
<!-- 
    <div id="liveToastPassword" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">alert</strong>
      <small>Now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Password tidak boleh kosong
    </div>
  </div>

  <div id="liveToastusername" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">alert</strong>
      <small>Now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      username tidak boleh kosong
    </div>
  </div> -->


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script type="module">
        import Swal from 'https://cdn.jsdelivr.net/npm/sweetalert2@8/src/sweetalert2.js'
        
      </script>
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
       <script type="module" src="index.js"></script>
    <!-- <script>
        // username
        function validateusername() {
        var username = document.getElementById('username').value;

        if (username === '') {
            alert('username tidak boleh kosong');
            return false;
        }
       

        return true;
        }

       

        // pass
        function validatePassword() {
        var password = document.getElementById('password').value;

        if (password === '') {
            alert('Password tidak boleh kosong');
            return false;
        }

        return true;
        }

        // submit
        document.getElementById('inputForm').onsubmit = function() {
            return validateusername() && validatePassword() ;
            }

    </script> -->
</body>
</html>