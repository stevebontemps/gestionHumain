<?php

    class Humain{

        private $nom;
        private $prenom;
        private $adresse;
        private $ville;
        private $codepostal;


        public function __construct($nom,$prenom,$adresse,$ville,$codepostal){
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setAdresse($adresse);
            $this->setVille($ville);
            $this->setCodepostal($codepostal);
        }

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setAdresse($adresse){
            $this->adresse = $adresse;
        }

        public function setVille($ville){
            $this->ville = $ville;
        }

        public function setCodepostal($codepostal){
            $this->codepostal = $codepostal;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getAdresse(){
            return $this->adresse;
        }

        public function getVille(){
            return $this->ville;
        }

        public function getCodepostal(){
            return $this->codepostal;
        }


    }
