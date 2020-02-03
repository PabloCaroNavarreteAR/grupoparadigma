<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta lang="es" />
        <title>Grupo Paradigma</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/responsive.css" />
        <link rel="Shortcut Icon" href="./img/favicon/favicon.png" />
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="Author" content="Grupo Paradigma" />
		<meta name="organization" content="Grupo Paradigma" />
		<meta name="GENERATOR" content="Grupo Paradigma"/>
		<meta name="Googlebot" content="all">
		<meta name="language" content="es" />
		<meta name="robots" content="index,follow" />
		<meta name="classification" content="grupo paradigma, holding">
		<meta name="og:title" content="Grupo Paradigma" />
		<meta name="og:description" content="Grupo Paradigma" />
		<meta name="og:type" content="website" />
    </head>
    <?php 
        $page='about';
    ?>
    <body class="<?php echo $page;?>-page">
        <?php
            if(isset($_GET['status'])){
                include('includes/alerts.php');
            }
        ?>
        <?php include('includes/theme/nav.php');?>
        <div class="main">
            <div class="innerbanner aboutTop">
                <div class="container">
                    <div class="inner">
                        <h2>About</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <?php include('includes/theme/about/about.php');?>
            </div>
            <?php //include('includes/theme/team.php');?>
        <?php include('includes/theme/contacto.php');?>
            <?php include('includes/theme/footer.php');?>
        </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/7.7.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="/__/firebase/7.7.0/firebase-analytics.js"></script>

    <!-- Initialize Firebase -->
    <script src="/__/firebase/init.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/anime.js"></script>
    <script src="js/animations.js"></script>
    </body>
</html>