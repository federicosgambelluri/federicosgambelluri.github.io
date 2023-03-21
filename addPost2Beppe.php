<html>

<head>
	<title>Impostazioni</title>
	<link rel="stylesheet" href="css/css.css" type="text/css">
	<link rel="shortcut icon" href="Immagini/favicon.png">



	</head>

	<body>
		<center>
			<?php include 'metodi.php';
			$impostaStile = new metodi();
			require 'dbBeppe.php';

			$message = '';
			//echo var_dump($_POST);
			if (isset($_POST['codice']) && isset($_POST['titolo']) && isset($_POST['artista'])&& isset($_POST['anno'])&& isset($_POST['genere'])&& isset($_POST['dimensioni'])&& isset($_POST['locazione'])&& isset($_POST['paese'])&& isset($_POST['prezzo'])&& isset($_POST['casa'])) {
				$codice = $_POST['codice'];
				$titolo = $_POST['titolo'];
				$artista = $_POST['artista'];
				$anno = $_POST['anno'];
				$genere = $_POST['genere'];
				$dimensioni = $_POST['dimensioni'];
				$locazione = $_POST['locazione'];
				$paese = $_POST['paese'];
				$prezzo = $_POST['prezzo'];
				$casa = $_POST['casa'];

			
				$sql = 'INSERT INTO Giuseppe(Codice, Titolo, ArtistaGruppo, AnnoPubblicazione,Genere,Dimensioni,Paese,Prezzo,CasaDiscografica,Locazione) VALUES(:codice, :titolo, :artista, :anno, :genere, :dimensioni, :paese, :prezzo, :casa, :locazione)';
				try {
					$stmt = $conn->prepare($sql);
					$stmt->bindParam(':codice', $codice);
					$stmt->bindParam(':titolo', $titolo);
					$stmt->bindParam(':artista', $artista);
					$stmt->bindParam(':anno', $anno);
					$stmt->bindParam(':genere', $genere);
					$stmt->bindParam(':dimensioni', $dimensioni);
					$stmt->bindParam(':paese', $paese);
					$stmt->bindParam(':prezzo', $prezzo);
					$stmt->bindParam(':casa', $casa);
                    $stmt->bindParam(':locazione', $locazione);
				
				

					if ($stmt->execute()) {
						$message = 'Post pubblicato correttamente';
						echo "<a href='index.php'><button>Torna alla Home per vedere il post</button></a>";
					} else {
						$message = 'Pubblicazione fallita';
					}
				} catch (PDOException $E) {
					$message = $E->getMessage();
					echo $message;
				}
			} else {
				echo "Non hai inserito i dati nel FORM";
			}



			?>

		</center>

	</body>
	<?php $impostaStile->footer(); ?>

</html>