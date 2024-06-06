<?php 
require_once 'Chambre.php';
require_once 'Hotel.php';
require_once 'Reservation.php';

class Client {
    
    
    private string $nom;

    private string $prenom;

    private array $reservations = [];


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
        $this->reservations[]=$reservation;
    }

    public function calculAPayer(){
        $counter=0;
        foreach ($this->reservations as $reservation) {
            $counter+=$reservation->nbNuit() * $reservation->getChambre()->getPrix();
        }
        return round($counter,2);
    }

    public function printResa(){
        $retour = "<h2> Réservation de $this </h2>";
        $nbResaTotal = count($this->reservations);
        $montantAPayer=$this->calculAPayer();
        $retour.="<p class=\"dispo\">$nbResaTotal Réservation". ($nbResaTotal>1 ? "s":"" )."</p>";
        if ($nbResaTotal==0) {
            $retour.= "<p>Aucune réservation !</p>";
        }else {
            foreach ($this->reservations as $reservation) {
                $chambre=$reservation->getChambre();
                $hotel=$chambre->getHotel();
                $retour .= "<p>$hotel / $chambre du ".$reservation->getDateArrivee()->format("d/m/Y")." au " . $reservation->getDateDepart()->format("d/m/Y")."</p>";
            }
            $retour .= "<p>Total : $montantAPayer €</p>";
        }
        return $retour;
    }

    public function __toString()
    {
        return strtoupper($this->nom) . " $this->prenom";
    }
}





?>