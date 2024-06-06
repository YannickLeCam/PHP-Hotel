<?php 
require_once 'Chambre.php';
require_once 'Hotel.php';
require_once 'Reservation.php';

class Client {
    
    
    private string $nom;

    private string $prenom;

    private array $reservation = [];


    public function __construct(string $nom,string $prenom){
        $this->nom=$nom;
        $this->prenom = $prenom;
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }
    public function getNom():string{
        return $this->nom;
    }


    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }
    public function getPrenom():string{
        return $this->prenom;
    }

    public function addReservation(Reservation $reservation){
        $this->reservation[]=$reservation;
    }

    public function __toString()
    {
        return strtoupper($this->nom) . " $this->prenom";
    }
}





?>