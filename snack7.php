<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome
e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php 

$classe = [
    [
        'nome' => 'Giovanni',
        'cognome' => 'Rossi',
        'voti' => [4,5,2,2,6,8]
    ],
    [
        'nome' => 'Giovanna',
        'cognome' => "D'arco",
        'voti' => [10,5,9,10,6,8,10]
    ],
    [
        'nome' => 'Giacomo',
        'cognome' => 'Forte',
        'voti' => [7,4,9,2,6,7]
    ],
    [
        'nome' => 'Alessia',
        'cognome' => 'Rossi',
        'voti' => [8,7,9,5,8,7]
    ]
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
    <?php 
        for($i=0; $i<count($classe); $i++){
            $somma = 0;
            for($j=0; $j<count($classe[$i]['voti']); $j++){
                $somma += $classe[$i]['voti'][$j];
            }
            $media = $somma/count($classe[$i]['voti']);
            echo "<p>".$classe[$i]['nome']." ".$classe[$i]['cognome']."<br>voto medio: ".$media."</p>";
        }
    ?>
</body>
</html>
