<?php
$array = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2</title>
</head>
<body>
    <h1>exercice2</h1>
    <p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>
    <p><?= print_r($array[2]) ?></p>
    
</body>
</html>