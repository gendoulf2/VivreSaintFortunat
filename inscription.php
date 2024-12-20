<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrivez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <?php include('include/menu.php'); ?>
    <main class="main-form">
        <div class="form-container">
            <h2>Inscription</h2>
    
          

            <form action="POO/traitement_inscription.php" method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" required placeholder="Votre nom">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required placeholder="Votre prénom">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required placeholder="Votre email">
                </div>
                <div class="form-group">
                    <label for="type_adhesion">Type d'adhésion</label>
                    <select name="type_adhesion" id="type_adhesion" class="form-control" required>
                    <option value="">Type d'adhésion</option>
                    <option value="individuel">Individuel</option>
                        <option value="famille">Famille</option>
                        <option value="mineur">Mineur</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="mot_de_passe" id="password" class="form-control" required placeholder="Votre mot de passe">
                </div>
                <div class="form-group">

                    <label for="confirm-password">Confirmer mot de passe</label>
                    <input type="password" name="mot_de_passe_confirmation" id="confirm-password" class="form-control" required placeholder="Confirmer votre mot de passe">

                  
                </div>
               
               <button type="submit" class="CTA">Envoyer</button>
                <p class="mt-3">Vous avez déjà un compte ? <a href="connexions.php">Se connecter</a></p>
            </form>
        </div>
    </main>

    <?php include('include/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>