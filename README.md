# ○ Interface3 - Formation Web Application Developer - PHP - Projet Insectopedia

## • Légende
* 🟥 À faire
* 🟧 Initialisé
* 🟨 En cours
* 🔜 À vérifier
* ✅ Terminé

## • TO DO
### - 🟨 Gérer les includes
* 🔜 Créer le fichier ./includes/doctype.php
* 🔜 Créer le fichier ./includes/head.php
* 🟨 Créer le fichier ./includes/nav.php
    * 🟥 Prévoir la différence ./index.php & ../index.php
* 🔜 Créer le fichier ./includes/script.php
* 🟧 Créer le fichier ./includes/footer.php

### - 🟨 Gérer la connexion à la base de données
🔜 Créer le fichier ./database/config.php

### - 🟨 Créer la fonctionnalité d'inscription
* 🔜 Créer le fichier ./inscriptions/inscription.php
    * Formulaire
        * Pseudo
        * Adresse mail
        * Mot de passe
        * Image de profil

* 🔜 Créer le fichier ./inscriptions/inscriptionTraitement.php
    * 1. Récuperer les données du formulaire d'inscription
    * 2. Se connecter à la base de données -> prévoir un include
        * 2.1. Essayer de connecter
        * 2️⃣.2️⃣. Problème de connexion
    * 3️⃣. Créer la requête pour chercher un utilisateurice qui possède l'adresse mail qui a été inscrit dans le formulaire
    * 4️⃣. Préparer la requête
    * 5️⃣. Spécifier à quoi est rattaché la colonne mail (ici, les valeurs récupérées par le formulaire en requête POST ayant été encapsulée dans les variables $mail)
    * 6️⃣. Executer la requête
    * 7️⃣. Obtenir le résultat et le mettre dans un array
        * 7️⃣.1️⃣. L'adresse mail est déjà prise
    * 8️⃣. Créer la requête d'insertion (string)
        * 8️⃣.1️⃣. Préparer la requête d'insertion
        * 8️⃣.2️⃣. Spécifier à quoi sont rattaché les colonnes pseudo et mail (ici, les valeurs récupérées par le formulaire en requête POST ayant été encapsulée dans les variables $pseudo & $mail)
    * 9️⃣. Crypter le mot de passe de l'utilisateurice avant d'exécuter la requête
        * 9️⃣.1️⃣. Spécifier à quoi est rattaché la colonne password (ici, la valeur récupérée par le formulaire en requête POST ayant été encapsulée dans la variable $password, puis ayant été cryptée par la fonction password_hash() qui a été encapsulée dans la variable $passwordHash)
        * 9️⃣.2️⃣. Spécifier à quoi est rattaché la colonne image (ici, la valeur récupérée par le formulaire en requête POST ayant été encapsulée dans la variable $image)
            * 🟥 Gérer le HASH des image de profil des utilisateurices lors de l'inscription
    * 1️⃣0️⃣. Exécuter la requête
    * 1️⃣1️⃣. Envoyer l'utilisateurice à la page de connexion

### - 🟨 Créer la fonctionnalité de session
🟨 Créer le fichier ./sessions/checkSession.php
🟨 Créer le fichier ./sessions/login.php
🟨 Créer le fichier ./sessions/loginTraitement.php
🟧 Créer le fichier ./sessions/logout.php

### - 🟥 Créer la page de détail des insectes
🟥 Créer le fichier .detailInsecte.php

### - 🟨 Créer la fonctionnalité de Recherche
🟧 Créer le fichier ./recherches/insecteRecherche.js
🟧 Créer le fichier ./recherches/insecteRechercheAjax.php
🟧 Créer le fichier ./recherches/insecteRechercheAjaxTraitement.php

### - 🟨 Créer la fonctionnalité d'insertion d'insectes
🟧 Créer le fichier ./insertions/insecteInserer.php
🟧 Créer le fichier ./insertions/insecteInsererTraitement.php

### - 🟥 Créer la fonctionnalité d'insertion de photo d'observations

### - 🟥 Créer la fonctionnalité de notation des observations des utilisateurices