<?php 
/* **EXERCICE 14**

Creez un trait "Horodatable" qui contient:
- Proprietes privees: dateCreation et dateModification (DateTime)
- Methode initHorodatage(): initialise dateCreation a la date actuelle
- Methode touch(): met a jour dateModification a la date actuelle
- Getters pour dateCreation et dateModification qui retournent des chaines formatees (Y-m-d H:i:s)

Creez deux classes qui utilisent ce trait:

1. Classe "Article":
   - Proprietes privees: titre (string), contenu (string)
   - Constructeur qui initialise titre et contenu, et appelle initHorodatage()
   - Methode modifier(string $nouveauContenu): modifie le contenu et appelle touch()
   - Methode afficherInfos(): retourne toutes les informations

2. Classe "Commentaire":
   - Proprietes privees: auteur (string), message (string)
   - Constructeur qui initialise auteur et message, et appelle initHorodatage()
   - Methode modifier(string $nouveauMessage): modifie le message et appelle touch()
   - Methode afficherInfos(): retourne toutes les informations

Testez en creant des instances, en attendant 1 seconde, puis en les modifiant pour voir la difference
 entre dateCreation et dateModification. */
date_default_timezone_set('GMT');
trait Horodatable{

    
    private DateTime $dateCreation;
    private DateTime $dateModification;
    $date=date("Y-m-d H:i:s");

    public function initHorodatage(){
        return $this->dateCreation=;
    }

    /**
     * Get the value of dateCreation
     */ 
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     *
     * @return  self
     */ 
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get the value of dateModification
     */ 
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set the value of dateModification
     *
     * @return  self
     */ 
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }
}