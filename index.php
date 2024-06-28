<?php
    include './includes/doctype.php';
?>

<head>
    <?php
        include './includes/head.php';
    ?>
</head>

<body>
    <header>
        <?php
            include "./sessions/checkSession.php";
        ?>

        <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Insectopedia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Accueil</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                À propos
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Projet</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">CKX</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Identifier
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Frelons Européen / Asiatique</a></li>
                                <li><a class="dropdown-item" href="#">Abeilles / Guêpes / Mouches</a></li>
                                <li><a class="dropdown-item" href="#">Hanetons / Cétoine</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Chenilles / Tenthrèdes</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./insertions/insecteInserer.php">Insérer insecte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./inscriptions/inscription.php">S'enregistrer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./sessions/login.php">Se connecter</a>
                        </li>
                    </ul>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1 class="m-5 p-5">Insectopedia</h1>
        <h2>Bienvenue
            <?php
                print ($_SESSION['nomUtilisateurice']);
            ?>
        </h2>
        <p>...</p>

        <?php
            // 1. Se connecter à la base de données
            include "./database/config.php";

            try {
                // Essayer de se connecter
                $cnx = new PDO(DSN, USERNAME, PASSWORD);
            } catch (Exception $e) {
                // Problème de connexion
                // Déclaration des instructions à suivre en cas de problème de connexion
                print("<h3>Un problème est survenu !</h3>");
                print("<img src='./image.jpg'>");
                print("<a href='./index.php'>Accueil</a>");

                // Arrêt du try catch
                die();
            }

            // 2. Créer la requête
            $sql = "SELECT * FROM insecte ORDER BY id DESC LIMIT 3";

            // 3. Préparer la requête
            $stmt = $cnx->prepare ($sql);

            // 4. Exécuter la requête
            $stmt->execute();

            // 5. Obtenir le résultat (les insectes dans ce cas) et les mettre dans un array
            $arrayInsectes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // 6. Afficher les données de la manière choisie
            var_dump ($arrayInsectes);
        ?>
    </main>

    <footer>

    </footer>

    <?php
        include './includes/script.php';
    ?>
</body>
</html>