<?php 
	if (isset($_POST['verstuur'])) {
		$cookie_name = "formulierIngevuld";
		if(!isset($_COOKIE[$cookie_name])) {
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

			$cookie_value = "1";
			setcookie($cookie_name, $cookie_value, time()+3600, "/");
	
			echo '<script>alert("Verzonden!")</script>';
		} else {
			echo '<script>alert("U kunt het formulier maar een keer per uur inleveren.")</script>';
		}
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
	<h1>Contact</h1>

	<form action="" method="POST">
		<ul class="form">
			<li>
				<label>Naam</label>
				<input type="text" name="voorNaam" class="field-long" placeholder="Voor" onfocus="this.placeholder=''" onblur="this.placeholder='voor'" required> 
				<input type="text" name="achterNaam" class="field-long" placeholder="Achter" onfocus="this.placeholder=''" onblur="this.placeholder='achter'" required>
			</li>
			<li>
				<label>Email</label>
				<input type="email" name="email" class="field-long" placeholder="voorbeeld@mail.nl" onfocus="this.placeholder=''" onblur="this.placeholder='voorbeeld@mail.nl'" required>
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
				<textarea name="bericht" class="field-textarea" required></textarea>
			</li>
			<li>
				<input type="submit" name="verstuur" value="Verstuur">
			</li>
		</ul>
	</form>

	<p style="text-align: center;">Of stuur een <a href="mailto:pv143938@leerling.pvanhorne.nl?subject=Respons website">mail</a>.</p>

	<hr>

	<footer>
        <div>
			<p>&copy; Copyright 2021 Midas Nies</p>
        </div>
    </footer>
</body>

</html>