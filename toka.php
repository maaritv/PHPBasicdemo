<?php

 $fruits = ['orange', 'apple'];
	 $vegetables = ['cucumber'];
	 $berries = ['strawberry', 'blueberry', 'cloudberry'];

	 $food = addToTheList($fruits, $vegetables, $berries);

function addToTheList($fruits, $vegetables, $berries){
   foreach ($vegetables as $vegetable){
	   echo $vegetable."<br>";
	   array_push($berries, $vegetable);
   }
   
   $tulos = $fruits;
   $tulos = $vegetables;
   $tulos = $berries;
   echo print_r($tulos);
}

?>