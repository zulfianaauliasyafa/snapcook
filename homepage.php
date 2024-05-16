<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookSnap - Resep Masakan Terbaik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.css">
    <link rel="stylesheet" href="styles.css">
   
</head>
<body>

    <?php
        session_start();
        if(!isset($_SESSION["login"])){
            header("Location: login.php");
            exit;
        }
    ?>
    
    <header>
        <h1>Welcome to CookSnap</h1>
        <p>Temukan dan bagikan resep masakan terbaikmu di sini!</p>
    </header>
    <div class="container-fluid">
    <form action="" method="post">
        <nav>
            <a href="#">Beranda</a>
            <a href="#">Resep</a>
            <a href="#">Kategori</a>
            <a href="#">Tentang</a>
            <a href="#">Kontak</a>
            <button type="submit" name="submit">Log Out</button>
            
        </nav>
    </form>
    </div>
   

    <?php
        if(isset($_POST['submit']))
        {
           
            func();
        }
        function func()
        {
            // do stuff 
            $_SESSION= [];
            session_unset();
            session_destroy();
            header("Location: login.php");
            exit();  
        }

        if(array_key_exists('submit', $_POST)) { 
            insert(); 
        } 
    ?>

    <div class="container-fluid">
    <div>
        <div class="headerContent">

            <div class="titleMobile">
                <h1>BRAZILIAN</h1>
                <h1>RECIPES</h1>
            </div>


            <div class="headerDetail">

                <div class="foodSlider">


                </div>

            </div>

            <div class="texts">

                <div class="title">
                    <div class="titleDetail"> </div>

                    <h1 class="titleName">BRAZILIAN RECIPES:</h1>

                    <span data-js="typing" class="recipeName"> </span>

                </div>

            </div>


        </div>
    </div>

    <div class="choose">
        <span>Choose a recipe to view</span>
    </div>


    <div class="carousel">


        <a href="./view/feijoada.html">
            <div class="foodCard">
                <span>Feijoada</span>

                <img src="./public/fooodImages/cards/feijoada.png" alt="">
            </div>
        </a>


        <a href="./view/brigadeiro.html">
            <div class="foodCard active">
                <span>Brigadeiro</span>

                <img src="./public/fooodImages/cards/brigadeiro.png" alt="">
            </div>
        </a>


        <a href="./view/pao-de-queijo.html">
            <div class="foodCard">
                <span>Pão de queijo</span>

                <img src="./public/fooodImages/cards/pao_de_queijo.png" alt="">
            </div>
        </a>


        <a href="./view/bolinho-caipira.html">
            <div class="foodCard">
                <span>Bolinho caipira</span>

                <img src="./public/fooodImages/cards/bolinho_caipira.png" alt="">
            </div>
        </a>

    </div>
    </div>
    

    <footer>
        <p>&copy; 2024 CookSnap - All rights reserved.</p>
    </footer>
</body>
</html>
