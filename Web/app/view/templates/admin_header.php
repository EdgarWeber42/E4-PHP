<html>
<head>
    <title>Tableau de bord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/AlgoBreizh/web/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/AlgoBreizh/web/css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="http://localhost/AlgoBreizh/web/js/jquery-3.2.1.min.js"></script>
    <script src="http://localhost/AlgoBreizh/web/js/script.js"></script>
    <script src="http://localhost/AlgoBreizh/web/bootstrap/js/bootstrap.js"></script>
</head>
<header>
    <div class="text-center " style="padding-top: 15px;">
        <p>
            PROJET ALGOBREIZH - SIO - AFTEC RENNES
        </p>
    </div>
    <h1 style="padding-left: 15px;">Tableau de bord</h1>
    <span>
            <?php
            if (isset($_SESSION['user'])) {
                echo "<button class='rgtc btn btn-success'>" . $_SESSION['user'] . "</button>";
            }
            ?>
        </span>
</header>
<div id="notification">A simple Notification</div>
<body>