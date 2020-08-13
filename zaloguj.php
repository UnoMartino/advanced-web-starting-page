<?php
    session_start();

    if(!isset($_POST['login']) || (!isset($_POST['password'])))
    {
        header("Location: index.php");
        exit();
    }

    
    require_once "dbconn.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if($polaczenie->connect_errno!=0)
    {
        echo "ERROR: ".$polaczenie->connect_errno." Opis: ".$polaczenie->connect_error;
    }
    else
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $password = htmlentities($password, ENT_QUOTES, "UTF-8");


        if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM users WHERE user='%s' OR email='%s' AND pwd='%s'", 
        mysqli_real_escape_string($polaczenie, $login),
        mysqli_real_escape_string($polaczenie, $login),
        mysqli_real_escape_string($polaczenie, $password))))
        {
             $ilu_userow = $rezultat->num_rows;
             if($ilu_userow>0)
             {
                $wiersz = $rezultat->fetch_assoc();
                $_SESSION['user'] = $wiersz['user'];
                $_SESSION['loggedin'] = true;
                $_SESSION['userid'] = $wiersz['id'];
                unset($_SESSION['blad']);
                $rezultat->close();
                header('Location: main.php');
                
                

             }
             else
             {
                
                $_SESSION['blad'] = '<div style="color:red; margin-top:10px;">Nieprawodłowy login lub hasło!</div>';
                header('Location: index.php');

             }

        }



        $polaczenie->close();
    }
   
?>