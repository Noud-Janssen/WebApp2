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
</head>

<body>
    <?php
    require_once('php/config.php');
    require_once('php/nav.php');
    if (isset($POST['submit_button'])) {
        $conn->query("INSERT INTO `contact`(`email`, `onderwerp`, `text`) VALUES (" . $_POST['email'] . "," . $_POST['onderwerp'] . "," . $_POST['text'] . ")");
    }

    ?>
<<<<<<< Updated upstream
    <div class="contact-container">
        <form method="post" action="feedback-contact.php">
            <h3>E-Mail:</h3><input type="text" name="Naam">
            <h3>Onderwerp:</h3><input type="text" name="omschrijving">
            <h3>Text:</h3><textarea name="" id="" cols="90" rows="20"></textarea>
            <button type="submit" name="submit_button">submit</button>
        </form>
=======
    <div class="contact-bg-img">
        <div class="contact-container">
            <form method="post" action="feedback-contact.php">
                <h3>E-Mail:</h3><input type="text" name="email">
                <h3>Onderwerp:</h3><input type="text" name="onderwerp">
                <h3>Text:</h3><textarea name="text" id="" cols="90" rows="20"></textarea>
                <button type="submit" name="submit_button">submit</button>
            </form>
        </div>
>>>>>>> Stashed changes
    </div>
</body>

</html>