<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <?php
    $ceJour = getdate();
    for ($i = 6; $i > 2; $i--){
        echo "<h$i>
        Hello World<br>";
    }

    echo "__________________________<br>";
    echo "<br>";
    echo "En ce " . $ceJour['mday'] . " " . $ceJour['month'] . " " . $ceJour['year'] . "<br>";
    echo "sur le serveur " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "il est " . $ceJour['hours'] . " h " . $ceJour['minutes'] . "mins<br>";
    echo "__________________________<br>";
    echo "<br>";
    ?>
    <h2><?php echo $_SERVER['SERVER_NAME']?></h2>
    
    <table border="1px">
        <tr>
            <th>Clé</th>
            <th>Valeur</th>
        </tr>

        <?php
        foreach($_SERVER as $key => $value) {
            ?>
            <tr>
                <td><?php echo $key?></td>
                <td><?php echo $value?></td>
            </tr>
            <?php
    }
    ?>
    </table>

    <?php
        echo "__________________________<br>";
    ?> -->

    <h1>Bienvenue sur notre site web</h1>
    <form action="" method="get">
        <label for="name">Entrez votre nom</label>
        <input type="text"><br>
        <label for="password">Entrez votre mot de passe</label>
        <input type="password"><br>

        <input type="submit">
        <input type="reset">
    </form>
    


</body>
</html>



