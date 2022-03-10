<?php 
function printFavAniImageTag() {

$favoriteAnimal = $_POST["favAnimal"];


echo "<div>";

switch($favoriteAnimal) {
    case "cat":
        echo "<img src='/images/cat.jpg'>";
        break;

        case "Dog":
        echo "<img src='/images/dog.jpg'>";
        break;

        case "Elephant":
        echo "<img src='/images/elephant.jpg'>";
        break;


        case "Mouse":
        echo "<img src='/images/mouse.jpg'>";
        break;


}

echo "</div>";

}
?>