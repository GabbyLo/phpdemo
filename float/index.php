<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php $myfloat = 23.43451 ?><br>

Round:round(value,1);
<?php echo round($myfloat,2) ?><br>
Ceiling: ceil(value);
<?php echo ceil($myfloat) ?> <br>
Floor: floor(value)
<?php echo floor($myfloat) ?> <br>

<?php $integer = 21 ?>

<?php echo "Is {$integer} an integer? " . is_int($integer) ?> <br>
<?php echo "Is {$integer} a float?" . is_float($integer) ?><br>

<?php echo "Is {$integer} a numeric" . is_numeric($integer) ?> <br>

<?php echo 3 + "5 little monkeys" ?>
<!-- is_float -->
<!-- is_numeric -->
 
</body>
</html>