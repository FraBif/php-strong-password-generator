<?php 
  include_once "./functions/functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password</title>
</head>
<body>
    <h1>
        Generatore Casuale di Password
    </h1>
    <form action="./index.php" method="GET">
        <label for="passwordLength">Lunghezza della tua Password:</label>
        <input type="number" name="number" id="number">
        <button type="submit">Genera La Tua Password</button>
    </form>

    <div>
        <?php
        echo generateRandomPassword($length)
        ?>
    </div>
</body>
</html>