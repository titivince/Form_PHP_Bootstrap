<?php
    $firstName = $_POST["prenom"];
    $name = $_POST["nom"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $mail = $_POST["mail"];
    $sql = 0;
    $pdo = new PDO('mysql:host=mysql;dbname=basedeteste;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $sql = "INSERT INTO form (firstName, name, password, gender, mail) 
    VALUES 
    ('$firstName', '$name', '$password', '$gender','$mail')";

    $pdo -> exec($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Envoie</title>
</head>
<body>

    <div class='alert alert-success'>Vos information ont bien été envoyé</div>

</body>
</html>

