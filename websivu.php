<?php

 require_once('model/Fruit.php');

 $myFruit = new Fruit();
 $myFruit->name = "Lemon";
 $myFruit->countryOfOrigin="Spain";
 $myFruitType = "";

if (isset($_POST['settype']) && ($_POST['fruittype'])){
   $fruitType=$_POST['fruittype'];
    if ($fruitType!=Fruit::CITRUS && $fruitType!=Fruit::BANANA)
    {
        echo "<b>Type must be CITRUS or BANANA</b>";   
    }
    else {
        $myFruit->type=$fruitType;
        $myFruitType = $myFruit->type;
    }
}

include 'templates/header.php';
?>

<h1><?php echo $myFruit->name ?> of type <?php echo $myFruitType ?></h1>
<p><?php echo $myFruitType ?></p>

<form action="websivu.php" method="post">
Fruit type CITRUS or BANANA

<select name="fruittype" id="fruittype">
  <option value=<?php echo Fruit::CITRUS ?>><?php echo Fruit::CITRUS ?></option>
  <option value=<?php echo Fruit::BANANA ?>><?php echo Fruit::BANANA ?></option>
</select>
<input type="submit" name="settype" value="Set type">
</form>

</body>
</html>