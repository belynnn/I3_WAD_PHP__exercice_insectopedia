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
            include("../sessions/checkSession.php");
            include("../includes/nav.php");
        ?>
    </header>

    <main>
        <h1 class="m-5">Insérer un nouvel insecte</h1>

        <form action="./insecteInsererTraitement.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="nom_vernaculaire">Nom commun :</label>
                <input type="text" id="nom_vernaculaire" name="nom_vernaculaire">
            </div>

            <div>
                <label for="espece">Nom latin :</label>
                <input type="text" id="espece" name="espece">
            </div>

            <div>
                <label for="description">Description :</label>
                <input type="text" id="description" name="description">
            </div>

            <div>
                <label for="regne">Règne :</label>
                <input type="text" id="regne" name="regne">
            </div>

            <div>
                <label for="embranchement">Embranchement :</label>
                <input type="text" id="embranchement" name="embranchement">
            </div>

            <div>
                <label for="sous_embranchement">Sous-embranchement :</label>
                <input type="text" id="sous_embranchement" name="sous_embranchement">
            </div>

            <div>
                <label for="classe">Classe :</label>
                <input type="text" id="classe" name="classe">
            </div>

            <div>
                <label for="ordre">Ordre :</label>
                <input type="text" id="ordre" name="ordre">
            </div>

            <div>
                <label for="sous_ordre">Sous-ordre :</label>
                <input type="text" id="sous_ordre" name="sous_ordre">
            </div>

            <div>
                <label for="famille">Famille :</label>
                <input type="text" id="famille" name="famille">
            </div>

            <div>
                <label for="genre">Genre :</label>
                <input type="text" id="genre" name="genre">
            </div>

            <div>
                <label for="image">Photo :</label>
                <input type="file" id="image" name="image">
            </div>

            <input type="submit" value="Envoyer" id="envoyer">
        </form>
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