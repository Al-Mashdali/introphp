Zeige das richtige Bild an.

    <!-- IF ELSE -->
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






    <!--SWITCH-->    
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
    
    ?>  