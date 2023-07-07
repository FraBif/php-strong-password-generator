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
        $passwordLength = null;

if (!empty($_GET['typeNumber'])){
    $passwordLength = checkData($_GET['typeNumber']);
}

function checkData ($data){
    if (!is_numeric($data)){
        return false;
    }
    return $data;
}

function generateRandomPassword ($length) {
    $password = '';
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $upperCase = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
    $numbers =  '0123456789' ;
    $specialChar = '!@#$%^&*()_+-={}[]|:;"<>,.?/';

    $allChar = [ $lowerCase , $upperCase , $numbers , $specialChar ];


    
    foreach ($allChar as $char){
        $password .= $char[array_rand(str_split($char))];
    }

    while (strlen($password) < $length){
        $random = $allChar[array_rand($allChar)];
        $password .= $random[array_rand(str_split($random))];
    }

    return $password;
}
    ?>

    <p>
        <?php
        echo $password
        ?>
    </p>
</body>
</html>