<?php 
require_once 'Chambre.php';
require_once 'Client.php';
require_once 'Hotel.php';


class Reservation {
    
    private Chambre $chambre;

    private Client $client;

    private DateTime $dateArrivee;

    private DateTime $dateDepart;

    public function __construct(Chambre $chambre,Client $client,string $dateArrivee,string $dateDepart) {
        $this->chambre = $chambre;
        $this->client = $client;
        $this->dateArrivee = new DateTime($dateArrivee);
        $this->dateDepart = new DateTime($dateDepart);
        $this->chambre->addReservation($this);
        $this->client->addReservation($this);
    }

    

    /**
     * Get the value of dateArrivee
     *
     * @return DateTime
     */
    public function getDateArrivee(): DateTime
    {
        return $this->dateArrivee;
    }

    /**
     * Set the value of dateArrivee
     *
     * @param DateTime $dateArrivee
     *
     * @return self
     */
    public function setDateArrivee(DateTime $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    /**
     * Get the value of dateDepart
     *
     * @return DateTime
     */
    public function getDateDepart(): DateTime
    {
        return $this->dateDepart;
    }

    /**
     * Set the value of dateDepart
     *
     * @param DateTime $dateDepart
     *
     * @return self
     */
    public function setDateDepart(DateTime $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get the value of client
     *
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @param Client $client
     *
     * @return self
     */
    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of chambre
     *
     * @return Chambre
     */
    public function getChambre(): Chambre
    {
        return $this->chambre;
    }

    /**
     * Set the value of chambre
     *
     * @param Chambre $chambre
     *
     * @return self
     */
    public function setChambre(Chambre $chambre): self
    {
        $this->chambre = $chambre;
        return $this;
    }
    public function nbNuit():int {
        return $this->dateArrivee->diff($this->dateDepart)->days;
        
    }

    public function __toString()
    {
        return "$this->client - " . $this->chambre->getNomChambre() . " - du " . $this->dateArrivee->format("d/m/Y") . " au " . $this->dateDepart->format("d/m/Y") . ".";
    }
}

?>