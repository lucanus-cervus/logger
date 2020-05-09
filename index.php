<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Logger</title>
</head>
<body>
    <header>
        <h1>Logger</h1>
    </header>
    <section class="inscription">
        <form action="includes/inscription.php" method="POST">
            <fieldset>
            <legend>Formulaire d'inscription</legend>
                <label for="">Votre pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo..." required>
                <label for="">Votre mot de passe :</label>
                <input type="password" id="password" name="password" placeholder="Pass..." required>
                <label for="">Votre email :</label>
                <ul id="list-error">
                    <li id="list-item1">Vous devez mettre une minuscule.</li>
                    <li id="list-item2">Vous devez mettre une majuscule.</li>
                    <li id="list-item3">Vous devez mettre un chiffre.</li>
                    <li id="list-item4">Vous devez mettre un caractère spécial.</li>
                    <li id="list-item5">Votre mot de passe doit contenir 8 caractères minimum.</li>
                </ul>
                <input type="text" name="mail" placeholder="Mail..." required>
                <button type="submit" id="btn-inscription">Envoyez</button>
            </fieldset>
        </form>
    </section>
    <section class="connexion">
        <form action="includes/connexion.php" method="POST">
            <fieldset>
            <legend>Formulaire de connexion</legend>
                <label for="">Votre pseudo/mail :</label>
                <input type="text" name="pseudo" placeholder="Pseudo..." required>
                <label for="">Votre mot de passe :</label>
                <input type="text" name="password" placeholder="Pass..." required>
                <button type="submit">Envoyez</button>
            </fieldset>
        </form>
    </section>
    <footer>
        <h2>Copyright - Logger</h2>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>