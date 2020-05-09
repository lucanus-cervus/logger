<?php
require_once("class.php");

class BDD
{
    private static PDO $connexion;

    public static function getConnexion(): PDO
    {
        if(!isset(static::$connexion)) {
            try{
                static::$connexion = new PDO(
                    'mysql:host=localhost;dbname=test;charset=utf8', 'root', '',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch(Exception $erreur){
                echo "Une erreur est survenue, merci de réessayer plus tard.";
                //envoyerParMailALAdministrateur($erreur->getMessage());
                exit;
            }
        }
        return static::$connexion;
    }


}

if(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))
{
    if(strlen(($_POST['pseudo'])) > 3 && strlen(($_POST['pseudo'])) < 12)
    {
        $requete = BDD::getConnexion()->prepare(<<<TAG
        INSERT INTO utilisateur (pseudo, password, mail) 
        VALUES (:pseudo, :password, :mail)
        TAG
        );
        $requete->execute([
            ':pseudo' => filter_var($_POST['pseudo'],FILTER_SANITIZE_STRING),
            ':password' => password_hash(filter_var($_POST['password'],FILTER_SANITIZE_STRING), PASSWORD_BCRYPT),
            ':mail' => filter_var($_POST['mail'],FILTER_SANITIZE_STRING)
        ]);
        echo $_POST['pseudo'] . ", votre inscription c'est bien déroulée.";
    }
    else
    {
        echo "Votre pseudo doit contenir plus de 3 caractères et moins de 12 caractères";
    }
}
else
{
    echo "Votre mail n'est pas valide";
}
?>