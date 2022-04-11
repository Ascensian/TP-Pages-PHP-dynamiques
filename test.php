<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Un petit formulaire (pour commencer)</h1>
<p>Merci de renseigner les informations suivantes</p>

    <form action="formul.php" method="get">

        <label for="nom">Votre nom</label>
        <input type="text" name="nom"><br>

        <label for="age">Votre age</label>
        <input type="number" name="age"><br>

        <p>Votre situation maritale</p>
        <input type="radio" name="marit" value="Marié" checked>
        <label for="marit">Marié</label>
        <input type="radio" name="marit" value="Veuf(ve)">
        <label for="marit">Veuf(ve)</label>
        

        <p>Vos centres d'intérêt :</p>
        <input type="checkbox" name="internet" value="internet" checked>
        <label for="internet">Internet</label>
        <input type="checkbox" name="micro" value="micro-informatique">
        <label for="micro">Micro-informatique</label>
        <input type="checkbox" name="jeux" value="jeux-vidéo">
        <label for="jeux">Jeux Vidéo</label><br>

        <input type="submit">
        <input type="reset">

    </form>
    


    
</body>
</html>