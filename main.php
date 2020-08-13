<?php
    session_start();

    if(!isset($_SESSION['loggedin']) == true)
    {
        header('Location: index.php');
        exit();
    }

?>


<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>Start</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="css/fontello.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato&display=swap&subset=latin-ext" rel="stylesheet">
        <link rel="icon" href="logo.png">
    </head>
    <body>
        <div id="container">
            <div class="rectangle">
                <div id="logo"><?php echo "Witaj ".$_SESSION['user']."!"; ?></div>
                <div id="logout" style="float: right; font-family: 'Josefin Sans', sans-serif;">
                   <a href="logout.php" style="color: white; text-decoration: none; ">Wyloguj</a>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="square">
                <div class="tile1"><a href="#" class="tilelink" target="_blank"><i class="demo-icon "></i></a></div>
                <div class="tile1"><a href="#" class="tilelink" target="_blank"><i class="demo-icon "></i></a></div>
                <div style="clear: both;"></div>
                <div class="tile2"><a href="#" class="tilelink" target="_blank"><i class="demo-icon "></i></a></div>
                <div class="tile3"><a href="#" class="tilelink" target="_blank"><i class="demo-icon "></i></a></div>
                <div style="clear: both;"></div>
                <div class="tile4">
                    <i class="demo-icon "></i> <br>
                    
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="square">
                <div class="tile5">
                    <?php 
                        if($_SESSION['userid'] == 1)
                        {
                            echo '<iframe src="https://open.spotify.com/embed/playlist/4B0PPqBcxNGeKBbkmxE2mn" width="480" height="304" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>';
                        }
                    
                    
                    
                    ?> 
                </div>
                <div class="yt"><a href="#" class="tilelink" target="_blank"><i class="demo-icon "></i></a></div>
                <div class="insta"><a href="#" class="tilelink" target="_blank"><i class="demo-icon "></i></a></div>
                <div style="clear: both;"></div>
            </div>
            <div style="clear: both;">
            </div>
            <div class="rectangle">
                2019-2020 &copy; Uno Martino - Strona główna
            </div>
        </div>
    </body>
</html>