<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     require_once __DIR__."./classes/Movie.php";

     $moviesArr = [
       new Movie("<strong>Titolo:</strong> Madagascar<br>", "Genere: animazione, avventura, commedia <br>", "<strong>Anno:</strong> 2005<br>", "<strong>Regista:</strong> Eric Darnell, Tom McGrath<br>", "<strong>Cast:</strong> Ben Stiller, Chris Rock, David Schwimmer, Jada Pinkett Smith, Sacha Baron Cohen, Cedric the Entertainer, Andy Richter, Tom McGrath, Chris Miller, Jeffrey Katzenberg<br>"),
       new Movie("<strong>Titolo:</strong> Act of Valor<br>", "<strong>Genere:</strong> Avventura, Azione, Guerra<br>", "<strong>Anno:</strong> 2012<br>", "<strong>Regista:</strong> Mike McCoy, Scott Waugh<br>", "<strong>Cast:</strong> Dave, Rorke Denver, Ailsa Marshall, Katelyn, Emilio Rivera, Drea Castro<br>")
     ];
     
     foreach($moviesArr as $movie) {
      echo "<li>{$movie->getInfo()}</li>";
    }
    ?>
</body>
</html>