<?php
require_once __DIR__ ."/Products.php";

class Game extends Products{
    protected $genere;

    public function __construct($_name, $_price, $_image,$_is_available,$_quantità, Category $_category)
    {
        parent:: __construct($_name, $_price, $_image,$_is_available,$_quantità,$_category);

    }
    
    public function setGenere($_genere){

        $this -> genere = $_genere;

    }

    public function getGenere(){
        return  $this -> genere;
    }
}

?>