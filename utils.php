<?php
    function printFavAniImageTag(){

        $favoriteAnimal = $_POST["favAnimal"];


        echo "<div>";

        switch ($favoriteAnimal) {
            case "cat":
                echo "<img src='/images/cat.jpg'>";
            break;

            case "Dog":
                echo "<img src='/images/dog.jpg'>";
            break;

            case "Elephant":
                echo "<img src='/images/Elephant.jpeg'>";
            break;

            case "Mouse":
                echo "<img src='/images/mouse.jpg'>";
            break;

            case "Tiger":
                echo "<img src='/images/tiger.jpg'>";
            break;

        }
    }
?>