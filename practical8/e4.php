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
$text="w3resource";  
$search_char="r";  
$count="0";  
for($x="0"; $x< strlen($text); $x++)  
  {   
    if(substr($text,$x,1)==$search_char)  
    {  
    $count=$count+1;  
     }  
  }  
echo $count;  
?> 
    
    
    
    
</body>
</html>