<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php 
    $result = true;
    $result2 = false;
    $myfloat = 23;
    ?>

    <!-- echo -->

    <!-- is_bool -->
    <?php echo "Result is ". is_bool($result) ?> <br>

    <!-- if/isfloat -->
   <?php 
    if(is_float($myfloat))
    {
        echo "Yes it is float";
    }
   ?> <br>
    <!-- NULL AND EMPTY -->
    <!-- isnull() -->
    <?php 
    $var1 = null;
    $var2 = "0";
    echo "Is var 1 null? ". is_null($var1);
    echo "<br>";
    echo "Is var 2 null? ". is_null($var2);
    echo "Is var 2 empty? ". empty($var2);
    echo "<br>";

    // $var3 = 200;
    if(!isset($var3))
    {
        $var3 = 3000;
    }
    echo "Var 3 = " . $var3;
    ?> <br>


<!-- IS SET? -->
isset()


<!-- is empty? -->
empty() 
</body>
</html>