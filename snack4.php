<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non
 dovrà contenere lo stesso numero più di una volta -->

 <?php 
 $numeriCasuali = [];

 while (count($numeriCasuali)<15) {
    $numero= rand(0,100);

    if(in_array($numero , $numeriCasuali) == false){
        array_push($numeriCasuali,$numero);
    };
 };

 var_dump($numeriCasuali);

 ?>