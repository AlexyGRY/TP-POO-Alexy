<?php 

/* EXERCICE 13
Creez une classe abstraite "Paiement" avec:
- Une propriete protected: montant (float)
- Un constructeur qui initialise le montant
- Une methode concrete getMontant() qui retourne le montant
- Deux methodes abstraites: traiter() et getType()

Creez trois classes concretes qui heritent de Paiement:

1. "PaiementCarte"
   - Propriete privee: numeroCarte (string)
   - Constructeur qui appelle le parent et initialise numeroCarte
   - Implementation de traiter(): retourne un message de paiement par carte
   - Implementation de getType(): retourne "Carte Bancaire"
   - Methode masquerCarte(): retourne le numero masque (exemple: ****-****-****-3456)

2. "PaiementPaypal"
   - Propriete privee: email (string)
   - Constructeur qui appelle le parent et initialise email
   - Implementation de traiter(): retourne un message de paiement PayPal
   - Implementation de getType(): retourne "PayPal"

3. "PaiementVirement"
   - Propriete privee: iban (string)
   - Constructeur qui appelle le parent et initialise iban
   - Implementation de traiter(): retourne un message de paiement par virement
   - Implementation de getType(): retourne "Virement"

Testez le polymorphisme en creant un tableau de differents types de paiements et en les traitant dans une boucle. */



abstract class Paiement{
    protected float $montant;

    public function __construct(float $montant)
        {
            $this->montant=$montant;
        }

    
    abstract function traiter();

    abstract function getType();

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }
}

class PaiementCarte extends Paiement{
    private string $numeroCarte;

    public function __construct(float $montant,string $numeroCarte)
        {
            $this->numeroCarte=$numeroCarte;
            return parent::__construct($montant);
        }


    public function traiter()
        {
            return "paiement par carte<br>";
        }

    public function getType()
        {
            return "carte bancaire <br>";
        }
    
    public function masquerCarte()
        {
            return "****-****-****-" . substr($this->numeroCarte, -4) . "<br>";
        }

    /**
     * Get the value of numeroCarte
     */ 
    public function getNumeroCarte()
    {
        return $this->numeroCarte;
    }

    /**
     * Set the value of numeroCarte
     *
     * @return  self
     */ 
    public function setNumeroCarte($numeroCarte)
    {
        $this->numeroCarte = $numeroCarte;

        return $this;
    }
}

class PaiementPaypal extends Paiement{
    private string $email;

    public function __construct(float $montant,string $email)
        {
            $this->email=$email;
            return parent::__construct($montant);
        }


    public function traiter()
        {
            return "paiement par paypal<br>";
        }

    public function getType()
        {
            return "paypal <br>";
        }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}


class PaiementVirement extends Paiement{
    private string $iban;

    public function __construct(float $montant,string $iban)
        {
            $this->iban=$iban;
            return parent::__construct($montant);
        }


    public function traiter()
        {
            return "paiement par virement<br>";
        }

    public function getType()
        {
            return "virement <br>";
        }

    /**
     * Get the value of iban
     */ 
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set the value of iban
     *
     * @return  self
     */ 
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }
}
$paiementcarte= new PaiementCarte(25,"fghjk845abcd");
echo $paiementcarte->traiter();
echo $paiementcarte->getType();
echo $paiementcarte->masquerCarte();

echo "<hr>";

$paiementpaypal= new PaiementPaypal(14,"565656874");
echo $paiementpaypal->traiter();
echo $paiementpaypal->getType();

echo "<hr>";

$paiementvirement= new PaiementVirement(242,"ertyui");
echo $paiementvirement->traiter();
echo $paiementvirement->getType();

echo "<hr>";
