<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='/css/main.css'>
    <title>Document</title>
</head>
<body>
<div class="topnav">
    <?php
    $menuItems= array (
    array("/homepage.php" , "Home"),
    array("/index.php" , "Formular"),
    array("/images.php", "Bilder"),

    );
    
    /* <a class="active" href="/homepage.php">Home</a>
    <a href="/index.php">Formular</a> */

    foreach( $menuItems as $item){
        echo "<a href='$item[0]'>$item[1]<a/> ";
    }
?>

</div>
</body>
</html>