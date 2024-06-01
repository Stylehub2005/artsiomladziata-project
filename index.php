<?php
include 'db.php';


?>


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
<?php include 'parts/header.php'?>





<main>

    <div id="dv1">
        <?php
        $singles = new Index();
        echo($singles->display_singles());
        ?>

    </div>
    <h1 style="text-align: center; padding: 3% 5%;">Ako objednať tovar?</h1><br>
    <div id="dv2">


        <div class="gide">

            <img class="gide_img" id="gide_img">
            <p class="gide_text" id="gide_text">
                <b>Výber produktu:</b>
                <br>
                <br>
                Na výber produktov použite katalóg.
                <br>
                Pridajte si ich do košíka.
            </p>
        </div>
        <div class="container">
            <div class="steps">
                <span class="circle active">1</span>
                <span class="circle">2</span>
                <span class="circle">3</span>
                <span class="circle">4</span>
                <div class="progress-bar">
                    <span class="indicator"></span>
                </div>
            </div>
            <div class="buttons">
                <button id="prev" disabled>Prev</button>
                <button id="next">Next</button>
            </div>
        </div>

    </div>
</main>

<?php include 'parts/footer.php'?>



<script src="js/skript.js"></script>
<script src="js/menu.js"></script>
</body>

</html>