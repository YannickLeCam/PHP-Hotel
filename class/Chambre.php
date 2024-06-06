<?php 
require_once 'Client.php';
require_once 'Hotel.php';
require_once 'Reservation.php';
?>

<?php
    class Chambre{
        
        private string $nomChambre;

        private int $nbLit;

        private float $prix;

        private bool $wifi;
        
        private Hotel $hotel;


        
        /**
         * __construct
         *
         * @param  string $nomChambre
         * @param  string $nbLit
         * @param  float $prix
         * @param  bool $wifi
         * @param  Hotel $hotel
         * @return void
         */
        function __construct(string $nomChambre,int $nbLit,float $prix,bool $wifi,Hotel $hotel) {
            $this->nomChambre = $nomChambre;
            $this->nbLit = $nbLit;
            $this->prix= $prix;
            $this->wifi = $wifi;
            $this->hotel = $hotel;
            $this->hotel->addChambre($this);
        }


        /**
         * Get the value of hotel
         *
         * @return Hotel
         */
        public function getHotel(): Hotel
        {
                return $this->hotel;
        }

        /**
         * Set the value of hotel
         *
         * @param Hotel $hotel
         *
         * @return self
         */
        public function setHotel(Hotel $hotel): self
        {
                $this->hotel = $hotel;

                return $this;
        }

        /**
         * Get the value of wifi
         *
         * @return bool
         */
        public function getWifi(): bool
        {
                return $this->wifi;
        }

        /**
         * Set the value of wifi
         *
         * @param bool $wifi
         *
         * @return self
         */
        public function setWifi(bool $wifi): self
        {
                $this->wifi = $wifi;

                return $this;
        }

        /**
         * Get the value of prix
         *
         * @return float
         */
        public function getPrix(): float
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @param float $prix
         *
         * @return self
         */
        public function setPrix(float $prix): self
        {
                $this->prix = $prix;

                return $this;
        }

        /**
         * Get the value of nbLit
         *
         * @return int
         */
        public function getNbLit(): int
        {
                return $this->nbLit;
        }

        /**
         * Set the value of nbLit
         *
         * @param int $nbLit
         *
         * @return self
         */
        public function setNbLit(int $nbLit): self
        {
                $this->nbLit = $nbLit;

                return $this;
        }

        /**
         * Get the value of nomChambre
         *
         * @return string
         */
        public function getNomChambre(): string
        {
                return $this->nomChambre;
        }

        /**
         * Set the value of nomChambre
         *
         * @param string $nomChambre
         *
         * @return self
         */
        public function setNomChambre(string $nomChambre): self
        {
                $this->nomChambre = $nomChambre;

                return $this;
        }

        public function __toString(){
            return "$this->nomChambre ($this->nbLit lit".($this->nbLit>1 ? ("s") : ("")) . " - $this->prix € - WiFi : ". ($this->wifi ? ("Oui") : ("Non")) . " )" ;
        }

    }





?>