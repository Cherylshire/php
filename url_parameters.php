<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP URL parameters</title>
</head>
<body>

  <form action="url_parameters.php" method="get">
    name: <input type="text" name="name"> <br>
    <input type="submit">
  </form>  

  <form action="url_parameters.php" method="post">
    password: <input type="password" name="password">
    <input type="submit">

  </form>
  <br><br>

  <? php 
    echo $_GET["name"];
    echo $_POST["password"];
  ?>

  </body>
</html>