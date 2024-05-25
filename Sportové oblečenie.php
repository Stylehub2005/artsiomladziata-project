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
                <tr>
                    <th>№1</th>
                    <th>Meno</th>
                    <th>Vynaložené</th>
                    <th>Zľava</th>
                </tr>
                <?php
                $clients = get_clients();
                foreach ($clients as $client){?>
                <tr>
                    <th><?php echo $client['ID']?></th>
                    <th><?php echo $client['Meno']?></th>
                    <th><?php echo $client['Vynaložené']?></th>
                    <th><?php echo $client['Zľava']?></th>
                </tr>
                <?php }; ?>



            </table>
        </div>

        <div class="sale">
            <h2>SALE</h2>
        </div>
        <section class="cards">
            <?php
            $sales_shoes = get_sales_shoes();
            foreach ($sales_shoes as $sales_shoe){?>
            <div class="card">
                <img src="<?php echo $sales_shoe['IMG']?>" alt="" img>
                <div class="card-content">
                    <p><?php echo $sales_shoe['Name']?></p>
                    <p><?php echo $sales_shoe['Price']?></p>
                </div>
            </div>
            <?php }; ?>

        </section>




        <div class="sale">
            <h2>ROZSAH</h2>
        </div>
        <section class="cards">
            <?php
            $shoes = get_shoes();
            foreach ($shoes as $shoe){?>
                <div class="card">
                    <img src="<?php echo $shoe['IMG']?>" alt="" img>
                    <div class="card-content">
                        <p><?php echo $shoe['Name']?></p>
                        <p><?php echo $shoe['Price']?></p>
                    </div>
                </div>
            <?php }; ?>


        </section>




        <section class="cards">
            <?php
            $shoes2 = get_shoes2();
            foreach ($shoes2 as $shoe2){?>
                <div class="card">
                    <img src="<?php echo $shoe2['IMG']?>" alt="" img>
                    <div class="card-content">
                        <p><?php echo $shoe2['Name']?></p>
                        <p><?php echo $shoe2['Price']?></p>
                    </div>
                </div>
            <?php }; ?>


        </section>





    </main>
    <?php include 'parts/footer.php'?>



    <script src="skript.js"> </script>
</body>

</html>