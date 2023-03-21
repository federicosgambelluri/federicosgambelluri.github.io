
<html>

<head>
    <title> AddLP </title>

    <link rel="shortcut icon" href="Immagini/favicon.png">
    <link rel="stylesheet" href="css/css.css" type="text/css">

   
    </head>

    <body>

    <?php  
require 'metodi.php';
$impostaStile = new metodi();


?>
        <center>
            <h1>Blog di Federico Sgambelluri</h1>


            <!--Mettere il font nero 
           
            <label for="N"><p style=" color:black">Inserisci il numero del post</label> <br><br>
            <input type="number" name="N" id="N" placeholder="Inserisci il numero del post" ><br><br> -->
            <form action='addPost2.php' method='post'>
                
                <label for="codice">Inserisci il Codice</label><br>
                <input type="text" name="codice" id="codice" placeholder="Codice Disco"> </input> <br><br>
                <label for="titolo">Inserisci il Titolo</label><br>
                <input type="text" name="titolo" id="titolo" placeholder="Titolo"> </input> <br><br>
                <label for="artista">Inserisci l'artista</label><br>
                <input type="text" name="artista" id="artista" placeholder="Artista - Gruppo"> </input> <br><br>
                <label for="anno">Inserisci l'anno di pubblicazione</label><br>
                <input type="text" name="anno" id="anno" placeholder="Anno Pubblicazione"> </input> <br><br>
                <label for="genere">Inserisci il Genere</label><br>
                <input type="text" name="genere" id="genere" placeholder="Genere"> </input> <br><br>
                <label for="pollici">Inserisci la grandezza</label><br>
                <input type="radio" id="pollici" name="pollici" value="12">
                <label for="css">12</label>
                <input type="radio" id="pollici" name="pollici" value="10">
                 <label for="css">10</label>
                 <input type="radio" id="pollici" name="pollici" value="7">
                 <label for="css">7</label>
<br><br>
                 <label for="pollici">Inserisci gli RPM</label><br>
                <input type="radio" id="rpm" name="rpm" value="33">
                <label for="css">33</label>
                <input type="radio" id="rpm" name="rpm" value="78">
                 <label for="css">78</label>
                 <input type="radio" id="rpm" name="rpm" value="45">
                 <label for="css">45</label>
                 <br><br>

<!--
                <label for="pollici">Inserisci la grandezza</label><br>
                <input type="text" name="pollici" id="pollici" placeholder="Dimensione in Pollici"> </input> <br><br>


                <label for="rpm">Inserisci RPM</label><br>
                <input type="text" name="rpm" id="rpm" placeholder="RPM"> </input> <br><br>

-->
                <label for="paese">Inserisci il paese</label><br>
                <input type="text" name="paese" id="paese" placeholder="Paese"> </input> <br><br>
                <label for="prezzo">Inserisci il Prezzo</label><br>
                <input type="text" name="prezzo" id="prezzo" placeholder="Prezzo"> </input> <br><br>
                <label for="casa">Inserisci la Casa Discografica</label><br>
                <input type="text" name="casa" id="casa" placeholder="Label"> </input> <br><br>

                <button type="submit">Inserisci</button>
            </form>
            <br><br>
        </center>



      
    </body>
    <?php $impostaStile->footer(); ?>

</html>