<?php
    include("../includes/doctype.php");
?>

<head>
    <?php
        include("../includes/head.php");
    ?>
</head>>

<body>
    <main>
        <?php
            include("../sessions/checkSession.php");
            include("../includes/nav.php");
        ?>
        <h1>Page d'insertion</h1>
    
        <?php
            // 🔴 start upload fichier
            // 1️⃣. Créer un nom unique pour le fichier
            $dossier = "../uploads/img_insertions_insectes";
            $nomFichier = uniqid() . date("h-i-s") .
                $_FILES['image']['name'];
        
            // nom complet du fichier, précedé du nom du dossier
            $cheminComplet = $dossier."/".$nomFichier;
        
            // 2️⃣. Déplacer le fichier temporaire et lui donner le nom généré
            move_uploaded_file($_FILES['image']['tmp_name'], $cheminComplet);
            // 🟢 finish upload fichier
        
            // 3️⃣. Obtenir les données du formulaire 
            $nom_vernaculaire = $_POST['nom_vernaculaire'];
            $espece = $_POST['espece'];
            $description = $_POST['description'];
            $embranchement = $_POST['embranchement'];
            $sous_embranchement = $_POST['sous_embranchement'];
            $classe = $_POST['classe'];
            $ordre = $_POST['ordre'];
            $sous_ordre = $_POST['sous_ordre'];
            $famille = $_POST['famille'];
            $genre = $_POST['genre'];
        
            // 4️⃣. Connecter à la BD (PDO)
            include("../database/config.php");
        
            // 5️⃣. try catch
            try {
                // 5️⃣.1️⃣. Essayer de connecter
                $cnx = new PDO(DSN, USERNAME, PASSWORD);
            } catch (Exception $e) {
                // 5️⃣.2️⃣. Problème de connexion
                // Déclaration des instructions à suivre en cas de problème de connexion
                print("<h3>Un problème est survenu !</h3>");
                print("<img src='./image.jpg'>");
                print("<a href='../index.php'>Accueil</a>");

                // 5️⃣.3️⃣. Arrêt du try catch
                die();
            }
        
            // 6️⃣. Créer une requête du type INSERT
            $sql = "INSERT INTO insecte (id, nom_vernaculaire, espece, description, embranchement, sous_embranchement, classe, ordre, sous_ordre, famille, genre, image) VALUES (null, :nom_vernaculaire, :espece, :description, :embranchement, :sous_embranchement, :classe, :ordre, :sous_ordre, :famille, :genre, :image)";
        
            // 7️⃣. Préparer la requête
            $stmt = $cnx->prepare($sql);

            // 8️⃣. Spécifier à quoi correspond chaque valeur
            $stmt->bindValue(":nom_vernaculaire", $nom_vernaculaire);
            $stmt->bindValue(":espece", $espece);
            $stmt->bindValue(":description", $description);
            $stmt->bindValue(":embranchement", $embranchement);
            $stmt->bindValue(":sous_embranchement", $sous_embranchement);
            $stmt->bindValue(":classe", $classe);
            $stmt->bindValue(":ordre", $ordre);
            $stmt->bindValue(":sous_ordre", $sous_ordre);
            $stmt->bindValue(":famille", $famille);
            $stmt->bindValue(":genre", $genre);

            // 8️⃣.1️⃣. on stocke le nom de fichier qu'on vient de donner au fichier uploadé
            $stmt->bindValue(":image", $nomFichier); 
        
            // 9️⃣. Lancer la requête
            $stmt->execute();

            // 10. Insertion ok
            print ("<br><br><br><br>Votre formulaire a bien été reçu et les données ont bien été enregistrées.");
        ?>
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