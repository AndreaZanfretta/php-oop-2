<?php
class Products{
    private $nome;
    private $animale;
    private $costo;
    private $logged;

    function __construct($_nome, $_animale, $_costo, $_logged = false)
    {
        $this->nome = $_nome;
        $this->animale = $_animale;
        $this->costo = $_costo;
        $this->logged = $_logged;
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
    public function getLogged(){
        return $this->logged;
    }
}
?>