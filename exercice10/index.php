<?php
$array = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];

foreach ($array as $key => $value){
    echo 'Le département ' . $value . ' a le numéro ' . $key . ' . ';
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice10</title>
</head>
<body>
    <h1>exercice10</h1>
    <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
    Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département
    </p>
    <p><?= print_r($array) ?></p>
    
</body>
</html>