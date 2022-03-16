<?php
    class Dir extends People {
        public $ind_dirigo = "";


        //metodo inserimento info specifiche studente
        public function setIndStudio($ind_dirigo) {
            $this->ind_dirigo = $ind_dirigo;
            
        }

        public function getPagBenvenutoDir(){
            $saluto_dirig = $this->getPagBenvenuto();
            return $saluto_dirig." e dirigo la scuola ".$this->ind_dirigo;
        }


    }
?>