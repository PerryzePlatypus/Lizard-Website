<!DOCTYPE html>
<html lang="en">

<?php
    include("config.php");

    // Connects to the database
    $dbconnect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if(mysqli_connect_errno())
    {
            echo "Connection Failed".mysqli_connect_error();
            exit;
    }
?>



<head>
    <meta charset="UTF-8">
    <meta name="description" content="Database showcasing lizard species">
    <meta name="keywords" content="lizards, reptiles">
    <meta name="author" content="Pierre Gnzls">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lizardpedia</title>

    <link rel="stylesheet" href="lizards.css">

    <!-- Googling font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist+Pixel&family=Metal+Mania&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/613cf7bdbd.js" crossorigin="anonymous"></script>
</head>