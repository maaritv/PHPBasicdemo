<?php

require_once('utils/MathUtils.php');

$mathUtils = new MathUtils();

	function addToTheList($fruits, $vegetables, $berries){
            $all=[];

            foreach ($vegetables as $vegetable){
                ##echo $vegetable."<br>";
                array_push($all, $vegetable);
            }

            foreach ($fruits as $fruit){
                array_push($all, $fruit);
            }

                foreach ($berries as $berry){
                array_push($all, $berry);
            }
            
            ##echo print_r($all);
            return $all;
        }


?>

<?php 
     include 'templates/header.php';
     ##header('Content-Type: text/plain');

	 echo '<h1>My First Notebook!</h1>';

	 echo '<a href="websivu.php">Toinen sivu</a>';

	 $average = $mathUtils->calculateAverage(4, 6, 2);
	 echo '<p>'.$average.'</p>';

	 $sum = MathUtils::sumAandB(2,3);
	 echo '<p>'.$sum.'</p>';

	 $fruits = ['orange', 'apple'];
	 $vegetables = ['cucumber'];
	 $berries = ['strawberry', 'blueberry', 'cloudberry'];

	 $food = addToTheList($fruits, $vegetables, $berries);
	 ##echo print_r($food);
?>

<ul>
<?php
  foreach($food as $item){
     echo "<li>".$item."</li>";
  }
?>
</ul>

</body>
</html>