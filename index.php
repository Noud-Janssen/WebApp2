<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,200;0,400;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/noud.css">
</head>
<body>
    <?php 
        require_once('php/config.php');
        require_once('php/nav.php');
    ?>
    <div class="banner">
    </div>
    <?php
            require_once('php/search.php')
        ?>
    <div class="mainWrapper">
        

        <h2>Waar wilt u heen?</h2>
        <div class="landenWrapper">
            <a href="http://localhost/WebApp2/resultaat.php?land=Noorwegen&vertrekdatum=&terugkomstdatum=" class="landIMG" style="background-image: url(assets/images/noorwegenbg.jpg)"><p>Noorwegen</p></a>
            <a href="http://localhost/WebApp2/resultaat.php?land=Italië&vertrekdatum=&terugkomstdatum=" class="landIMG" style="background-image: url(assets/images/italiebg.jpg)"><p>Italië</p></a>
            <a href="http://localhost/WebApp2/resultaat.php?land=Spanje&vertrekdatum=&terugkomstdatum=" class="landIMG" style="background-image: url(assets/images/spanjebg.jpg)"><p>Spanje</p></a>
            <a href="http://localhost/WebApp2/resultaat.php?land=Denemarken&vertrekdatum=&terugkomstdatum=" class="landIMG" style="background-image: url(assets/images/denmarkbg.jpg)"><p>Denemarken</p></a>   
            <a href="http://localhost/WebApp2/resultaat.php?land=Frankrijk&vertrekdatum=&terugkomstdatum=" class="landIMG" style="background-image: url(assets/images/francebg.jpg)"><p>Frankrijk</p></a>     
        </div>
        <h2>Geadviseerde reizen</h2>
        <div class="advertentieWrapper">
            <?php 
                $resultSet = $conn->query('SELECT * FROM reizen WHERE isAdvert = 1');
                while ($result = $resultSet->fetch()) {
                    echo '<div class="advertentie">
                        <div class="adBanner">
                        </div>
                        <div class="titelRow">
                            <h3>'.$result['land'].' - '.$result['plaats'].'</h3>
                            <h3>€'.$result['preis'].'</h3>
                        </div>
                        <div class="titelRow">
                        <h3>'.$result['vertrekDatum'].'</h3>
                        <h3>'.$result['terugkomstDatum'].'</h3>
                        </div>
                        <p>'.$result['beschrijving'].'</p>
                        <a href="reis-pagina.php?id='.$result['id'].'">Meer Informatie</a>

                    </div>';
                }
            ?>
        </div>
        <h2>Nieuw toegevoegd</h2>
        <div class="advertentieWrapper">
            <?php 
                $resultSet = $conn->query('SELECT * FROM reizen ORDER BY id DESC LIMIT 4');
                while ($result = $resultSet->fetch()) {
                    echo '<div class="advertentie">
                        <div class="adBanner">
                        </div>
                        <div class="titelRow">
                            <h3>'.$result['land'].' - '.$result['plaats'].'</h3>
                            <h3>€'.$result['preis'].'</h3>
                        </div>
                        <div class="titelRow">
                        <h3>'.$result['vertrekDatum'].'</h3>
                        <h3>'.$result['terugkomstDatum'].'</h3>
                        </div>
                        <p>'.$result['beschrijving'].'</p>
                        <a href="reis-pagina.php?id='.$result['id'].'">Meer Informatie</a>

                    </div>';
                }
            ?>
        </div>
    </div>
    
</body>
</html>