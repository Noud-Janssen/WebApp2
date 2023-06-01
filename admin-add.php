<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
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

        if (isset($_POST['create'])) {
            $prepared = $conn->prepare("INSERT INTO `reizen`
                (
                    `land`,
                    `preis`,
                    `vertrekDatum`,
                    `terugkomstDatum`,
                    `isAdvert`,
                    `plaats`,
                    `beschrijving`,
                    `wc`,
                    `slaapkamers`,
                    `oppervlakte_woning`,
                    `handicap_vriendelijk`
                ) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                    
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
                $handicap
            ]);
        }

    ?>
    <form class="edit-container" method="post">
        <h2>Basis informatie</h2>
        <div class="label">Land</div>
        <input type="text" name="land" class="w50" id="" value="">
        <div class="label">Plaats</div>
        <input type="text" name="plaats" class="w50" id="" >
        <div class="label">Prijs</div>
        <input type="number" name="prijs" id="" min="50" >
        <div class="label">Beschrijving</div>
        <textarea name="beschrijving" id="" cols="30" rows="10"></textarea>
        <h2>Datums</h2>
        <div class="label">Vertrek datum</div>
        <input type="date" name="vertrekDatum" id="">
        <div class="label">Terugkomst datum</div>
        <input type="date" name="terugkomstDatum" id="">
        <h2>Voorzieningen</h2>
        <div class="label ">Aantal wc's</div>
        <input type="number" name="wc" id=""  max="10" min="0">
        <div class="label ">Aantal slaapkamers</div>
        <input type="number" name="slaapkamers" id=""  max="10" min="0">
        <div class="label ">Oppervlakte verblijf</div>
        <input type="number" name="oppervlakte" id=""  min="0">
        <div class="label">Handicap vriendelijk</div>
        <input type="checkbox" name="handicapvriendelijk" id="">
        <div class="label">Wifi</div>
        <input type="checkbox" name="wifi" id="">
        <h2>Admin instellingen</h2>
        <div class="label">Is advertentie</div>
        <input type="checkbox" name="isAdvert" id="" >
        <input type="submit" name="create" value="create">
    </form>
</body>

</html> 