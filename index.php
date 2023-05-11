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
</head>
<body>
    <?php 
        require_once('php/nav.php')
    ?>
    <div class="banner">
    </div>
    <form class="searchbalk">
        <input type="text" name="land" id="landform">
        <input type="date" name="vertrekdatum" class="vertrekdatum" id="vertrek-datum">
        <input type="date" name="terugkomstdatum" class="vertrekdatum" id="aankomst-datum">
        <input type="submit" value="zoek" id="zoek-knop">
    </form>
    <h2>Waar wilt u heen?</h2>
    <div class="landenWrapper">
        <a href="" class="landIMG" style="background-image: url(assets/images/noorwegenbg.jpg)"><p>Noorwegen</p></a>
        <a href="" class="landIMG" style="background-image: url(assets/images/italiebg.jpg)"><p>Italië</p></a>
        <a href="" class="landIMG" style="background-image: url(assets/images/spanjebg.jpg)"><p>Spanje</p></a>
        <a href="" class="landIMG" style="background-image: url(assets/images/denmarkbg.jpg)"><p>Denemarken</p></a>   
        <a href="" class="landIMG" style="background-image: url(assets/images/francebg.jpg)"><p>Frankrijk</p></a>     
    </div>
    <div class="advertentieWrapper">
        <?php 
            for ($i = 0; $i < 10 ; $i++) {
                echo '<div class="advertentie">
                    <div class="adBanner">
                    </div>
                    <div class="titelRow">
                        <h3>Noorwegen</h3>
                        <h3>€900,-</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque esse quo minus praesentium totam, assumenda obcaecati, dolorem, distinctio voluptates explicabo nisi numquam! Veniam a eius magnam beatae quia amet corrupti!</p>
                    <a href="link">Meer Informatie</a>

                </div>';
            }
        ?>
    </div>
</body>
</html>