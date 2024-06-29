<?php
    include("../includes/doctype.php");
?>

<head>
    <?php
        include("./includes/head.php");
    ?>
</head>

<body>
    <header>
        <?php
            include("./includes/nav.php");
        ?>
    </header>

    <main>
        <?php
        // 1️⃣. Démarrer la session
        session_start();

        // 2️⃣. Récuperer les données du formulaire de connexion (adresse mail et mot de passe)
        $mail = $_POST['mail'];
        $password = $_POST['password'];

        // 3️⃣. Se connecter à la base de données
        include("../database/config.php");

        try {
            // 3️⃣.1️⃣. Essayer de se connecter
            $cnx = new PDO(DSN, USERNAME, PASSWORD);
        } catch (Exception $e) {
            // 3️⃣.2️⃣. Problème de connexion
            // Déclaration des instructions à suivre en cas de problème de connexion
            print("<h3>Un problème est survenu !</h3>");
            print("<img src='./image.jpg'>");
            print("<a href='../index.php'>Accueil</a>");

            // 3️⃣.3️⃣. Arrêt du try catch
            die();
        }

        // 4️⃣. Créer la requête pour chercher un utilisateurice qui possède l'adresse mail qui a été inscrit dans le formulaire
        $sql = "SELECT * FROM utilisateurice WHERE mail=:mail";
        // 5️⃣. Préparer la requête
        $stmt = $cnx->prepare($sql);

        // 6️⃣.
        $stmt->bindValue(":mail", $mail);

        // 7️⃣. Exécuter la requête
        $stmt->execute();

        // 8️⃣. Obtenir le résultat et le mettre dans un array
        $arrayUtilisateurices = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // 9️⃣. Si l'utilisateurice n'existe pas on arrete le script et on lui propose de s'inscrire
        if (empty($arrayUtilisateurices)){
            print("Le compte auquel vous souhaitez accéder n'existe pas.<br>");
            print("<a href='../inscriptions/inscription.php'>S'enregistrer</a>");

            die ();
        }

        // 1️⃣0️⃣. Afficher les données de la manière choisie
        var_dump($arrayUtilisateurices);

        // 1️⃣1️⃣. Obtenir le mot de passe de l'utilisateuriceice
        $passwordHashBD = $arrayUtilisateurices[0]['password'];

        // 1️⃣2️⃣. obtenir le nom de l'utilisateuriceice
        $nomUtilisateurice = $arrayUtilisateurices[0]['pseudo'];

        // 1️⃣3️⃣. Vérifier si le mot de passe entré est bon
        if (password_verify($password, $passwordHashBD) == false){
            // 1️⃣3️⃣.1️⃣. Le password n'est pas bon!
            print("Compte et/ou mot de passe incorrectes.");

            die();
        }
        else {
            // 1️⃣3️⃣.2️⃣. Le password est ok!
            $_SESSION['nomUtilisateurice'] = $nomUtilisateurice;
    
            header("location: ../index.php");
        }
        ?>
    </main>

    <?php
        include("../includes/script.php");
    ?>
</body>
</html>