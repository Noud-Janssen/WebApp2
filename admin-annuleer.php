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
    <link rel="stylesheet" href="css/noud.css">
</head>

<body>
    <?php
    require_once('php/config.php');
    require_once('php/nav.php');
    $resultset = $conn->query("SELECT * FROM accounts");
    $resultset = $conn->prepare("DELETE FROM boekingen WHERE boekid = ?");
    $resultset->execute([$_GET['id']]);
    echo'
     <div class="annuleer-bg-img">
    </div>
    <div class="annuleer-container">
            <h1 id="annuleer-titel">Reis succesvol geannuleerd. en klik <a id="annuleer-back-to-mijn-reizen-link" href="index.php">hier</a> om weer terug te gaan naar de home page</h1>
        </div>'
    ?>
   
</body>

</html>