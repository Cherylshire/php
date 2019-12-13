<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP and HTML</title>
</head>
<body>
  

  <form action="calculater_php.php" method="get">
    <input type="number" name="num1">
    <input type="number" name="num2">
    <input type="number" name="num3">
    <input type="number" name="num4">
    <input type="number" name="num5">
    <input type="number" name="num6">
    <input type="number" name="num7">
    <input type="number" name="num8">
    
    <input type="submit">
  </form>

  <?php echo $_GET["num1"] + $_GET["num2"] ?>
  <?php echo $_GET["num3"] - $_GET["num4"] ?>
  <?php echo $_GET["num5"] * $_GET["num6"] ?>
  <?php echo $_GET["num7"] / $_GET["num8"] ?>

  <?php
  $noun = $_GET["noun"];
  $color = $_GET["color"];
  $plurlNoun = $_GET["plurlnoun"];
  $celebrity = $_GET["celebrity"];
  
  echo "$noun are $color. <br>";
  echo "$plurlNoun are blue. <br>";
  echo "$celebrity love me.";

  ?>

  </body>
</html>