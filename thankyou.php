<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirillisshop.sk</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/menu.css">

</head>

<body>
<?php
include('parts/header.php');

?>

<main>
    <div class="Thankyou" >
        <h1>Thank you!</h1>
        <h1>Thank you!</h1>
        <h1>Thank you!</h1>
        <h1>Thank you!</h1>
        <h1>Thank you!</h1>
    </div>
</main>
<?php
$insert = new Contact();
echo($insert->insert());
?>
<footer>
    <div class="footer-nav">
        <a href="index.php">HOME</a>
        <a href="O%20nas.php">BLOG</a>
        <a href="Sportové%20oblečenie.php">ROZSAH</a>
        <a href="reg.php">REGISTRATION</a>
    </div>
    <div class="logo">
        <a href="index.php"><img src="img/logo/logo.png"></a>
    </div>
    <div class="social">
        <a href="#"><img src="img/image/m_1e61cef7d9.jpg"></a>
        <a href="#"><img src="img/image/m_2f6ce99aa8.jpg"></a>
        <a href="#"><img src="img/image/m_f016f1a07c.jpg"></a>
        <a href="#"><img src="img/image/m_f8a463e0c3.jpg"></a>
    </div>
    <p>Artsiom Ladziata 2023</p>
</footer>

<script src="js/skript.js"></script>
<script src="js/menu.js"></script>
</body>

</html>