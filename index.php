<?php
    include("./includes/doctype.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insectopedia</title>

    <!-- CSS app -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="m-5 p-5">
        <?php
            include("./sessions/checkSession.php");
        ?>

        <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php"><img class="logo-insectopedia" src="./assets/img/logo/black/insectopedia-high-resolution-logo-black-transparent.png" alt=""></a>
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
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./sessions/logout.php">Se déconnecter</a>
                        </li>
                    </ul>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="logo">
            <img src="./assets/img/logo/color/insectopedia-high-resolution-logo-transparent.png" alt="Image not found">

            <h2 class="m-2">Bienvenue <?php print($_SESSION['nomUtilisateurice']);?></h2>
        </div>
    </header>

    <main class="m-5">
        <?php
            // 1. Se connecter à la base de données
            include("./database/config.php");

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
            $sql = "SELECT * FROM insecte";

            // 3. Préparer la requête
            $stmt = $cnx->prepare ($sql);

            // 4. Exécuter la requête
            $stmt->execute();

            // 5. Obtenir le résultat (les insectes dans ce cas) et les mettre dans un array
            $arrayInsectes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // 6. Afficher les données de la manière choisie
            print("<h2>Nos ajouts récents</h2>");
            
            print ("<ul>");
                foreach ($arrayInsectes as $insecte){
                    print("<hr>");
                    print("<h3 class='aa'>". $insecte['nom_vernaculaire'] ."</h3>");
                    print("<h4 class='bb'>". $insecte['espece'] ."</h4>");
                    print("<li>Description :<br>". $insecte['description']. "</li>");
                    print("<img src='./uploads/img_insertions_insectes/". $insecte['image'] ."' alt='Image not found'>");
                }
            print ("</ul>");
        ?>
    </main>

    <footer>
        <div>
            <div class="column">
                <div>
                    <img src="./assets/img/logo/white/insectopedia-high-resolution-logo-white-transparent.png" alt="">
                </div>

                <div>
                    <p>Insectopedia est un projet réalisé durant la formation <a href="https://interface3.be/fr/se-former-pour-l-emploi/it-training-formations-en-informatique/web-application-developer" target="_blank" rel="noopener noreferrer">Web Application Developer</a> d'<a href="https://interface3.be/fr" target="_blank" rel="noopener noreferrer">Interface3</a>.</p>

                    <p>Ce projet est entièrement réalisé en PHP vanilla, avec l'aide du formateur Francisco Leal Vazquez.</p>
                </div>

            </div>

            <div class="column">
                <h5>À propos</h5>

                <ul>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Insectopedia</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Outils</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">CKX</a></li>
                </ul>
            </div>
            
            <div class="column">
                <h5>Formation</h5>

                <ul>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Centre de formation</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">WAD</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Stage</a></li>
                </ul>
            </div>
            
            <div class="column">
                <h5>Contact</h5>

                <ul>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Envoyer un mail</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">GitHub</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                </ul>
            </div>
        </div>

        <div>
            <p>Insectopedia &copy; CKX<br>Créé avec ♥<br>par Deborah "Belynn" Clerckx</p>
        </div>
    </footer>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JS app -->
    <script src="./assets/js/app.js"></script>
</body>
</html>