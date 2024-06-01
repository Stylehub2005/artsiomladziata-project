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


<?php include 'parts/footer.php'?>

<script src="js/skript.js"></script>
<script src="js/menu.js"></script>
</body>

</html>