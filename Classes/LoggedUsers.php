<?php
require_once __DIR__.'/Users.php';

class LoggedUsers extends Users{
    protected $discount = 0.80;

    function __construct($_name, $_email, $_password, $_creditCard, $_creditCardEV, $_discount = 0.80, $_logged = true)
    {
        parent::__construct($_name, $_email, $_password, $_creditCard, $_creditCardEV, $_logged);
        $this->discount = $_discount;
        $this->logged = $_logged;
    }

    public function getDiscount(){
        return $this->discount;
    }
    
}
?>