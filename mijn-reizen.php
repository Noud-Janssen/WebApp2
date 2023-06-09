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
    <div class="admin-container">
        <?php 
        require('php/config.php');
        require_once('php/nav.php');
       
        $resultSet = $conn->query(
            "SELECT *
        FROM accounts
        INNER JOIN boekingen
        ON accounts.id = boekingen.account_id
        INNER JOIN reizen
        ON boekingen.reis_id = reizen.id
        WHERE accounts.id = " . $_SESSION['inlogid'] . ";"
        );
        while ($result = $resultSet->fetch()) {
            echo
            ' 
            <div class="mijn-reizen-reis-item">
            <div class="mijn-reizen-head-text">
                <h2 id="mijn-reizen-land-plaats-text">' . $result['land'] . ', ' . $result['plaats'] . '</h2>
            </div>
            <div class="mijn-reizen-button-wrapper">
                <div class="mijn-reizen-button-edit">
             

                <a class="mijn-reizen-annuleer-link" href="annuleer.php?id='.$result['boekid'].'">Annuleren</a></div>
            </div>
        </div>
           ';
        }
        ?>
        <!-- <a id="mijn-reizen-edit-button" href="-edit.php?id=' . $result['id'] . '">annuleren</a> -->
    </div>
</body>

</html>