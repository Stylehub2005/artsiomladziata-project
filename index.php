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



<?php
include 'db.php';

$singles = get_all();

foreach ($singles as $single) {
    echo $single["title"];
}
?>


    <main>
        <div id="dv1">
            <h1>Mirillisshop.sk -je nový futbalový obchod s novou históriou a novým prístupom k práci so
                zákazníkmi</h1>
            <p>Výsledok zápasu v profesionálnom futbale často závisí od kvality futbalových uniforiem, obuvi a
                vybavenia. Na základe toho náš obchod ponúka iba oficiálne produkty populárnych značiek-Adidas, Nike,
                Mizuno, Joma, Mníchov, Alphakeepers, Select, Joma.</p>
            <h2>Sportová obuv vo výpredaji</h2>
            <p>
                Športová obuv, ktorá vám dodá štýl aj pohodlie. Od klasických tenisiek až po špeciálne bežecké topánky.
                Máme všetko, čo potrebujete na aktívny životný štýl. Objavte u nás svoj štýl ešte dnes!</p>
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