<?php 

/* Exercice 16

1. Interface "Publiable"
Creez une interface avec:
- Methode publier(): retourne un string
- Methode depublier(): retourne un bool

2. Trait "Horodatage"
Creez un trait avec:
- Proprietes privees: dateCreation, datePublication (DateTime ou null)
- Methode protected initHorodatage(): initialise dateCreation
- Methode protected enregistrerPublication(): initialise datePublication
- Getters pour les deux dates (retournent des strings au format "d/m/Y H:i")

3. Classe abstraite "Publication"
Creez une classe abstraite qui implemente Publiable et utilise le trait Horodatage:
- Proprietes protected: titre (string), auteur (string), statut (string)
- Constantes publiques: STATUT_BROUILLON = "brouillon", STATUT_PUBLIE = "publie", STATUT_ARCHIVE = "archive"
- Propriete statique privee: nombrePublications (int)
- Constructeur qui initialise titre et auteur, met le statut a STATUT_BROUILLON,
 appelle initHorodatage() et incremente nombrePublications
- Methode concrete publier(): change le statut, appelle enregistrerPublication() et retourne un message
- Methode concrete depublier(): change le statut a STATUT_ARCHIVE si publie, retourne true/false
- Methode abstraite getType(): retourne un string
- Methode abstraite afficherContenu(): retourne un string
- Methode statique getNombrePublications(): retourne le nombre total

4. Classe "Article"
Herite de Publication:
- Propriete privee: contenu (string)
- Constructeur qui appelle le parent et initialise contenu
- Implementation de getType(): retourne "Article"
- Implementation de afficherContenu(): retourne titre, auteur et contenu formates
- Methode compterMots(): retourne le nombre de mots du contenu
 5. Classe finale "Video"
Herite de Publication:
- Propriete privee: url (string), duree (int en secondes)
- Constructeur qui appelle le parent et initialise url et duree
- Implementation de getType(): retourne "Video"
- Implementation de afficherContenu(): retourne titre, auteur, url et duree formatee
- Methode getDureeFormatee(): retourne la duree au format "MM:SS"

 6. Classe "GestionnairePublications"
Classe utilitaire avec methodes statiques:
- filtrerParStatut(array $publications, string $statut): retourne les publications correspondantes
- publierTout(array $publications): publie toutes les publications en brouillon
- afficherStatistiques(array $publications): affiche le nombre total, par type et par statut

 Tests a realiser
Creez plusieurs articles et videos, publiez-en quelques-uns, depubliez-en un,
 et utilisez le gestionnaire pour afficher les statistiques. */



interface Publiable{
    public function publier():string;
    public function depublier():bool;
}

trait Horodatage{
    
}





