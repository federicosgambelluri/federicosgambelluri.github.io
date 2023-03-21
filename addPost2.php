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
			require 'db.php';

			$message = '';
			//echo var_dump($_POST);
			if (isset($_POST['codice']) && isset($_POST['titolo']) && isset($_POST['artista'])&& isset($_POST['anno'])&& isset($_POST['genere'])&& isset($_POST['pollici'])&& isset($_POST['rpm'])&& isset($_POST['paese'])&& isset($_POST['prezzo'])&& isset($_POST['casa'])) {
				$codice = $_POST['codice'];
				$titolo = $_POST['titolo'];
				$artista = $_POST['artista'];
				$anno = $_POST['anno'];
				$genere = $_POST['genere'];
				$pollici = $_POST['pollici'];
				$rpm = $_POST['rpm'];
				$paese = $_POST['paese'];
				$prezzo = $_POST['prezzo'];
				$casa = $_POST['casa'];

			
				$sql = 'INSERT INTO Federico(Codice, Titolo, ArtistaGruppo, AnnoPubblicazione,Genere,Pollici,RPM,Paese,Prezzo,CasaDiscografica) VALUES(:codice, :titolo, :artista, :anno, :genere, :pollici, :rpm, :paese, :prezzo, :casa)';
				try {
					$stmt = $conn->prepare($sql);
					$stmt->bindParam(':codice', $codice);
					$stmt->bindParam(':titolo', $titolo);
					$stmt->bindParam(':artista', $artista);
					$stmt->bindParam(':anno', $anno);
					$stmt->bindParam(':genere', $genere);
					$stmt->bindParam(':pollici', $pollici);
					$stmt->bindParam(':rpm', $rpm);
					$stmt->bindParam(':paese', $paese);
					$stmt->bindParam(':prezzo', $prezzo);
					$stmt->bindParam(':casa', $casa);
				
				

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