<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP and HTML</title>
</head>
<body>
  

  <form action="project.php" method="get">
    Enter Name: <input type="text" name="name">
    Favorite book: <input type="text" name="book">
    <input type="submit">
  </form>
  <br>

  Your name is <? php echo $_GET["name"] ?>.
  Your dream home is at <? php echo $_GET["book"] ?>.

  <? php


  echo("<h1>Dressing in Different Cultures.</h1>");
  echo("There are many ways of dressing.");
  echo("<hr>");
  echo("Many people have appealed to the “westernized” outfit like jeans and a t-shirt. These clothes are mass-produced and easily shipped around the world and are usually easier to work in. These are the people of different cultures and countries around the world that still wear their traditional clothing. If you’re planning on seeing these beautiful clothes in person by traveling to the country that wears them earn frequent flyer miles on sightseeing tours and attractions. Book on Viator.com today!");
  $characterName = "Jonathan";
  $characterAge = 30;
  echo("<p> $characterName is from western Europe. He is $characterAge and wears t-shirt and jean all the time. </p>");
  echo("echo is the name of Alexa.");

  $quote = "I have no special talent. I am only passionately curious. Albert Einstein";
  $phrase = "Bufflo Chicken Wings";
  $age = 30;
  $gpa = 4.5;
  $isMale = True;
  echo $quote ;

  echo strtoupper($phrase);
  echo strtolower($phrase);
  echo strlen($phrase);
  echo $phrase[0];
  echo $phrase[7];
  echo str_replace("o", "ehufflepuff", $phrase);
  echo substr($phrase, 7, 4);

  $num = 10;
  $num = $num * 25;

  echo $num;
  echo abs(-200);
  echo pow(3, 6);
  echo sqrt(8100);
  echo max(15, 20, 25);
  echo min(15, 20, 25);
  echo round(3.5);
  echo round(4.3);
  echo round(11.7);
  echo cil(3.2);
  echo cil(3.5);
  echo cil(3.8);
  echo floor(4.2);
  echo floor(4.5);
  echo floor(4.8);
  ?>

</body>
</html>