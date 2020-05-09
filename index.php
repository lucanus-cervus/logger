<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Logger</title>
</head>
<body>
    <form action="includes/inscription.php" method="POST">
        <fieldset>
        <legend>Formulaire d'inscription</legend>
            <label for="">Votre pseudo :</label>
            <input type="text" name="pseudo">
            <label for="">Votre mot de passe :</label>
            <input type="text" name="pass">
            <label for="">Votre email :</label>
            <input type="text" name="mail">
            <button type="submit">Envoyez</button>
        </fieldset>
    </form>
    <form action="includes/connexion.php" method="POST">
        <fieldset>
        <legend>Formulaire de connexion</legend>
            <label for="">Votre pseudo :</label>
            <input type="text" name="pseudo">
            <label for="">Votre mot de passe :</label>
            <input type="text" name="pass">
            <label for="">Votre mail :</label>
            <input type="text" name="mail">
            <button type="submit">Envoyez</button>
        </fieldset>
    </form>
</body>
</html>