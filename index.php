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
    <div class="advertentieWrapper">
        <?php 
            for ($i = 0; $i < 100 ; $i++) {
                echo '<div class="advertentie">

                </div>';
            }
        ?>
        
    </div>
</body>
</html>