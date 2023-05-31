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

        $resultset = $conn->prepare("SELECT * FROM reizen WHERE id = ?");
        $resultset->execute([$_GET['id']]);
        $result = $resultset->fetch();

    ?>
    <form class="edit-container" method="post">
        <h2>Basis informatie</h2>
        <div class="label">Land</div>
        <input type="text" name="land" class="w50" id="" <?php echo 'value="'.$result['land'].'"'?>>
        <div class="label">Plaats</div>
        <input type="text" name="plaats" class="w50" id="" <?php echo 'value="'.$result['plaats'].'"'?>>
        <div class="label">Prijs</div>
        <input type="number" name="prijs" id="" min="50" <?php echo 'value="'.$result['preis'].'"'?>>
        <div class="label">Beschrijving</div>
        <textarea name="beschrijving" id="" cols="30" rows="10"><?php echo $result['beschrijving']?></textarea>
        <h2>Datums</h2>
        <div class="label">Vertrek datum</div>
        <input type="date" name="vertrekdatum" id="" <?php echo 'value="'.$result['vertrekDatum'].'"'?>>
        <div class="label">Terugkomst datum</div>
        <input type="date" name="terugkomstdatum" id="" <?php echo 'value="'.$result['terugkomstDatum'].'"'?>>
        <h2>Voorzieningen</h2>
        <div class="label ">Aantal wc's</div>
        <input type="number" name="wc" id="" value="1" max="10" min="0">
        <div class="label ">Aantal slaapkamers</div>
        <input type="number" name="slaapkamers" id="" value="1" max="10" min="0">
        <div class="label ">Oppervlakte verblijf</div>
        <input type="number" name="oppervlakte" id="" value="5" min="0">
        <div class="label">Handicap vriendelijk</div>
        <input type="checkbox" name="handicapvriendelijk" id="">
        <div class="label">Wifi</div>
        <input type="checkbox" name="wifi" id="">
        <input type="submit" value="update">
        <input type="submit" value="delete">
    </form>
</body>

</html> 