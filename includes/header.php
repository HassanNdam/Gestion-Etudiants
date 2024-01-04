<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Firebase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <?php //BBD connexion 

$firebaseurl = "https://project-bdd-89099-default-rtdb.firebaseio.com/.json"; 

$response = @file_get_contents($firebaseurl); 

if($response !== false ){
    ?>
    <!-- <div class="alert alert-success" role="alert">
        La connexion à la base de données Firebase a réussi
    </div> -->
    <?php
}else{ 

    ?>
    <!-- <div class="alert alert-warning" role="alert">
        Erreur de connexion à la base de données Firebase
    </div> -->
    <?php
}

include("navbar.php");


?>