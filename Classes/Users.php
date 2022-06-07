<?php
class Users{
    protected $name;
    protected $email;
    protected $password;
    protected $creditCard = '0000000';
    protected $creditCardEV = '00/00';
    protected $logged;

    function __construct($_name, $_email, $_password, $_creditCard, $_creditCardEV, $_logged = false)
    {
        $this->name = $_name;
        $this->email = $_email;
        $this->password = $_password;
        $this->creditCard = $_creditCard;
        $this->creditCardEV = $_creditCardEV;
        $this->logged = $_logged;
    }
    public function getLogged(){
        return $this->logged;
    }
}
?>