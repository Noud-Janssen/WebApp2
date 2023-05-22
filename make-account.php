<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/noud.css">
</head>
<body>
    <?php
        require_once('php/config.php');
        require_once('php/nav.php');

        if (isset($_POST['create'])) {
            $prepared = $conn->prepare("INSERT INTO accounts(email,password) VALUES(?,?)");
            $prepared->execute([$_POST['email'],$_POST['password']]);
        }
    ?>
    <form action="" method="post" id="loginForm">
        <h2>E-mail</h2>
        <input type="text" name="email" id="" required>
        <h2>Wachtwoord</h2>
        <input type="password" name="password" id="" required>
        <h2>Herhaal wachtwoord</h2>
        <input type="password" name="passwordRepeat" id="" required>
        <h2></h2>
        <input type="submit" name="create" value="create" style="margin-bottom: 10%">
    </form>
</body>
</html>