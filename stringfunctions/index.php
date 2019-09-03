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
    $first = "the quick Brown Fox";
    $second = " jumped over the lazy dog";

    $third = $first;
    $third .= $second;
    $say = "I am great";
    echo $third
    ?>

    <br>
   
    LowerCase: <?php echo strtolower($third) ?><br>
    Uppercase: <?php echo strtoupper($third) ?><br>
    Uppercase First: <?php echo ucfirst($third) ?><br>
    Uppercase words: <?php echo ucwords($third) ?><br>

    <br>

    Length: <?php echo strlen($third) ?><br>
    Trim:<?php echo "A" . trim(" B "."       C"."D    ")."E" ?> <br>
    Find: <?php echo strstr($third,"Fox") ?><br>
    Replace By String: <?php echo str_replace("quick","superfast",$third) ?>

    <br>

    Repeat: <?php echo str_repeat($say." ",3) ?> <br>
    Make Substring: <?php echo substr($third, 5,3) ?>
    find position: strpos (source,"word") <br>
    Find position: <?php echo strpos($third,"over") ?><br>
    find character:<?php echo strchr($third,"o") ?>
</body>
</html>