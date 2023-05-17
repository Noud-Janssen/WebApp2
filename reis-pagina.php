<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,200;0,400;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/floris.css">
</head>

<body>
    <?php
    require_once('php/nav.php')
    ?>
    <div class="reis-pagina-container">
        <div class="reis-foto-container"></div>
        <div class="reis-info">
            <h1 id="naam-plek">Nederland, Nijmegen.</h1>
            <h2>Reis Planning: 29 feb tot 32 maart</h2>
            <ul>
                <h2 id="head-lijst">Informatie.</h2>
                <li>wc's: 3.</li>
                <li>slaapkamers: 3.</li>
                <li>handikap vriendelijk: is het helaas niet.</li>
            </ul>
            <ul>
                <h2 id="head-lijst">Leuke dingen in de buurt.</h2>
                <li>Fiets routen.</li>
                <li>Wandelen.</li>
                <li>Naar het Centrum.</li>
                <li>Voor een bus of trein springen.</li>
            </ul>
        </div>
        <div class="reis-recensies">
            <ul>
                <h2 id="head-lijst">Recensies.</h2>
                <li>★★★★: Leuke activiteiten om te doen en leuke plek waar je overnacht.</li>
                <li>★★: Niks leuks aan, maar voor een bus springen is wel een beetje leuk teminste.</li>
                <li>★★★: Prima maar niks bijzonders. Ook best veel lawaai.</li>
            </ul>
        </div>
    </div>
</body>

</html>