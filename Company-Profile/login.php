<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERTAMINA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center; 
        }
        label {
            color: black;
        }
    </style>
</head>
<body>
    <!--loader-->
    <div class="bg-loader">
        <div class="loader"></div>
    </div>

    <!--header-->
    <div Class="navbar">
        <ul>
            <div class="logo"> 
            <h1><img class="img__pertamina" src="img/pertamina2 - Copy.png"><a href="index_company_profile.html"></a></h1>
            </div>
            <li><a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="home.php">HOME</a></li>
            <li><a href="TentangKami.php">TENTANG KAMI</a></li>
            <li><a href="produkkami.php">PRODUK KAMI</a></li>
            <li><a href="sarankomentar.php">SARAN KOMENTAR</a></li>
            <li><a href="Location.php">LOCATION</a></li>
            <li><a href="login.php">LOGIN</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="card contact-form">
            <form action="login.php" method="post">
                <p>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </p>
                <p>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password">
                </p>
                <button type="submit" name="submit" style="width: 105px; margin-top: 10px;">Login</button>
            </form>
            <?php
                session_start();

                $username_admin = "admin";
                $password_admin = "admin123";

                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    if (($username == $username_admin) && ($password == $password_admin)) {
                        $_SESSION['admin'] = array("username" => $username, "password" => $password);
                        header("Location: admin.php");
                    } else {
                        echo "Username atau Password Salah!";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>