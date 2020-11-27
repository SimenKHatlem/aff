<?php

#Arrangement klasse
include 'Comparable.php';
class Arrangement implements Comparable{
    
    public $filmbilde;
    public $filmtittel;
    public $filmdato;
    public $visningstid;
    public $sjanger;
    public $andrefilmvisning;
    public $andrefilmdato;
    public $andrevisningstid;
    



    public function __construct($filmbilde, $filmtittel, $filmdato, $visningstid, $sjanger, $andrefilmvisning, $andrefilmdato, $andrevisningstid, $link) {
        $this->filmbilde = $filmbilde;
        $this->filmtittel = $filmtittel;
        $this->filmdato = $filmdato;
        $this->visningstid = $visningstid;
        $this->sjanger = $sjanger;
        $this->andrefilmvisning = $andrefilmvisning;
        $this->andrefilmdato = $andrefilmdato;
        $this->andrevisningstid = $andrevisningstid;
        $this->link = $link;
    }



    public function __destruct() {
    }

#Fjerner første visning
    public function removefirst(){
        $this->filmdato = $this->andrefilmdato;
        $this->visningstid = $this->andrevisningstid;
        $this->andrefilmvisning = false;
        $this->andrefilmdato = $null;
        $this->andrevisningstid = $null;
    }

    public function compareTo($value){
        $diff = makefulltime($this->filmdato, $this->visningstid) - makefulltime($value->filmdato, $value->visningstid);
        if($diff > 0){
            return 1;
        }
        elseif($diff < 0){
            return -1;
        }
        return 0;
    }
}


?>