<?php

//array 

/* The function should return the highest value from the array. */

/* $numeric_array = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100); */
$numeric_array = array();
function arrayConstructor($max, $ar, $it)
{
    for ($i = 0; $i < $it; $i++) {
        array_push($ar, rand(0, $max));
        echo $ar[$i] . "<br>";
    }
    return $ar;
}
function fun($arrayMaxNum)
{
    $maxNumb = max($arrayMaxNum);
    return $maxNumb;
}
$return_value = fun(arrayConstructor(100, $numeric_array, 10));
echo "The highest value from the function is: $return_value";



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