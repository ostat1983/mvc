<?php

class Zdefteri_Model extends Model {

    public function __construct() {
        parent::__construct();
        echo "ZDefteri Model";
      
    }
    
    public function getZdefteri(){
       return "Deneme Ziyaretçi Defteri" ;
    }
    


}