<?php 
/* EXERCICE 15
Creez une classe "Logger" avec:
- Constantes publiques: LEVEL_INFO = 1, LEVEL_WARNING = 2, LEVEL_ERROR = 3
- Propriete privee: logs (array)
- Constructeur qui initialise le tableau de logs
- Methode finale log(string $message, int $level): ajoute un message au tableau
avec son niveau (cette methode ne peut pas etre redefinie)
- Methode getLogs(): retourne tous les logs
- Methode afficherLogs(): affiche tous les logs avec leur niveau

Creez une classe "FileLogger" qui herite de Logger:
- Propriete privee: cheminFichier (string)
- Constructeur qui appelle le parent et initialise cheminFichier
- Methode saveToFile(): sauvegarde les logs dans le fichier (simulation avec echo)

Creez une classe finale "SecureLogger" qui herite de Logger:
- Cette classe ne peut pas etre heritee
- Ajoutez une methode encrypt(string $message): retourne le message encode en base64
- Surchargez le constructeur pour ajouter un message de log automatique a la creation

Testez les trois niveaux de logs avec les differentes classes. */

class Logger{
    public const LEVEL_INFO=1;
    public const LEVEL_WARNING=2;
    public const LEVEL_ERROR=3;
    private array $logs;

    public function __construct(array $logs)
        {
            $this->logs=$logs;
        }

    final function log(string $message,int $level){
        array_push($this->logs,$message,$level);
    }

    public function afficherLogs(){
        return $this->logs;
    }

    /**
     * Get the value of logs
     */ 
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Set the value of logs
     *
     * @return  self
     */ 
    public function setLogs($logs)
    {
        $this->logs = $logs;

        return $this;
    }
}

class FileLogger extends Logger{
    private string $cheminFichier;
    public function __construct(array $logs,string $cheminFichier)
        {
            $this->cheminFichier=$cheminFichier;
            return parent::__construct($logs);
        }

    public function saveToFile(){
        echo "logs sauvegarder dans le fichier";
    }

    /**
     * Get the value of cheminFichier
     */ 
    public function getCheminFichier()
    {
        return $this->cheminFichier;
    }

    /**
     * Set the value of cheminFichier
     *
     * @return  self
     */ 
    public function setCheminFichier($cheminFichier)
    {
        $this->cheminFichier = $cheminFichier;

        return $this;
    }
}

final class SecureLogger extends Logger{
    public function encrypt(string $message){
        return $message /* en base 64 */;
    }
}