<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano- Cantù | 55-60 -->


<?php

$partite = [
        [
            'casa' => 'Basket Milano', 
            'ospite' => 'Basket Roma', 
            'punti_casa' => 45, 
            'punti_opsite' => 21,
        ],
        [
            'casa' => 'Basket Genova', 
            'ospite' => 'Basket Napoli', 
            'punti_casa' => 45, 
            'punti_opsite' => 21,
        ],
        [
            'casa' => 'Basket Verona', 
            'ospite' => 'Basket Bologna', 
            'punti_casa' => 45, 
            'punti_opsite' => 21,
        ],
        [
            'casa' => 'Basket Torino', 
            'ospite' => 'Basket Parma', 
            'punti_casa' => 45, 
            'punti_opsite' => 21,
        ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php 
        for ($i = 0; $i < count($partite); $i++) {
            echo $partite[$i]["casa"] ." - ". 
            $partite[$i]["ospite"] ." | ". 
            $partite[$i]["punti_casa"] ."-". 
            $partite[$i]["punti_opsite"] . "<br>";
        } 
    ?>
    </h1>
</body>
</html>