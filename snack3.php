<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e
 come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php

$post = [
        '01-01-2007' => [
                            [
                                'titolo' => 'questo è un titolo1', 
                                'testo' => 'questo è un testo1',
                            ],
                            [
                                'titolo' => 'questo è un titolo2', 
                                'testo' => 'questo è un testo2',
                            ],
                            [
                                'titolo' => 'questo è un titolo3', 
                                'testo' => 'questo è un testo3',
                            ],
                        ],
        '25-08-2016' => [
                            [
                                'titolo' => 'questo è un titolo1', 
                                'testo' => 'questo è un testo1',
                            ],
                            [
                                'titolo' => 'questo è un titolo2', 
                                'testo' => 'questo è un testo2',
                            ],
                            [
                                'titolo' => 'questo è un titolo3', 
                                'testo' => 'questo è un testo3',
                            ],
                        ],
];

//var_dump($post);

$keys = array_keys($post);

//var_dump($keys);


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
    for ($i = 0; $i < count($post); $i++) {
        echo $keys[$i].'<br>';
        
        for($j = 0; $j <count($post[$keys[$i]]); $j++){
            echo $post[$keys[$i]][$j]['titolo'].'<br>'.
                 $post[$keys[$i]][$j]['testo'].'<br><br>';
        };

    };
?>
</body>
</html>