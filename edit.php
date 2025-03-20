<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // plocka det som står i URL edit.php?id=1
    $id = $_GET['id'];
    // Hämta den produkt med detta ID

    echo "<h1>Du klickade på $id</h1>"
    ?>
</body>
</html>