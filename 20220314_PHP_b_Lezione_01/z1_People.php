<?php
    class People {
        public $nome = "";
        public $cognome = "";
        public $eta = "";
        public $interessi = "";
        public $saluto = "";

        //costruttore
        public function __construct($nome,$cognome,$eta,$interessi) {
            
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
            $this->interessi = $interessi;
            $this->saluto = "Buongiorno, sono ".$nome." ".$cognome;

        }

        public function getPagBenvenuto(){
            //$this->saluto = "Buongiorno, sono ".$this->nome." ".$this->cognome;
            return $this->saluto;
        }


    }
?>