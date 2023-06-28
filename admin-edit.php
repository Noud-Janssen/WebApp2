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
        
        if($_SESSION['isAdmin'] != 1) {
            header("location: index.php");
        }

        if (isset($_POST['update'])) {
            $prepared = $conn->prepare("UPDATE `reizen` SET 
                    `land` = ?,
                    `preis` = ?,
                    `vertrekDatum` = ?,
                    `terugkomstDatum` = ?,
                    `isAdvert` = ?,
                    `plaats` = ?,
                    `beschrijving`= ?,
                    `wc`= ?,
                    `slaapkamers`= ?,
                    `oppervlakte_woning`= ?,
                    `handicap_vriendelijk`= ?
                    WHERE 
                    id = ?");
            if (isset($_POST['isAdvert'])) {
                $isAdvert = 1;
            } else {
                $isAdvert = 0;
            }
            if (isset($_POST['handicapvriendelijk'])) {
                $handicap = 1;
            } else {
                $handicap = 0;
            }

            $prepared->execute([
                $_POST['land'],
                $_POST['prijs'],
                $_POST['vertrekDatum'],
                $_POST['terugkomstDatum'],
                $isAdvert,
                $_POST['plaats'],
                $_POST['beschrijving'],
                $_POST['wc'],
                $_POST['slaapkamers'],
                $_POST['oppervlakte'],
                $handicap,
                $_GET['id']
            ]);
        }

        if (isset($_POST['delete'])) {
            $prepared = $conn->prepare("DELETE FROM reizen WHERE id = ?");
            $prepared->execute([$_GET['id']]);
            header("Location: admin-panel.php");
        }

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
        <input type="date" name="vertrekDatum" id="" <?php echo 'value="'.$result['vertrekDatum'].'"'?>>
        <div class="label">Terugkomst datum</div>
        <input type="date" name="terugkomstDatum" id="" <?php echo 'value="'.$result['terugkomstDatum'].'"'?>>
        <h2>Voorzieningen</h2>
        <div class="label ">Aantal wc's</div>
        <input type="number" name="wc" id="" <?php echo 'value="'.$result['wc'].'"'?> max="10" min="0">
        <div class="label ">Aantal slaapkamers</div>
        <input type="number" name="slaapkamers" id="" <?php echo 'value="'.$result['slaapkamers'].'"'?> max="10" min="0">
        <div class="label ">Oppervlakte verblijf</div>
        <input type="number" name="oppervlakte" id="" <?php echo 'value="'.$result['oppervlakte_woning'].'"'?> min="0">
        <div class="label">Handicap vriendelijk</div>
        <input type="checkbox" name="handicapvriendelijk" id=""<?php if ($result['handicap_vriendelijk']) {echo "checked";} ?>>
        <div class="label">Wifi</div>
        <input type="checkbox" name="wifi" id="">
        <h2>Admin instellingen</h2>
        <div class="label">Is advertentie</div>
        <input type="checkbox" name="isAdvert" id="" <?php if ($result['isAdvert']) {echo "checked";} ?>>
        <input type="submit" name="update" value="update">
        <input type="submit" name="delete" value="delete">
    </form>
</body>

</html> 