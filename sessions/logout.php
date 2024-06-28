<?php
    session_start();
    session_destroy();
?>

<?php
    include './includes/doctype.php';
?>

<head>
    <?php
        include './includes/head.php';
    ?>
</head>

<body>
    <main>
        <h2>Vous allez nous manquer!😢</h2>
        <a href="./login.php">Se connecter</a>
    </main>

    <?php
        include './includes/script.php';
    ?>
</body>
</html>