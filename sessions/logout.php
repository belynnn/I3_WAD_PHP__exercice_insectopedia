<?php
    session_start();
    session_destroy();
?>

<?php
    include("../includes/doctype.php");
?>

<head>
    <?php
        include("../includes/head.php");
    ?>
</head>

<body class="body-logout">
    <header class="header-logout">
        <?php
            include("../includes/nav.php");
        ?>
    </header>

    <main>
        <h2>Vous allez nous manquer ! 😢</h2>
        <a href="../sessions/login.php">Se connecter</a>
    </main>

    <footer>
        <?php
            include("../includes/footer.php");
        ?>
    </footer>

    <?php
        include("../includes/script.php");
    ?>
</body>
</html>