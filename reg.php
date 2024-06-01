<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/reg.css">
    <link rel="stylesheet" href="./css/accoriond.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
    <title>Mirillisshop.sk</title>
</head>

<body>
<?php include 'parts/header.php'?>
    <main>
        <div class="accordion-content" onclick="toggleAccordion(this)">
            <h2 class="accordion">Kliknite a získajte zľavu</h2>
            <div class="panel">
                <p>Váš propagačný kód na zľavu: <strong>4473</strong></p>
            </div>
        </div>

        <form class="form" action="submit.php" method="POST">
            <p><input type="text" name="name" class="feedback-input" placeholder="Name" required></p>
            <p><input type="email" name="email" class="feedback-input" placeholder="Email" required></p>
            <input type="tel" class="feedback-input" name="phone" placeholder="Cislo" required>
            <p><textarea name="text" id="comment" class="feedback-input" placeholder="Message" required></textarea></p>
            <input type="checkbox" id="genderCheckbox" required>
            <label for="genderCheckbox">Súhlas so spracovaním osobných údajov</label>
            <input type="submit" value="Submit" class="button-submit">
        </form>



        <div class="ease"></div>
        </form>

    </main>
    <?php include 'parts/footer.php'?>




    <script src="js/skript.js"> </script>
    <script src="js/accordion.js"> </script>
</body>

</html>