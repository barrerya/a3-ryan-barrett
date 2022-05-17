<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="TimsStyle.css">
<title>Your Tim Horton's Order</title>
<header>
	<h3>Thanks for your order. Here it is:</h3>
</header>
</head>
<body>
        <?php
        $count = $_GET['count'];
        $size = $_GET['size'];
        $cream = $_GET['cream'];
        $sugar = $_GET['sugar'];
        for ($z = 0; $z < $count;  $z ++) {
            
            //display cup
            if ($size == "small") {
                echo '<img src="images/cup.jpg" height="170" width="125">';
                $cost = 1;
            } else if ($size == "medium") {
                echo '<img src="images/cup.jpg" height="255" width="188">';
                $cost = 2;
            } else if ($size == "large") {
                echo '<img src="images/cup.jpg" height="340" width="250">';
                $cost = 3;
            } else {
                echo '<img src="images/cup.jpg" height="425" width="313">';
                $cost = 4;
            }
            
            
            
            //display cream
            if($cream > 0){
                echo '<img src="images/plus.jpg">';
            }
            for ($x = 0; $x < $cream;  $x ++){
                echo '<img src="images/cream.jpg">';
            }
            
            //display sugar
            if($sugar > 0){
                echo '<img src="images/plus.jpg">';
            }
            for ($y = 0; $y < $sugar; $y ++){
                echo '<img src="images/sugar.jpg">';
            }
            echo "<br>";
        }
        $price = ($cost *1.13)*$count;
        echo "Cost: $$cost.00 x $count + tax = $$price";

        ?>
        
        
    </body>
</html>