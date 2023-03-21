<?php session_start();



//$_SESSION['pass'] = 0;      //inserisco quello che c'è nel form nella session 
//$_SESSION['username'] = 0;  //inserisco quello che c'è nel form nella session 

//print_r($_SESSION);
$impostaStile = new metodi();
if ($_SESSION['loggato'] == false) {
    $impostaStile->header();
} else {
    $impostaStile->finalHeader();
}

class metodi
{

    function creasessione() // Sessioni 
    {
        if (isset($_POST['pass']) && isset($_POST['username']))    //è creata la session? 
        {
            $_SESSION['pass'] = $_POST['pass'];      //inserisco quello che c'è nel form nella session 
            $_SESSION['username'] = $_POST['username'];  //inserisco quello che c'è nel form nella session 

        } else {
            $_SESSION['loggato'] = false;  //non è stata creata la session
        }
    }

    function controllo() //Controllo credenziali
    {
        if (isset($_SESSION)) //Esiste la sessione? 
        {
            if ( ($_SESSION['pass'] == "Flibrary123" && $_SESSION['username'] == "federico.sgambelluri")) // Controllo le credenziali? 
            {
                $_SESSION['loggato'] = true;  //
                return true;
            } else {
                $_SESSION['loggato'] = false;
                return false;
            }
        }

        /*
        if (isset($_COOKIE)) // Ci sono i cookie?  - Ho preso i cookie da setCookies.php
        {
            if ($_COOKIE['Accesso'] == 'Online') // Dura 10 minuti, perchè e a cosa serve? 
            {
                $_SESSION['loggato'] = true;
                return true;
            } else {
                $_SESSION['loggato'] = false;
                return false;
            }
        }
        */
    }


    function controlloBeppe() //Controllo credenziali
    {
        if (isset($_SESSION)) //Esiste la sessione? 
        {
            if (($_SESSION['pass'] == "Glibrary123" && $_SESSION['username'] == "giuseppe.sgambelluri") ) // Controllo le credenziali? 
            {
                $_SESSION['loggato'] = true;  //
                return true;
            } else {
                $_SESSION['loggato'] = false;
                return false;
            }
        }

        /*
        if (isset($_COOKIE)) // Ci sono i cookie?  - Ho preso i cookie da setCookies.php
        {
            if ($_COOKIE['Accesso'] == 'Online') // Dura 10 minuti, perchè e a cosa serve? 
            {
                $_SESSION['loggato'] = true;
                return true;
            } else {
                $_SESSION['loggato'] = false;
                return false;
            }
        }
        */
    }

    function errore() // Se si sbagliano le credenziali 
    {
        if (isset($_SESSION)) {
            if ($_SESSION['loggato'] == false) {
                echo "<h1>Hai sbagliato credenziali</h1>
                <p> Inserisci di nuovo username e password  <p>
                <form action='index.php'>
                    <input type='submit' value='Indietro'>
                </form>
                ";
            }
        }
    }

    function backHome() // Torna alla home
    {
        echo "<form action='index.php'>
                    <input type='submit' value='Torna alla Home'>
                </form>";

        if (isset($_SESSION)) //Esiste la sessione? 
        {
            $_SESSION['loggato'] == false;
        } else {
        }
    }

    function logout()
    {
        echo "<form action='index.php'>
                    <input type='submit' value='Esci'>
                </form>
                ";
        $_SESSION['loggato'] = false;
        return false;
    }

    function header()
    {

        echo '<div class="topnav">';
        echo '<a class="active" href="index.php">Home</a>';
        echo '<a href="presentazione.php">Chi sono io</a>';
        echo '<a href="login.php">Login</a>';

        echo '</div>';
    }


    function finalHeader()
    {
        echo '<div class="topnav">';
        echo '<a class="active" href="index.php">Home</a>';
        echo '<a href="presentazione.php">Chi sono io</a>';
        echo '<a href="index.php">Logout</a>';
        echo '</div>';
        $_SESSION['loggato'] = false;
    }

    function footer()
    {
        echo '<footer>';
        echo '<div class="topnav">';
        echo ' <a href="">Tutti i diritti riservati - Federico Sgambelluri ©</a>';
        echo   '</div>';
        echo '</footer>';
    }



}

/*
if(isset($_POST['Esci'])){
    $_SESSION['loggato'] = false;
    print_r('Ciao');
    print_r($_SESSION);
  header('location: index.php');
}*/