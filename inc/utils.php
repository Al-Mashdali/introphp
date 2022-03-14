<?php
    function printFavAniImageTag(){

        $favoriteAnimal = $_POST["favAnimal"];


        echo "<div>";

        switch ($favoriteAnimal) {
            case "Cat":
                echo "<img src='/images/cat.jpg' width='200px' height='200px'>";
            break;

            case "Dog":
                echo "<img src='/images/dog.jpg' width='200px' height='200px'>";
            break;

            case "Elephant":
                echo "<img src='/images/Elephant.jpeg' width='200px' height='200px'>";
            break;

            case "Mouse":
                echo "<img src='/images/mouse.jpg' width='200px' height='200px'>";
            break;

            case "Tiger":
                echo "<img src='/images/tiger.jpg' width='300px' height='200px'>";
            break;

        }
    }
?>