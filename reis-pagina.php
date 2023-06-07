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
    require('php/config.php');
    require_once('php/nav.php');
    $resultSet = $conn->prepare("SELECT * FROM reizen WHERE id = ?");
    $resultSet->execute([$_GET['id']]);
    $result = $resultSet->fetch();
    if($result['handicap_vriendelijk']==0){
        $handicapresult="nee";
    }else{
        $handicapresult="ja";
    }
    echo '
    <div class="reis-pagina-container">
    <div class="reis-foto-container"></div>
    <div class="reis-info">
    <div class="naam-prijs-balk">
    <h1 id="naam-plek">' . $result['land'] . ', ' . $result['plaats'] . '</h1>
    <h1 id="prijs">€' . $result['preis'] . '</h1>
</div>
        <h2>Reis Planning: ' . $result['vertrekDatum'] . ' tot ' . $result['terugkomstDatum'] . '</h2>
        <ul>
            <h2 id="head-lijst">Informatie.</h2>
            <li>wc: ' . $result['wc'] . '.</li>
            <li>slaapkamers: ' . $result['slaapkamers'] . '.</li>
            <li>handikap vriendelijk: ' . $handicapresult . '.</li>
            <li>oppervlakte woning: ' . $result['oppervlakte_woning'] . 'm².</li>
        </ul>
        <ul>
            <h2 id="head-lijst">Beschrijving.</h2>
            <li>' . $result['beschrijving'] . '</li>
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
    <a class="admin-button-edit" href="boeken.php?id='.$result['id'].'">Boek nu!</a>
    </div>
    ';
    ?>
        



</body>

</html>