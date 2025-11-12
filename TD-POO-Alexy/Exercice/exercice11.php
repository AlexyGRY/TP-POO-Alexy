<?php 

/* EXERCICE 11

Creez une classe "CompteBancaire" avec les proprietes privees suivantes:
- titulaire (string)
- solde (float)
- numeroCompte (string)

Implementez les methodes suivantes:
- Un constructeur qui prend le titulaire et le numeroCompte en parametres. Le solde initial est de 0.
- deposer(float $montant): ajoute le montant au solde. Le montant doit etre positif.
- retirer(float $montant): retire le montant du solde. Le montant doit etre positif et le solde ne peut pas devenir negatif.
- Getters pour toutes les proprietes.
- afficherSolde(): retourne une chaine avec le titulaire, le numero de compte et le solde.

En cas d'erreur de validation, levez une exception avec un message explicite.

Creez ensuite un compte, effectuez plusieurs operations (depot, retrait) et testez les cas d'erreur. */

class CompteBancaire{
    private string $titulaire;
    private float $solde=0;
    private string $numeroCompte;

    public function __construct(string $titulaire,string $numeroCompte)
        {
            $this->titulaire=$titulaire;
            $this->numeroCompte=$numeroCompte;
        }

    public function deposer(float $montant){
        if ($montant<0){
            throw new Exception("erreur, le montant doit etre positif");
        }
        $this->solde+=$montant;
    }

    public function retirer(float $montant){
        if ($montant<0){
            throw new Exception("erreur, le montant doit etre positif<br>");
        }elseif($this->solde-$montant<0){
            throw new Exception("erreur, la solde ne peut etre negative<br>");
        }
        $this->solde-=$montant;
    }

    public function afficherSolde(){
        return "le titulaire est:" . $this->titulaire . ",le numero de compte est" . $this->numeroCompte .",et la solde est de" . $this->solde . "<br>";
    }

    /**
     * Get the value of titulaire
     */ 
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set the value of titulaire
     *
     * @return  self
     */ 
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of numeroCompte
     */ 
    public function getNumeroCompte()
    {
        return $this->numeroCompte;
    }

    /**
     * Set the value of numeroCompte
     *
     * @return  self
     */ 
    public function setNumeroCompte($numeroCompte)
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }
}

try {
    $compte1 = new CompteBancaire("mark" , "B545");
    $compte1->deposer(50);
    $compte1->retirer(40);
    echo $compte1->afficherSolde();
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}

try {
    $compte2 = new CompteBancaire("mark" , "B545");
    $compte2->deposer(-20);
    $compte2->retirer(40);
    echo $compte2->afficherSolde();
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}

try {
    $compte3 = new CompteBancaire("mark" , "B545");
    $compte3->deposer(50);
    $compte3->retirer(60);
    echo $compte3->afficherSolde();
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}
