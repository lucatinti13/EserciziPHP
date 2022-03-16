<?php
    class Stud extends People {
        public $ind_studio = "";


        //metodo inserimento info specifiche studente
        public function setIndStudio($ind_studio) {
            $this->ind_studio = $ind_studio;
            
        }

        public function getPagBenvenutoStud(){
            $saluto_stud = $this->getPagBenvenuto();
            return $saluto_stud." e frequento ".$this->ind_studio;
        }


    }
?>