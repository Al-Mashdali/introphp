<!DOCTYPE html>
<html>

<head>
    <title>Beispiel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    
    <div>Welcome <?php echo $_POST["name"]; ?></div>
    
<?php

session_start();

// include "inc/utils.php";

$favoriteAnimal = $_POST["favAnimal"];
$favoriteColor =  $_POST["favColor"];

$SESSION["favoriteAnimal"] = $favoriteAnimal;
$SESSION["favoriteColor"] = $favoriteColor;
    // test only
$_SESSION["last-post"] = $_POST;

echo "Your favorite animal is: " . $favoriteAnimal;
echo "<br>";
echo "Your favorite 
<span style='font-size:100px;'>&#128663;</span>
<p>I will display &#128566;</p>
<p>I will display &#x1F601;</p>
color is: " . $favoriteColor;
echo "<br>";
echo "<div style='width:50px;height:50px;background-color:$favoriteColor;'></div>";
echo "<a href='lieblingsfarbe.php'>Next</a>";
    
include "utils.php";

printFavAniImageTag();

?>

   <!-- Zeige das richtige Bild an.
    if ($favoriteanimal == "Cat") {
        echo "<img src='/introphp/cat.jpg'>";
    }
    elseif ($favoriteanimal == "Dog"){
        echo "<img src='/introphp/dog.jpg'>";
    }
    elseif ($favoriteanimal == "Elephant"){
        echo "<img src='/introphp/doelephantg.jpg'>";
    }
    elseif ($favoriteanimal == "Mouse"){
        echo "<img src='/introphp/mouse.jpg'>";
    }
    elseif ($favoriteanimal == "Tiger"){
        echo "<img src='/introphp/tiger.jpg'>"; */

    switch ($favoriteAnimal) {
        case "Cat":
            echo "<img src='/introphp/cat.jpg'>";
            break;
        case "Dog":
            echo "<img src='/introphp/dog.jpg'>";
            break;
        case "Elephant";
            echo "<img src='/introphp/Elephant.jpeg'>";
            break;
        case "Mouse":
            echo "<img src='/introphp/mouse.jpg'>";
            break;
        case "Tiger":
            echo "<img src='/introphp/Tiger.jpg'>";
            break;
        
        }
    
    ?>  -->

    </body>

</html>