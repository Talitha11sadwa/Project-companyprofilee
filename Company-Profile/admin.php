<?php
    session_start();
    include "config.php";

    if (!isset($_SESSION['admin'])) {
        header("Location: login.php");
    }

    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERTAMINA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .table {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center; 
            flex-direction: column;
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
        </ul>
    </div>

    <div class="table">
        <table class="table1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Timestamp</th>
                <th>Action</th>
            </tr>
            
            <?php
                $sql = "SELECT * FROM feedback";
                $result = $conn->query($sql);

                if ($result) {
                    while($row = $result->fetch_array()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['message']."</td>";
                        echo "<td>".$row['timestamp']."</td>";
                        echo "<td><a href='delete.php?id=".$row['id']."'>DELETE</a></td>";
                        echo "<tr>";
                    }
                }
            ?>
            
        </table>
        <form action="admin.php" method="post">
            <button type="submit" name="logout"style="width: 105px;">Logout</button>
        </form>
    </div>
</body>
</html>