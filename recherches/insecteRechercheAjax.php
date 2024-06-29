<?php
    include("./includes/doctype.php");
?>

<head>
    <?php
        include("./includes/head.php");
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
        <form id="formHTML">
            <label for="termeRecherche">Rechercher :</label>
            <input type="text" id="termeRecherche" name="termeRecherche">

            <button id="btnRecherche">Rechercher</button>

            <div id="divResultat"></div>
        </form>

        <div id="divInsectes"></div>
    </main>

    <footer>
        <?php
            include("./includes/footer.php");
        ?>
    </footer>

    <?php
        include("./includes/script.php");
    ?>
</body>
</html>