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
    require_once('php/nav.php')
    ?>
    <div class="contact-bg-img">
        <div class="contact-container">
            <form method="post" action="feedback-contact.php">
                <h3>E-Mail:</h3><input type="text" name="Naam">
                <h3>Onderwerp:</h3><input type="text" name="omschrijving">
                <h3>Text:</h3><textarea name="" id="" cols="90" rows="20"></textarea>
                <button type="submit" name="submit_button">submit</button>
            </form>
        </div>
    </div>
</body>

</html>