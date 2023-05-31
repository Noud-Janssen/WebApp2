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
    <div class="admin-container">
        <?php
        require_once('php/nav.php');
        require('php/config.php');
        $resultSet = $conn->query("SELECT * FROM reizen");
        while ($result = $resultSet->fetch()) {
            echo
            ' 

           ';
        }
        ?>
        <div class="admin-reis-item">
            <div class="admin-head-text">
                <h2 id="admin-land-plaats-text">' . $result['land'] . ', ' . $result['plaats'] . '</h2>
            </div>
            <div class="admin-button-wrapper">
                <div class="admin-button-edit">edit</div>
                <div class="admin-button-boekingen">delete</div>
            </div>
        </div>
    </div>
</body>

</html> 
           <!-- <div class="admin-reis-item">
            <div class="admin-head-text">
                <h2 id="admin-land-plaats-text">' . $result['land'] . ', ' . $result['plaats'] . '</h2>
            </div>
            <div class="admin-button-wrapper">
                <div class="admin-button-delete">a</div>
                <div class="admin-button-edit">a</div>
                <div class="admin-button-boekingen">a</div>
            </div>
        </div> -->