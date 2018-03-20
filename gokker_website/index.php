<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>De Gokkers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/snowflake.css">
</head>
<body>
<!-- Add your site or application content here -->

<div class="container">
    <header>

        <div class="center-content">
            <div class="logo">

                <h1>De Gokkers</h1>

            </div>
        </div>
        <nav>
            <a class="current" href="index.html">Home</a>
            <a href="#">About</a>
            <a href="#">download</a>
            <a href="#">login</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    <div class="banner">
        <div class="head-ban">
            <h2>Project de gokkers</h2>

        </div>
        <div class="fling-minislide" id="fling-minislide">
            <img src="img/Screenshot_3.png" alt="dummy image">
            <img src="img/Screenshot_4.png" alt="dummy image">
        </div>
    </div>
</div>
<login>
    <?php
    if (isset($_SESSION['u_id'])){
        echo'<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="submit">Logout</button>
        </form>
        <a href="download/gokkersapp.zip">download</a>';
    }else{
        echo '   <p>You must be logged in to download the file!</p>
        <form action="includes/login.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username/e-mail">
            <input type="password" name="pwd" placeholder="password">
            <button type="submit" name="submit">login</button>
        </form>        
        <h2>Signup</h2>
        <form class="sign-up" action="includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="firstname">
            <input type="text" name="last" placeholder="Lastname">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Signup</button>
        </form>';
    }
    ?>
</login>






<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>
