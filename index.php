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
    <form action="" method="GET">
        <label for="passwordLength">Lunghezza della tua Password:</label>
        <input type="number" name="passwordLength" id="passwordLength">
        <button type="submit">Genera La Tua Password</button>
    </form>

    <?php 
        $passwordLength = $_GET['passwordLength'];
        function generateRandomPassword($length) {
            $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
            $password = '';
            $lettersLength = strlen($letters) - 1;
            for ($i = 0; $i < $length; $i++) {
                $password .= $letters[rand(0, $lettersLength)];
              }
            
              return $password;
            }
    ?>
</body>
</html>