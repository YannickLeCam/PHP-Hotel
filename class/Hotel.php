<?php 
require_once 'Chambre.php';
require_once 'Client.php';
require_once 'Reservation.php';


class Hotel{

    private string $nomHotel;

    private int $nbEtoile;

    private string $ville;

    private string $adresse;

    private array $chambres=[];
    
    /**
     * __construct
     *
     * @param  string $nomHotel
     * @param  int $nbEtoile
     * @param  string $ville
     * @param  string $adresse
     * @return void
     */
    public function __construct(string $nomHotel,int $nbEtoile,string $ville,string $adresse) {
        $this->nomHotel=$nomHotel;
        $this->nbEtoile=$nbEtoile;
        $this->ville=$ville;
        $this->adresse = $adresse;
    }

    public function strEtoiles (){
        return str_repeat("*",$this->nbEtoile);
    }

    /**
     * Get the value of nomHotel
     *
     * @return string
     */
    public function getNomHotel(): string
    {
        return $this->nomHotel;
    }

    /**
     * Set the value of nomHotel
     *
     * @param string $nomHotel
     *
     * @return self
     */
    public function setNomHotel(string $nomHotel): self
    {
        $this->nomHotel = $nomHotel;

        return $this;
    }

    /**
     * Get the value of nbEtoile
     *
     * @return int
     */
    public function getNbEtoile(): int
    {
        return $this->nbEtoile;
    }

    /**
     * Set the value of nbEtoile
     *
     * @param int $nbEtoile
     *
     * @return self
     */
    public function setNbEtoile(int $nbEtoile): self
    {
        $this->nbEtoile = $nbEtoile;

        return $this;
    }

    /**
     * Get the value of ville
     *
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @param string $ville
     *
     * @return self
     */
    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of adresse
     *
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @param string $adresse
     *
     * @return self
     */
    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }



    /**
     * Get the value of chambres
     *
     * @return array
     */
    public function getChambres(): array
    {
        return $this->chambres;
    }

    public function addChambre(Chambre $chambre):void {
        $this->chambres[] = $chambre; 
    }

    public function __toString(){
        return "$this->nomHotel " . $this->strEtoiles() . " $this->ville";
    }
}





?>