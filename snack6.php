<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo
gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->


<?php

$db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
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
<div class="teachers">
    <?php
        for($i=0; $i<count($db['teachers']); $i++){
            echo $db['teachers'][$i]['name']." ".$db['teachers'][$i]['lastname']."<br>";
        };
    ?>
</div>
<div class="pm">
    <?php
        for($i=0; $i<count($db['pm']); $i++){
            echo $db['pm'][$i]['name']." ".$db['pm'][$i]['lastname']."<br>";
        };
    ?>
</div>
</body>

<style>
    div{
        color: white;
        padding: 30px;
    }
    .teachers{
        background-color: green;
    }
    .pm{
        background-color: gray;
    }
</style>
</html>


