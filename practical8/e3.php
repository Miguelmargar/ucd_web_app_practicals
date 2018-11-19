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
    $temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
                    74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    
    echo "the average is: ".array_sum($temps) / count($temps);
    echo "<br>";
    
    sort($temps);
    echo "list of lowest temperatures: $temps[0] $temps[1] $temps[2] $temps[3] $temps[4]"; 
    
    echo "<br>";
    
    rsort($temps);
    echo "list of lowest temperatures: $temps[0] $temps[1] $temps[2] $temps[3] $temps[4]"; 
    
    
    ?>
    
    
    
</body>
</html>