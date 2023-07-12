<?php 

    class Modele{
        private $id;
        private $marque;
        private $modele;
        private $carburant;

        public function __construct($id, $marque, $modele, $carburant){
            $this->setId($id);
            $this->setMarque($marque);
            $this->setModele($modele);
            $this->setCarburant($carburant);
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of marque
         */ 
        public function getMarque()
        {
                return $this->marque;
        }

        /**
         * Set the value of marque
         *
         * @return  self
         */ 
        public function setMarque($marque)
        {
                $this->marque = $marque;

                return $this;
        }

        /**
         * Get the value of modele
         */ 
        public function getModele()
        {
                return $this->modele;
        }

        /**
         * Set the value of modele
         *
         * @return  self
         */ 
        public function setModele($modele)
        {
                $this->modele = $modele;

                return $this;
        }

        /**
         * Get the value of carburant
         */ 
        public function getCarburant()
        {
                return $this->carburant;
        }

        /**
         * Set the value of carburant
         *
         * @return  self
         */ 
        public function setCarburant($carburant)
        {
                $this->carburant = $carburant;

                return $this;
        }
    }




?>