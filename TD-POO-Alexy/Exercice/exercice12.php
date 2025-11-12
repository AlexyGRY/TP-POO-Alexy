<?php 

/* EXERCICE 12
Creez une classe "Employe" avec les proprietes protected suivantes:
- nom (string)
- prenom (string)
- salaire (float)

Implementez les methodes suivantes:
- Un constructeur qui initialise toutes les proprietes
- Getters pour toutes les proprietes
- calculerPrime(): retourne 10% du salaire
- afficherInfos(): retourne une chaine avec le nom complet et le salaire

Creez une classe "Manager" qui herite d'Employe avec une propriete privee supplementaire:
- nombreSubordonnes (int)

Implementez les methodes suivantes:
- Un constructeur qui appelle le constructeur parent et initialise nombreSubordonnes
- Getter pour nombreSubordonnes
- Redefinition de calculerPrime(): retourne 10% du salaire plus 5% du salaire par subordonne
- Redefinition de afficherInfos(): affiche les informations de base plus le nombre de subordonnes
- ajouterSubordonne(): incremente le nombre de subordonnes

Testez les deux classes en creant un employe et un manager, puis calculez leurs primes respectives. */

class Employe
{
    protected string $nom;
    protected string $prenom;
    protected float $salaire;

    public function __construct(string $nom, string $prenom, float $salaire)
        {
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->salaire=$salaire;
        }

    public function calculerPrime(){
        return "voici la prime:" .$this->salaire*0.10 . "<br>";
    }

    public function afficherInfos(){
        return"le nom de l'employe est:" . $this->nom . " son prenom est:"  . $this->prenom . " et son salaire est:" . $this->salaire . "<br>";
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }


}

class Manager extends Employe{
    private int $nombreSubordonnes;

    public function __construct(string $nom, string $prenom, float $salaire,int $nombreSubordonnes)
        {
            $this->nombreSubordonnes=$nombreSubordonnes;
            return parent::__construct($nom, $prenom, $salaire);
            
        }

    public function calculerPrime(){
        return "voici la prime:" .$this->salaire*(0.10+(0.5*$this->nombreSubordonnes)) . "<br>";
    }

    public function afficherInfos(){
        return"le nom du manager est:" . $this->nom . " son prenom est:"  . $this->prenom . " son salaire est:" . $this->salaire ."et il a" . $this->nombreSubordonnes . "subordonnes<br>";
    }

    public function ajouterSubordonnes(){
        $this->nombreSubordonnes++;
    }

    /**
     * Get the value of nombreSubordonnes
     */ 
    public function getNombreSubordonnes()
    {
        return $this->nombreSubordonnes;
    }

    /**
     * Set the value of nombreSubordonnes
     *
     * @return  self
     */ 
    public function setNombreSubordonnes($nombreSubordonnes)
    {
        $this->nombreSubordonnes = $nombreSubordonnes;

        return $this;
    }
}


$employe1 = new Employe("evans" , "mark" , 45623);
echo $employe1->afficherInfos();
echo $employe1->calculerPrime();

$manager1= new Manager("mcfly" , "kevin" , 45545,5);

echo $manager1->afficherInfos();
echo $manager1->calculerPrime();
$manager1->ajouterSubordonnes();

echo $manager1->afficherInfos();
echo $manager1->calculerPrime();





