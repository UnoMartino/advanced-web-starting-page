<?php
    session_start();

    if((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin'] == true))
    {
        header('Location: main.php');
        exit();
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <link rel="stylesheet" href="index.css" type="text/css" />

    </head>
    <body>
        <div id="loginform">
            <form action="zaloguj.php" method="post">
                Login lub email: <br/> <input type="text" name="login" /> <br/>
                Hasło: <br/> <input type="password" name="password"/> <br/> <br/>
                <div id="button" ><input type="submit" value="Zaloguj się"/></div>
            </form>
            <?php 
                if(isset($_SESSION['blad']))
                echo $_SESSION['blad']; 
            
            
            
            ?>
        </div>
    </body>
</html>