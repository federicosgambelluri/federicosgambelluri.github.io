<?php


$servername   = "localhost";
  //$username     = "studente";
 // $password     = "studente";
  $username     = "root";
  
  //$databasename = "progetto";
   $databasename = "LP-library";
  
  try {
     // $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
      $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username);

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connessione al database $databasename avvenuta con successo ";

      $stmt = $conn->prepare("SELECT * from Federico ");
           $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 
echo "<div id='customers'>";

    echo "<table  style='border: solid 1px black;'>";
    echo "<tr><th>Codice</th><th>Titolo</th><th>Artista-Gruppo</th><th>Anno di pubblicazione</th><th>Genere</th><th>Pollici</th><th>RPM</th><th>Paese</th><th>Casa Discografica</th><th>Prezzo</th></tr>"; //colonne della tabella
    foreach($stmt->fetchAll() as $riga){
      echo "<tr>";
echo  "<td style='width:150px;border:1px solid black;'>".$riga['Codice']."<//td>";
echo  "<td style='width:150px;border:1px solid black;'>".$riga['Titolo']."<//td>";
/*echo  "<td style='width:150px;border:1px solid black;'><img src='".$riga['foto']."' height='300' width='300'> <//td>";
Tenere per immagine copertina
*/echo  "<td style='width:150px;border:1px solid black;'>".$riga['ArtistaGruppo']."<//td>";
echo  "<td style='width:150px;border:1px solid black;'>".$riga['AnnoPubblicazione']."<//td>";
echo  "<td style='width:150px;border:1px solid black;'>".$riga['Genere']."<//td>";
echo  "<td style='width:150px;border:1px solid black;'>".$riga['RPM']."<//td>";
echo  "<td style='width:150px;border:1px solid black;'>".$riga['Pollici']."<//td>";
echo  "<td style='width:150px;border:1px solid black;'>".$riga['Paese']."<//td>";
echo  "<td style='width:150px;border:1px solid black;'>".$riga['CasaDiscografica']."<//td>";
echo  "<td style='width:150px;border:1px solid black;'>".$riga['Prezzo']."<//td>";


  /*
      foreach($riga as $campo){
   
        if($campo='foto'){
            echo "<img src='$valore' height='300' width='300'> ";
          } else 
        echo "<td style='width:150px;border:1px solid black;'>".$campo."<//td>";
      }
      */
      echo "<tr>";
    }


echo "</table>";
echo "</div>";
   }
   
  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }


    