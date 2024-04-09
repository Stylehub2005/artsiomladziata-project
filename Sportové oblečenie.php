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
    <header>
        <a href="index.php"><img class="graficlogo" src="img/logo/logo.png" alt="logo"></a>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <li><a href="index.php" target="_blank">HOME</a></li>
                <li><a href="O%20nas.php" target="_blank">BLOG</a></li>
                <li><a href="Sportové oblečenie.php" target="_blank"> ROZSAH</a></li>
                <li><a href="reg.php" target="_blank">REGISTRATION</a></li>
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>
    <main>
        <div class="table-container">
            <table>
                <tr>
                    <th>№1</th>
                    <th>Meno</th>
                    <th>Vynaložené</th>
                    <th>Zľava</th>
                </tr>
                <tr>
                    <td> 1</td>
                    <td>Alex Kravchenko</td>
                    <td>240$</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td> 2</td>
                    <td>Martin Bednarek</td>
                    <td>220$</td>
                    <td>5%</td>
                </tr>
                <tr>
                    <td> 3</td>
                    <td>Jakub Sol</td>
                    <td>190$</td>
                    <td>3%</td>
                </tr>
            </table>
        </div>

        <div class="sale">
            <h2>SALE</h2>
        </div>
        <section class="cards">
            <div class="card">
                <img src="img/image/snimok-ekrana-2023-10-03-v-19.05.19-350x350.webp" alt="" img>
                <div class="card-content">
                    <p>Nike Mercurial Vapor 15 AG-Pro</p>
                    <p><s>130</s> 70$</p>
                </div>
            </div>
            <div class="card">
                <img src="img/image/snimok-ekrana-2023-11-22-v-13.13.03-350x350.webp" alt="" img>
                <div class="card-content">
                    <p>Puma Ultimate MxSG</p>
                    <p><s>140</s> 77$</p>
                </div>
            </div>
            <div class="card">
                <img src="img/image/snimok-ekrana-2023-11-22-v-20.46.14-350x350.webp" alt="" img>
                <div class="card-content">
                    <p>Puma Future Z 2.1 MG</p>
                    <p><s>120</s> 90$</p>

                </div>
            </div>
        </section>




        <div class="sale">
            <h2>ROZSAH</h2>
        </div>
        <section class="cards">
            <div class="card">
                <img src="img/image/snimok-ekrana-2023-09-09-v-16.53.51-350x350.webp" alt="" img>
                <div class="card-content">
                    <p>Adidas Predator Freak.1 FG</p>
                    <p> 115$</p>
                </div>
            </div>
            <div class="card">
                <img src="img/image/snimok-ekrana-2023-05-24-v-16.49.54-350x350.webp" alt="" img>
                <div class="card-content">
                    <p>Nike Hypervenom Phantom III DF SG-Pro</p>
                    <p>180$</p>
                </div>
            </div>
            <div class="card">
                <img src="img/image/snimok-ekrana-2023-05-24-v-15.48.49-350x350.webp" alt="" img>
                <div class="card-content">
                    <p>Nike Phantom GT DF Elite SG-Pro</p>
                    <p> 150$</p>

                </div>
            </div>

        </section>




        <section class="cards">
            <div class="card">
                <img src="img/image/snimok-ekrana-2023-10-03-v-19.05.19-350x350.webp" alt="" img>
                <div class="card-content">
                    <p>Nike Mercurial Vapor 15 AG-Pro</p>
                    <p> 200$</p>
                </div>
            </div>
            <div class="card">
                <img src="img/image/snimok-ekrana-2023-10-22-v-14.02.48-350x350.webp" alt="" img>
                <div class="card-content">
                    <p>Nike Tiempo Legend 7</p>
                    <p> 177$</p>
                </div>
            </div>
            <div class="card">
                <img src="img/image/snimok-ekrana-2023-11-22-v-13.13.03-350x350.webp" alt="" img>
                <div class="card-content">
                    <p>Puma Future Z 2.1 MG</p>
                    <p> 185$</p>

                </div>
            </div>

        </section>





    </main>
    <?php include 'parts/footer.php'?>



    <script src="skript.js"> </script>
</body>

</html>