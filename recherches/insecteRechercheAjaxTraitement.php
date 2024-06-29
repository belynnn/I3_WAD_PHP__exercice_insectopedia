<?php
    // 1️⃣. Récupérer la chaîne de caractères recherchée
    $termeRecherche = $_POST['termeRecherche'];

    // 2️⃣. Se connecter à la base de données
    include("./database/config.php");

    // 3️⃣. try catch
    try {
        // 3️⃣.1️⃣. Essayer de se connecter
        $cnx = new PDO(DSN, USERNAME, PASSWORD);
    } catch (Exception $e) {
        // 3️⃣.2️⃣. Problème de connexion
        // Déclaration des instructions à suivre en cas de problème de connexion
        print("<h3>Un problème est survenu !</h3>");
        print("<img src='./image.jpg'>");
        print("<a href='./index.php'>Accueil</a>");

        // 3️⃣.3️⃣. Arrêt du try catch
        die();
    }

    // 4️⃣. Créer la requête pour chercher chaque insecte possèdant la chaîne de caractères inscrite par l'utilisateurice
    $sql = "SELECT * FROM insecte WHERE nom_vernaculaire LIKE :termeRecherche";

    // 5️⃣. Préparer la requête
    $stmt = $cnx->prepare($sql);

    // 6️⃣. Spécifier à quoi correspond :termeRecherche
    $stmt->bindValue(":termeRecherche", "%" . $termeRecherche . "%", PDO::PARAM_STR);

    // 7️⃣. Exécuter la requête
    $stmt->execute();

    // 8️⃣. Obtenir le résultat et le mettre dans un array
    $arrayInsectes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 9️⃣. Encoder le tableau contenant les insectes en JSON
    $tableauJSON = json_encode($arrayInsectes);

    // 1️⃣0️⃣.Afficher le tableau contenant les insectes ayant été encodé en JSON
    print($tableauJSON);
?>