<?php
class Products{
    private $nome;
    private $animale;
    private $costo;

    function __construct($_nome, $_animale, $_costo)
    {
        $this->nome = $_nome;
        $this->animale = $_animale;
        $this->costo = $_costo;
    }

    public function getFullInfo(){
        return "{$this->nome}<br> {$this->animale}<br> {$this->costo}<br>";
    }
    public function getNome(){
        return $this->nome;
    }
    public function getAnimale(){
        return $this->animale;
    }
    public function getCosto(){
        return $this->costo;
    }

}
?>