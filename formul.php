<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Merci à vous, <?php echo $_GET["nom"] ?></h1>
    <p>Vous avez donc le bel age de <strong><?php echo $_GET["age"]?></strong>, vous êtes <strong><?php echo $_GET["marit"]?></strong>
        et vous vous intéressez à <strong><?php echo $_GET["internet"] . ", " . $_GET["micro"] . ", " . $_GET["jeux"]?></strong></p>
    
    <p>Je m'empresse d'envoyer la requete : <strong><?php 
        $marequ = 'INSERT INTO Matable VALUES (';
        $marequ .= $_GET["nom"] . ", ";
        $marequ .= $_GET["age"] . ", ";
        $marequ .= $_GET["marit"] . ", ";
        echo $marequ . "<br />";
    ?></strong> à notre base de données</p>
</body>
</html>