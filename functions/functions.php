
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