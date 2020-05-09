<?php
class utilisateur{

    public int $id = 0;
    public string $pseudo = 'Sans intitulé';
    public string $password = 'Sans intitulé';
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
        return $this->password;
    }

    public function setPass($password): void {
        $this->password = $password;
    }
    public function getMail(): string {
        return $this->mail;
    }

    public function setMail($mail): void {
        $this->mail = $mail;
    }

    public function __construct(int $id, string $pseudo, string $password, string $mail) {
        $this->id = $id; 
        $this->setPseudo($pseudo);
        $this->setPass($password);
        $this->setMail($mail);
    }
}
?>
