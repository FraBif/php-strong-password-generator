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

    <?php 
        $passwordLength = null;

        if (!empty($_GET['number'])){
            $passwordLength = checkData($_GET['number']);
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
</body>
</html>