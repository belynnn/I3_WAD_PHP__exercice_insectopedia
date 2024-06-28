<?php
    include '../includes/doctype.php';
?>

<head>
    <?php
        include '../includes/head.php';
    ?>
</head>

<body>
    <main>
        <form action="./loginTraitement.php" method="POST">
            <div>
                <label for="mail">Adresse mail :</label>
                <input type="email" id="mail" name="mail">
            </div>

            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="Se connecter">
        </form>
    </main>

    <?php
        include '../includes/script.php';
    ?>
</body>
</html>