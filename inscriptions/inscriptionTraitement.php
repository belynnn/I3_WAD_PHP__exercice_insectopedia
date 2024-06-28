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
        <?php
        // 1️⃣. Récuperer les données du formulaire d'inscription
        $pseudo = $_POST['pseudo'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        // $image = $_FILES['image'];
    
    
        // 2️⃣. Se connecter à la base de données
        include '../database/config.php';
    
        try {
            // 2️⃣.1️⃣. Essayer de connecter
            $cnx = new PDO(DSN, USERNAME, PASSWORD);
        } catch (Exception $e) {
            // 2️⃣.2️⃣. Problème de connexion
            // Déclaration des instructions à suivre en cas de problème de connexion
            print("<h3>Un problème est survenu !</h3>");
            print("<img src='./image.jpg'>");
            print("<a href='../index.php'>Accueil</a>");

            die();
        }
    
        // 3️⃣. Créer la requête pour chercher un utilisateurice qui possède l'adresse mail qui a été inscrit dans le formulaire 
        // reçu du formulaire
        $sql = "SELECT * FROM utilisateurice WHERE mail=:mail";
    
        // 4️⃣. Préparer la requête 
        $stmt = $cnx->prepare($sql);

        // 5️⃣. Spécifier à quoi est rattaché la colonne mail (ici, les valeurs récupérées par le formulaire en requête POST ayant été encapsulée dans les variables $mail)
        $stmt->bindValue(":mail", $mail);
            
        // 6️⃣. Executer la requête
        $stmt->execute();
    
        // 7️⃣. Obtenir le résultat et le mettre dans un array
        $arrayUtilisateurices = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // 7️⃣.1️⃣. L'adresse mail est déjà prise
        if (!empty ($arrayUtilisateurices)){
            print ("Cette addresse mail est déjà utilisée.<br>");
            print ("<a href='../index.php'>Retourner à l'inscription</a>");

            die();
        }

        // 8️⃣. Créer la requête d'insertion (string)
        $sql = "INSERT INTO utilisateurice (id, pseudo, mail, password, image) VALUES (null, :pseudo, :mail, :password, :image)";

        // 8️⃣.1️⃣. Préparer la requête d'insertion
        $stmt = $cnx->prepare($sql);

        // 8️⃣.2️⃣. Spécifier à quoi sont rattaché les colonnes pseudo et mail (ici, les valeurs récupérées par le formulaire en requête POST ayant été encapsulée dans les variables $pseudo & $mail)
        $stmt->bindValue(":pseudo", $pseudo);
        $stmt->bindValue(":mail", $mail);

        // 9️⃣. Crypter le mot de passe de l'utilisateurice avant d'exécuter la requête
        $passwordHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
        // 9️⃣.1️⃣. Spécifier à quoi sont rattachés les colonnes password et image (ici, la valeur récupérée par le formulaire en requête POST ayant été encapsulée dans la variable $password, puis ayant été cryptée par la fonction password_hash() ayant été encapsulée dans la variable $passwordHash)
        $stmt->bindValue(":password", $passwordHash);

        //! TODO (gestion génération d'un nouveau nom d'image + chemin d'upload comme pour l'insertion d'insectes)
        // 9️⃣.2️⃣. Spécifier à quoi est rattaché la colonne image (ici, la valeur récupérée par le formulaire en requête POST ayant été encapsulée dans la variable $image)
        $stmt->bindValue(":image", $image);
    
        // 1️⃣0️⃣. Exécuter la requête
        $stmt->execute();

        // 1️⃣1️⃣. Envoyer l'utilisateurice à la page de connexion
        header ("location: ../sessions/login.php");
        ?>
    </main>
    
    <?php
        include '../includes/script.php';
    ?>
</body>
</html>