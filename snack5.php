<?php 
    $paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolor porro quibusdam consequuntur similique accusamus id nam consequatur illo eum. Qui sunt ab eveniet aperiam. Necessitatibus voluptate saepe incidunt explicabo.';

    $paragrafi = explode('. ',$paragrafo);

   // var_dump($paragrafi);
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
    <p>
       paragrafo intero: <br> <?php echo $paragrafo; ?>
    </p>

    <?php 
        for($i=0; $i<count($paragrafi); $i++){
            echo "<p> parte ".($i+1).":</p>"."<p>".$paragrafi[$i]."</p>";
        }

    ?>

</body>
</html>