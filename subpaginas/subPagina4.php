<?php 
	if (isset($_POST['verstuur'])) {
		$ontvanger = "PV143938@leerling.pvanhorne.nl";

		$voorNaam = $_POST['voorNaam'];

		$achterNaam = $_POST['achterNaam'];

		$geslacht = $_POST['geslacht'];

		$onderwerp = "Reactie formulier informatica site";

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$email = $_POST['email'];

		$bericht = wordwrap($_POST['bericht'],70);

		$message = '<html>';
		$message .= '<head>';
		$message .= '<style>';
		$message .= 'hr {';
		$message .= 'border: 3px solid #05386B;';
		$message .= 'border-radius: 2px;';
		$message .= 'margin: 5px 0px;';
		$message .= 'background-color: #05386B;';
		$message .= '}';
		$message .= '</style>';
		$message .= '</head>';
		$message .= '<body>';
		$message .= '<h1>Reactie informatica site</h1>';
		$message .= '<hr>';
		$message .= '<p><b>Naam: </b>' . $voorNaam . ' ' . $achterNaam . '</p>';
		$message .= '<p><b>Geslacht: </b>' . $geslacht . '</p>';
		$message .= "<p><b>Email: </b> <a href='mailto:" . $email . "'>" . $email . "</a></p>";
		$message .= '<hr>';
		$message .= '<p><b>Bericht:</b></p>';
		$message .= '<p>' . $bericht . '</p>';
		$message .= '</body>';
		$message .= '</html>';

		mail($ontvanger,$onderwerp,$message,$headers);

		echo '<script>alert("Verzonden!")</script>';
	}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
	<title>Formulier</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="/~midas.n/fotos/standaardIcon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style/style.css">
	<script src="../script/script.js"></script>
</head>

<body>
	<h1>Formulier</h1>

	<p>Laat hier achter wat u over de website denkt en wat er mogelijk aan verbeterd kan worden. Of stuur een <a href="mailto:pv143938@leerling.pvanhorne.nl?subject=Response Website">mail</a>.</p>

	<form action="" method="POST">
		<ul class="form">
			<li>
				<label>Naam</label>
				<input type="text" name="voorNaam" class="field-long" placeholder="Voor" required> 
				<input type="text" name="achterNaam" class="field-long" placeholder="Achter" required>
			</li>
			<li>
				<label>Email</label>
				<input type="email" name="email" class="field-long" placeholder="voorbeeld@mail.nl" required>
			</li>
			<li>
				<label>Geslacht</label>
				<select name="geslacht" class="field-long" required>
					<option value="" disabled selected></option>
					<option value="Man">Man</option>
					<option value="Vrouw">Vrouw</option>
					<option value="Overige">Overige</option>
				</select>
			</li>
			<li>
				<label>Bericht</label>
				<textarea name="bericht" id="field5" class="field-textarea" required></textarea>
			</li>
			<li>
				<input type="submit" name="verstuur" value="Verstuur">
			</li>
		</ul>
	</form>

	<hr>

	<footer>
        <div>
            <p>not copyright © 2020 Midas Nies</p>
        </div>
    </footer>
</body>

</html>