
<html>

<head>
    <title> deleteLP </title>
    <link rel="stylesheet" href="css/css.css" type="text/css">
    <link rel="shortcut icon" href="Immagini/favicon.png">
   
   
</head>

<body>
<?php  
require 'metodi.php';
$impostaStile = new metodi();
?>

        <h1>Libreria LP di Giuseppe</h1>
        <p>Elimina una voce </p>

        
            <form method='post'> 
            <label for="N">Inserisci il titolo del disco</label> <br>
            <input type="number" name="N" id="N" ><br><br>
                          
                <button type="submit">Rimuovi</button>
            </form>  
                
       
 <br><br>

 <?php 
	require 'dbBeppe.php';

	$message = '';
	if (isset ($_POST['N'])) {
		$N = $_POST['N'];
		$sql = 'DELETE FROM Giuseppe WHERE Titolo=(:N)';
		try {
			$statement = $conn->prepare($sql);
			$statement->bindParam(':N', $N);
		
			if ($statement->execute()) {
				$message = 'Post eliminato correttamente';
                echo "<a href='index.php'><button>Torna alla Home per vedere il post</button></a>";
			} else {
				$message = 'Cancellazione fallita';
			}
		} catch (PDOException $E) {
			$message = $E->getMessage();
		}
	} else {
        //echo "Non hai inserito i dati nel FORM";
    }
?>


</body>
<?php $impostaStile->footer(); ?>

</html>




