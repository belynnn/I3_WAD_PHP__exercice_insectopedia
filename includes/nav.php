<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php"><img class="logo-insectopedia" src="../assets/img/logo-text/insectopedia/insectopedia-highres-logo-color.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        À propos
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/projet.php">Projet</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Formation</a></li>
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
                    <a class="nav-link" aria-current="page" href="../insertions/insecteInserer.php">Insérer insecte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../inscriptions/inscription.php">S'enregistrer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../sessions/login.php">Se connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../sessions/logout.php">Se déconnecter</a>
                </li>
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
        </div>
    </div>
</nav>