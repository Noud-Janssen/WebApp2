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

        echo "<script>alert('test')</script>";
        $conn->query("INSERT INTO `contact`(`email`, `onderwerp`, `text`) VALUES ('" . $_POST['email'] . "','" . $_POST['onderwerp'] . "','" . $_POST['text'] . "')");


    ?>
    <div class="feedback-contact-bg-img">
        <div class="feedback-contact-container">
            <h1 id="feedback-contact-titel">E-Mail verstuurd</h1>
            <p>Wij gaan zo snel mogelijk uw E-Mail lezen en een reactie terug sturen.</p>
        </div>
    </div>
</body>

</html>