<html>

<head>
	<title>Impostazioni</title>
	<link rel="stylesheet" href="css/css.css" type="text/css">
	<link rel="shortcut icon" href="Immagini/favicon.png">


	<?php // $impostaStile->getstyle(); 
	?>
	</head>

	<body>
		<?php include 'metodi.php';
		$impostaStile = new metodi();
		$impostaStile->creasessione();

		?>

		<center>
			<?php
			if ($impostaStile->controllo()) {

				setcookie('Accesso', 'Online', time() + (600)); // Imposto un cookie che mi mantiene loggato per 10 minuti
				echo "<h1>Benvenuto Federico</h1>";
				echo "<h1>Ecco qui tutti i tuoi vinili</h1>";
				
				echo "<p>Cosa vuoi fare adesso? </p> <br>";
				echo "<a href='addPost.php'><button>Inserisci un disco</button></a> <br>";
				echo "<a href='deletePost.php'><button>Rimuovi un disco</button></a> <br><br><br>";

				
				require 'db.php';
				/*<?php require 'db.php';?> */
			} else if ($impostaStile->controlloBeppe()) {
				setcookie('Accesso', 'Online', time() + (600)); // Imposto un cookie che mi mantiene loggato per 10 minuti
				echo "<h1>Benvenuto Giuseppe</h1>";
				echo "<h1>Ecco qui tutti i tuoi vinili</h1>";
				
				echo "<p>Cosa vuoi fare adesso? </p> <br>";
				echo "<a href='addPost.php'><button>Inserisci un disco</button></a> <br>";
				echo "<a href='deletePost.php'><button>Rimuovi un disco</button></a> <br><br><br>";

				
				require 'dbBeppe.php';

			}
			
			
			
			else {
				$impostaStile->errore();
			}
			?>

		</center>
<br><br>
	
	</body>
	<?php $impostaStile->footer(); ?>

</html>