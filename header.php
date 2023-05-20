<?php 
session_start();

// $_SESSION['id'] = isset($_SESSION['id']) ? $_SESSION['id'] : rand();
if(isset($_SESSION['id'])) {
    $displayNoneClass = 'display-none';
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
        <link href="styles.css" rel="stylesheet">
        <style>
            #navbarNav {
            justify-content: end;
            }
        </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Proiect Licenta</title>
    </head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light wrapper-header">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav" >

    <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
    </li>
    </ul>
    <?php
    if(!isset($_COOKIE['username'])){
        echo "<div class='collapse navbar-collapse' id='navbarNav'>
        <ul class='navbar-nav' >
            <li class='nav-item'>
                <a class='nav-link' href='register.php'>Register</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='index.php'>Login</a>
            </li>
        </ul>
            </div>";
    }else{
        echo "<div class='collapse navbar-collapse' id='navbarNav'>
        <ul class='navbar-nav' >
            <li class='nav-item'>
                <a class='nav-link' href='./pagina-cont-utilizator.php?username=" . $_COOKIE['username']  . "'>Pagina utilizator</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='logout.php'>Logout</a>
            </li>
        </ul>
            </div>";
    }
    
    ?>
    
</nav>

<style>
    .navbar-brand, .nav-link{
        font-size: 22px;
        font-weight: 500;
        color: black !important;
        border: 1px solid #adadad !important;
        padding: 10px 30px !important;
        margin: 10px !important;
    }
    .navbar-brand:hover, .nav-link:hover {
        background-color: #adadad;
    }
</style>