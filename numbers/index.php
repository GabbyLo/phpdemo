<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php $number = 200 ?>
    Absolute Value: <?php echo abs($number-400) ?><br>
    Exponential: pow(base,exp) <?php echo pow(2,10) ?> <br>
    Square Root: sqrt(value) <?php echo sqrt(144) ?>   <br> 
    Modulo: fmod(float,float) <?php echo fmod(2650,100) ?> <br>
    Random: rand(); <?php echo rand() ?><br> 
    Random(min,max): rand(min,max) <?php echo rand(0,100) ?><br>
</body>
</html>