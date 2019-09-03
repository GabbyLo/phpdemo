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
    $numbers = array(23,45,64,34,13,4);
    echo $numbers[0]
    
    ?>

    <?php $mixed = array(23, "dog", "cat", array("x","y","z")); ?> <br>
    <?php echo $mixed[2];?>
    <pre>
    <?php echo print_r($mixed); ?>
    </pre>

    <?php echo $mixed[3][1] ?>
    <?php $mixed[2] = "Lion"; ?> <br>
    <?php echo $mixed[2] ?> <br>


    <!-- ASSOCIATIVE ARRAY -->

    <?php $data = array("fname"=>"John","lname"=>"Doe")?>
    <?php echo "Your name is ". $data["fname"];?> <br>

    <!-- Array functions -->


    <?php $numbers = array(13, 43, 2, 23, 5, 44, 3) ?>

    count:count(); <br>
    <?php echo "Count:" . count($numbers) ?>
    max value: max() <br>
    <?php echo "MAX" . max($numbers) ?>; <br>
    Min value: min(); <br>
    <?php echo "MIN: " . min($numbers) ?>; <br>
    Sort: sort(); <br>
    <?php echo "SORT: " . sort($numbers) ?>; <br>
    <?php echo $numbers ?>
    reverse Sort:rsort(); <br>

    <!-- check an item in an array -->
    15 in array?: in_array(value,array)  <br>

    <?php echo "Is 43 present?" .  in_array(43, $numbers) ?> <br>
    43 in array?:

</body>   
</html>