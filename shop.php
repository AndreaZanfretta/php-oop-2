<?php
require_once __DIR__.'/Classes/LoggedUsers.php';
require_once __DIR__.'/Classes/Products.php';


if(empty($_POST['name'] || $_POST['email'] || $_POST['pass'])){
    $utente = new Users('guest', 'guest@a.it', 'guest', '', '');
}else{
    $utente = new LoggedUsers($_POST['name'], $_POST['email'], $_POST['pass'], '', '');
}




$prods = [
    [
        'nome' => 'cuccia per cani',
        'animale' => 'cane',
        'costo' => 10
    ],
    [
        'nome' => 'mangime uccelli',
        'animale' => 'uccelli',
        'costo' => 15
    ],
    [
        'nome' => 'mangime per procioni',
        'animale' => 'procione',
        'costo' => 100
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    <h1>Negozio di Animali Pippo&Co</h1>
    <h2>Lista Prodotti</h2>
    <ul>
        <?php foreach($prods as $key => $prod){ 
            if(!$utente->getLogged()){
                $product = new Products($prod['nome'], $prod['animale'], $prod['costo']);
            }else{
                $prod['costo'] = $prod['costo'] * $utente->getDiscount();
                $product = new Products($prod['nome'], $prod['animale'], $prod['costo']);
            } ?>
            
        <li>
            <?php 
            echo $product->getNome().'<br>';
            echo 'Animale: '.$product->getAnimale().'<br>'; 
            echo 'Costo: '.$product->getCosto().'€ <br>'; 
            ?>
            <button>Compra</button>
        </li> <br>
        <?php } ?>
    </ul>
</body>
</html>