
<?php
    include "config.php";

    if (isset($_POST['submit'])) { // saat button submit di pencet
        $name = $_POST['name']; // ambil value dari input dengan name="name"
        $email = $_POST['email']; // ambil value dari input dengan name="email"
        $message = $_POST['message']; // ambil value dari input dengan name="message"

        $sql = "INSERT INTO feedback VALUES (NULL, '$name', '$email', '$message', CURRENT_TIME())"; // code sql untuk masukkin ke database
        $result = $conn->query($sql); // code untuk melihat result

        if ($result) { // ketika result ada
            header("Refresh: 0"); // maka refresh page
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SARAN KOMENTAR</title>
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
    <body>
    </div>
    <!--SARAN KOMENTAR-->
    <!--header-->
    <!-- <div class="medsos">
    <div class="container">
        <ul>
            <li><a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="home.php">HOME</a></li>
    <li ><a href="TentangKami.php">TENTANG KAMI</a></li>
    <li><a href="produkkami.php">PRODUK KAMI</a></li>
    <li><a href="sarankomentar.php">SARAN KOMENTAR</a></li>
     <li><a href="Location.php">LOCATION/a></li>
      <li><a href="login.php">LOGIN</a></li>
        </ul>
    </div>
</div> -->
    <div class="navbar">
        <ul>
            <h1><img class="img__pertamina" src="img/pertamina2 - Copy.png"><a href="index_company_profile.html"></a></h1>
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
    
    <section class="SARAN KOMENTAR " style="margin-left:200px; transform:translate(-50%:-50%);" >
        </h3><br>
        <div class="container"  >
            <h3>FEEDBACK</h3><br>
            <div class="contact-form">
                    <form method="post" action="sarankomentar.php" class="feedback-page">
                        <input name="name" type="text" placeholder="Your name">
                        <input name="email" type="text" placeholder="Your Email">
                        <textarea name="message" placeholder="Your Message"></textarea><br>
                        <button name="submit" type="submit"style="width: 105px; margin-top: 10px;">SEND</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
        </section>
    
    </body>
</html>