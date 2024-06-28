<?php
    session_start();
    if (empty($_SESSION['nomUtilisateurice'])) {
        header("location: ./sessions/login.php");
    }
?>