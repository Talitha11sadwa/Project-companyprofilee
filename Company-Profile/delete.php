<?php
    session_start();
    include "config.php";

    if (!isset($_SESSION['admin'])) {
        header("Location: login.php");
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM feedback WHERE id='$id'";
        $result = $conn->query($sql);

        if ($result) {
            header("Location: admin.php");
        }
    }
?>