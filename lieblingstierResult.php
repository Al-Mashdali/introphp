<!DOCTYPE html>
<html>

<head>
    <title>Beispiel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/main.css'>
</head>

<body>

    <?php include 'inc/header.php' ?>  

    <div>Welcome <?php echo $_POST["name"]; ?></div>

    <?php
    session_start();

    $favoriteAnimal = $_POST["favAnimal"];
    $favoriteColor =  $_POST["favColor"];

    $SESSION["favoriteAnimal"] = $favoriteAnimal;
    $SESSION["favoriteColor"] = $favoriteColor;
    
    // test only
    $_SESSION["last-post"] = $_POST;

    echo "Your favorite animal is: " . $favoriteAnimal;
    echo "<br>";

    include "utils.php";

    printFavAniImageTag();
    echo "<br>";
    echo "<br>";

    echo "Your favorite color is: " . $favoriteColor;
    echo "<br>";

    echo "<div style='width:200px; height:200px; background-color:$favoriteColor;'></div>";

    echo "<a href='lieblingsfarbe.php'>Next</a>";

    ?>

    

 <?php include 'inc/footer.php' ?>

</body>

</html>