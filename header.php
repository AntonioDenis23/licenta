<?php
session_start();

// $_SESSION['id'] = isset($_SESSION['id']) ? $_SESSION['id'] : rand();
if (isset($_SESSION['id'])) {
    $displayNoneClass = 'display-none';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <link href="./styles.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proiect Licenta</title>
</head>

<body>
    <?php
    $url =  $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    ?>
    <nav class="navbar navbar-expand-lg navbar-light wrapper-header">
        <?php if (strpos($url, 'admin') !== false) : ?>
            <ul style="margin-left: 200px;" class="navbar-nav">
                <img src="../poze/logo.png" alt="" height="50px" class="logo-image">
                <li class="nav-item">
                    <a class="nav-link" href="../about.php">Despre</a>
                </li>
                <li> <a class="nav-link" href="../termenii.php">Termeni și condiții</a> </li>
            </ul>
        <?php else : ?>
            <img src="./poze/logo.png" alt="" height="50px" class="logo-image">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">Despre</a>
                </li>
                <li> <a class="nav-link" href="./termenii.php">Termeni și condiții</a> </li>

            </ul>
        <?php endif ?>

        <?php
        if (!isset($_COOKIE['username'])) {
            echo "<div id='navbarNav'>
                <ul class='navbar-nav' >
                    <li class='nav-item'>
                        <a class='nav-link' href='register.php'>Înregistrare</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='index.php'>Logare</a>
                    </li>
                </ul>
            </div>";
        } elseif (strpos($url, 'admin') !== false) {
            echo "<div id='navbarNav'>
                        <ul  class='navbar-nav' >
                            <li class='nav-item'>
                                <a class='nav-link' href='../pagina-cont-utilizator.php?username=" . $_COOKIE['username']  . "'>Pagină utilizator</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='../logout.php'>Delogare</a>
                            </li>
                        </ul>
                    </div>";
        } else {
            echo "
                    <div id='navbarNav'>
                        <ul  class='navbar-nav' >
                            <li class='nav-item'>
                                <a class='nav-link' href='./pagina-cont-utilizator.php?username=" . $_COOKIE['username']  . "'>Pagină utilizator</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='logout.php'>Delogare</a>
                            </li>
                        </ul>
                    </div>";
        }

        ?>

    </nav>

    <style>
        .navbar-brand,
        .nav-link {
            font-size: 22px;
            font-weight: 500;
            color: black !important;
            border: 1px solid #adadad !important;
            padding: 10px 30px !important;
            margin: 10px !important;
        }

        .navbar-brand:hover,
        .nav-link:hover {
            background-color: #adadad;
        }

        .logo-image {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin: auto 20px auto 20px;

        }
    </style>