<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookSnap - Resep Masakan Terbaik</title>
    <style>
        body {
            font-family: Candara, Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #FD8F13;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            font-family: Candara, Arial, sans-serif; 
            margin: 0;
        }
        nav {
            background-color: #672525;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        button {
            margin-left: 60%;
        }
        section {
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        .recipe-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .recipe-card h3 {
            color: #555;
        }
        .recipe-card p {
            color: #777;
        }
        footer {
            background-color: #FD8F13;
            color: #fff;
            text-align: center;
            padding: 1px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
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
        function insert(){
            // $_SESSION= [];
            // session_unset();
            // session_destroy();
            // header("Location: login.php");
            // exit();

            echo "ke kclisd";
        };
    ?>
    <section>
        <h2>Resep Populer</h2>
        <div class="recipe-card">
            <h3>Ayam Goreng Krispi</h3>
            <p>Resep ayam goreng yang renyah dan lezat.</p>
        </div>
        <div class="recipe-card">
            <h3>Nasi Goreng Spesial</h3>
            <p>Nasi goreng dengan campuran bumbu spesial.</p>
        </div>
        <div class="recipe-card">
            <h3>Pasta Carbonara</h3>
            <p>Pasta dengan saus krim dan daging bacon.</p>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 CookSnap - All rights reserved.</p>
    </footer>
</body>
</html>
