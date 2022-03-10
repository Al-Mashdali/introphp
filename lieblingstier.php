<!DOCTYPE html>
<html>

<head>
    <title>Beispiel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
</head>


<body>

    <form action="lieblingstierResult.php" method="post">

        <label for="name">Name:</label>
        <input type="tsxt" id="name" name="name"><br>

        <label for="email">Email:</label>
        <input type="tsxt" id="email" name="email"><br>

        <label for="favoriteAnimal">Choose an animal:</label>
        <select id="favoriteAnimal" name="favAnimal">
            <option value="none">Please select</option>
            <option value="Elephant">Elephant</option>
            <option value="Mouse">Mouse</option>
            <option value="Dog">Dog</option>
            <option value="Cat">Cat</option>
            <option value="Tiger">Tiger</option>
        </select>

        <label for="favoriteColor">Choose color:</label>
        <select id="favoriteColor" name="favColor">
            <option value="none">Please select</option>
            <option value="Red"> Red</option>
            <option value="Green">Green</option>
            <option value="Blue">Blue</option>
            <option value="Yellow">Yellow</option>
            <option value="Black">Black</option>
        </select><br><br>

        <button>Absenden</buttton><br><br>
    </form>

</body>

</html>