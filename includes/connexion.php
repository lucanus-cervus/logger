<?php
class BDD
{
    private static PDO $connexion;

    public static function getConnexion(): PDO
    {
        if(!isset(static::$connexion)) {
            try{
                static::$connexion = new PDO(
                    'mysql:host=;dbname=;charset=utf8', '', '',
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

class utilisateur{

    public int $id = 0;
    public string $pseudo = 'Sans intitulé';
    public string $pass = 'Sans intitulé';
    public string $mail = 'Sans intitulé';


    public function getId(): int {
        return $this->id;
    }

    public function getPseudo(): string {
        return $this->pseudo;
    }

    public function setPseudo($pseudo): void {
        $this->pseudo = $pseudo;
    }

    public function getPass(): string {
        return $this->pass;
    }

    public function setPass($pass): void {
        $this->pass = $pass;
    }
    public function getMail(): string {
        return $this->mail;
    }

    public function setMail($mail): void {
        $this->mail = $mail;
    }

    public function __construct(int $id, string $pseudo, string $pass, string $mail) {
        $this->id = $id; 
        $this->setPseudo($pseudo);
        $this->setPass($pass);
        $this->setMail($mail);
    }
}


$requete = BDD::getConnexion()->prepare('SELECT * FROM utilisateur WHERE pseudo = :pseudo');
$requete->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
$requete->execute();
while($donnees = $requete->fetch()){
    $utilisateur = new utilisateur(
        $donnees['id'],
        $donnees['pseudo'],
        $donnees['pass'],
        $donnees['mail']
    );
    $utilisateurs = $utilisateur->pass;
}


var_dump($utilisateurs);
if(isset($utilisateurs))
{
    if(password_verify($_POST['pass'], $utilisateurs))
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