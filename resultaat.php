<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/noud.css">
</head>
<body id="resultaat-pagina">
<?php
    require_once("php/config.php");
    require_once("php/nav.php");
    require_once("php/search.php");
?>
<div class="advertentie-wrapper">


<?php
    $resultSet = $conn->prepare("SELECT * FROM reizen WHERE land LIKE ?");
    $resultSet->execute(['%'.$_POST['land'].'%']);

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
                    <a href="link">Meer Informatie</a>

                </div>';
    }
?>  

</div>
</body>
</html>