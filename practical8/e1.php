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
    $colours = array("white", "green", "red");
    
    foreach ($colours as $value) {
        echo "$value  ";
    }
    
    echo "<ul>";
    foreach ($colours as $value) {
        echo " <li>$value</li>";
    }
    echo "</ul>";
    
    
    
    ?>
    
    
</body>
</html>