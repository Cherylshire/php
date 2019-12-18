<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP array</title>
</head>
<body>

  <? php 
    $pets = ("Jubbie", "Yuffy", "Pimmie", "Hinny");
    
    $pets[0] = "Nubbie";
    echo $pets[0];
    echo $pets;
    $pets[4] = "Victoria";
    $pets[5] = "Romione";
    echo count($pets);

  ?>

  </body>
</html>