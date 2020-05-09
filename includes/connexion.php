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

$requete = BDD::getConnexion()->prepare('SELECT * FROM utilisateur WHERE pseudo = :pseudo');
$requete->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
$requete->execute();
while($donnees = $requete->fetch()){
    $utilisateur = new utilisateur(
        $donnees['id'],
        $donnees['pseudo'],
        $donnees['password'],
        $donnees['mail']
    );
    $utilisateurs = $utilisateur->password;
}


var_dump($utilisateurs);
if(isset($utilisateurs))
{
    if(password_verify($_POST['password'], $utilisateurs))
    {
        echo "connexion établie.";
    }
    else
    {
        echo "mot de passe incorrect";
    }
}
else
{
    echo "Ce compte n'existe pas.";
}


?>