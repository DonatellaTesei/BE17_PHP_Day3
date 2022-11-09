<?php
/*Create a PHP program that iterates the integers from 1 to 100. For multiples 
of three print "Back-End" instead of the number and for the multiples of five print "Front-End". 
For numbers that are multiples of both three and five print "Full-Stack"*/


for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . " Full-Stack"  . "<br>";
    } elseif ($i % 3 == 0) {
        echo $i . " Back-End" . "<br>";
    } elseif ($i % 5 == 0) {
        echo $i . " Front-End" . "<br>";
    } else {
        echo $i . "<br>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print my name</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php

    ?>

</body>


</html>