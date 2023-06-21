<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boeken</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/noud.css">
    <link rel="stylesheet" href="css/floris.css">
</head>
<body>
    <?php
        require_once("php/config.php");
        require_once("php/nav.php");
 
        if (isset($_POST['recensie_posten'])) {
            $prepare = $conn->prepare("INSERT INTO recensies(recensie, reis_id, account_id, sterren) values(?,?,0,?)");
            $prepare->execute([$_SESSION['inlogid'],$_GET['id']]);
            header("location: index.php");
        }

        $resultset = $conn->prepare("SELECT * FROM reizen WHERE id = ?");
        $resultset->execute([$_GET['id']]);
        $result = $resultset->fetch();
        

    ?>
    <div class="reis-pagina-container">
        <h3>recensie maken voor voor: </h3>
        <?php echo "<p>".$result['land']." - ".$result['plaats']."</p>" ?>
        <br>
        <br>
        <h3>recensie: </h3>
        <textarea name="recensie" id="" cols="30" rows="10" maxlength="150"></textarea>
        <h3>aantal sterren (1-5): </h3>
        <form action="POST">
            <input class="admin-button-edit" type="number" min="1" max="5" value="recensie">
        </form>
        <br>
        <br>
        <h3>Naam recensie schrijver: </h3>
        <?php echo "<p>".$_SESSION['username']."</p>" ?>
        <br>
        <br>
        <form action="" method="POST">
            <input class="admin-button-edit" name="recensie_posten" type="submit" value="recensie">
        </form>
    </div>
</body>
</html>