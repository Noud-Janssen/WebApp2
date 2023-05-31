<nav>
    <h1>
            
    </h1>
    <div class="link-row">
        <a href="index.php">Home</a>
        <a href="over-ons.php">Over ons</a>
        <a href="contact.php">Contact</a>
        <a href="voorwaarden.php">Voorwaarden</a>
        <?php 
            if (isset($_POST['logout'])) {
                session_destroy();
                header('index.php');
                echo "<a href='login.php'>Login</a>";
            } else if (isset($_SESSION['inlogid'])) {
                echo "<div id='accountButton'>Account
                <div id='accountOptions'>
                    <h3>Account</h3>
                    <a href='mijn-reizen.php'>Mijn Boekingen</a>
                    <a href='mijn-account.php'>Mijn account</a>
                    <form method='post'>
                    <input type='submit' name='logout' value='Logout'>
                    </form>
                    
                </div>
                </div>";
            } else {
                echo "<a href='login.php'>Login</a>";
            }
        ?>
    </div>
    
    
</nav>