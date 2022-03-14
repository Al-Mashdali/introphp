<!DOCTYPE html>
<html>

<head>
    <title>Beispiel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/main.css'>
</head>

<body>

    <?php include 'inc/header.php' ?>

    <div>
        <p>HIER PAAR BILDER</p>
    </div>

    
   
   <?php
    $dir = "images/";

    // Open a directory, and read its contents
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                echo "<img src='/images/" . $file . "' style='width:200px; height:200px'><br>";
            }
            closedir($dh);
        }
    }
    ?>

    <?php include 'inc/footer.php' ?>

</body>