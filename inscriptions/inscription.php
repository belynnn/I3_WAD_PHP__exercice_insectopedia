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
        <h1 class="m-5">Inscription</h1>

        <form action="./inscriptionTraitement.php" method="POST"  enctype="multipart/form-data">
            <div>
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo">
            </div>

            <div>
                <label for="mail">Adresse mail :</label>
                <input type="email" id="mail" name="mail">
            </div>

            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password">
            </div>

            <div>
                <label for="image">Image de profil :</label>
                <input type="file" id="image" name="image">
            </div>

            <input type="submit" value="Envoyer">
        </form>
    </main>

    <?php
        include("../includes/script.php");
    ?>
</body>
</html>