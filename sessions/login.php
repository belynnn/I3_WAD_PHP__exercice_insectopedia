<?php
    include("../includes/doctype.php");
?>

<head>
    <?php
        include("../includes/head.php");
    ?>
</head>

<body>
    <header>
        <?php
            include("../includes/nav.php");
        ?>
    </header>

    <main>
        <p>Vous devez être connecté pour naviguer sur le site.</p>

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

        <p>Pas encore membre ? <a href="../inscriptions/inscription.php">Inscris-toi !</a></p>
    </main>

    <?php
        include("../includes/script.php");
    ?>
</body>
</html>