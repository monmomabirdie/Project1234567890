 <?php

function getRandomNumber($min, $max) {
    return mt_rand($min, $max);
}

$randomNum = getRandomNumber(1, 50);
echo $randomNum;
?>