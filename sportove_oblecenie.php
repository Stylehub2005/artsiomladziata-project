<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sp.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
    <title>Mirillisshop.sk</title>
</head>

<body>
<?php include 'parts/header.php'?>





<main>
    <div class="table-container">
        <table>

            <?php
            $clients = new Oblecenie();
            echo($clients->display_clients());
            ?>



        </table>
    </div>

    <div class="sale">
        <h2>SALE</h2>
    </div>
    <section class="cards">
        <?php
        $sales_shoes = new Oblecenie();
        echo($sales_shoes->display_sales_shoes());
        ?>

    </section>




    <div class="sale">
        <h2>ROZSAH</h2>
    </div>
    <section class="cards">
        <?php
        $shoes = new Oblecenie();
        echo($shoes->display_shoes());
        ?>


    </section>




    <section class="cards">
        <?php
        $shoes2 = new Oblecenie();
        echo($shoes2->display_shoes2());
        ?>


    </section>





</main>
<?php include 'parts/footer.php'?>



<script src="skript.js"> </script>
</body>

</html>