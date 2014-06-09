<?php
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];

$giorno = $_GET['giorno'];
$mese = $_GET['mese'];
$anno = $_GET['anno'];

$sesso = $_GET['sesso'];
$localita = $_GET['localita'];


$codice_fiscale = '';

// esegui il calcolo del codice fiscale solo se
// il nome è valorizzato
if($cognome){

	//$vocali = array('A','E','I','O','U');
	//$consonanti = array('B','C','D','F','G','N','T','S');

	$vocali = str_split('AEIOU');
	$consonanti = str_split('BCDFGHLMNPQRSTVZ');


	// ------ CALCOLO PARTE COGNOME --------------
	$cognome_maiuscolo = strtoupper($cognome);

	$cf_cognome = '';

	// cerco le consonanti
	for($i = 0; $i < strlen($cognome_maiuscolo); $i ++){
	    $lettera = $cognome_maiuscolo[$i];

	    if (in_array($lettera,$consonanti)){
	        $cf_cognome = $cf_cognome . $lettera;
	    }
	}

	// cerco le vocali e le aggiungo in fondo
	for($i = 0; $i < strlen($cognome_maiuscolo); $i ++){
	    $lettera = $cognome_maiuscolo[$i];

	    if (in_array($lettera,$vocali)){
	        $cf_cognome = $cf_cognome . $lettera;
	    }
	}

	// aggiungo 3 X nel caso manchino lettere
	$cf_cognome = $cf_cognome . 'XXX';

	// prendo solo le prime 3
	$cf_cognome = substr($cf_cognome,0,3);

	// ------ FINE CALCOLO PARTE COGNOME --------------

	// ------ CALCOLO PARTE NOME --------------


	$nome_maiscolo = strtoupper($nome);

	$cf_nome = '';


	// cerco le consonanti
	for($i = 0; $i < strlen($nome_maiscolo); $i++){
			$lettera = $nome_maiscolo[$i];

			if (in_array($lettera,$consonanti)){
						$cf_nome = $cf_nome . $lettera;
			}
	}

	if(strlen($cf_nome) > 3){
		$cf_nome = $cf_nome[0] . substr($cf_nome,2);
	}

	// cerco le vocali e le aggiungo in fondo
	for($i = 0; $i < strlen($nome_maiscolo); $i ++){
			$lettera = $nome_maiscolo[$i];

			if (in_array($lettera,$vocali)){
					$cf_nome = $cf_nome . $lettera;
			}
	}

	// aggiungo 3 X nel caso manchino lettere
	$cf_nome = $cf_nome . 'XXX';

	$cf_nome = substr($cf_nome,0,3);

// ------ FINE CALCOLO PARTE NOME --------------

// ------ Data nascita --------------

	$cf_nascita = substr($anno,2,2);

	$lettere_mesi = str_split(' ABCDEHLMPRST');

	print_r($lettere_mesi);
	
	// $a .= $b  corrisponde a $a = $a . $b
	$cf_nascita .= $lettere_mesi[$mese];

	if ($sesso == 'D') {
			$giorno = $giorno + 40;
	}

	// metto lo zero davanti ai numeri con una cifra sola
	if ($giorno < 10){
		$giorno = '0' . $giorno;
	}

	$cf_nascita .= $giorno;

// ------ Fine Data nascita --------------

// ------ COMPOSIZIONE IL CODICE FISCALE  --------------
	$codice_fiscale = $cf_cognome . $cf_nome
				. $cf_nascita . $localita ;

// ------ FINE COMPOSIZIONE IL CODICE FISCALE  --------------


// ------ Calcolo codice controllo  -------------

	$valori_dispari=array("0"=>1,"A"=>1,"B"=>0,"1"=>0,"C"=>5,"2"=>5,"D"=>7,"3"=>7,"E"=>9,
					"4"=>9,"F"=>13,"5"=>13,"G"=>15,"6"=>15,"H"=>17,"7"=>17,"I"=>19,"8"=>19,
					"J"=>21,"9"=>21,"K"=>2,"L"=>4,"M"=>18,"N"=>20,"O"=>11,"P"=>3,"Q"=>6,
					"R"=>8,"S"=>12,"T"=>14,"U"=>16,"V"=>10,"W"=>22,"X"=>25,"Y"=>24,"Z"=>23);
	$valori_pari=array("0"=>0,"A"=>0,"B"=>1,"1"=>1,"C"=>2,"2"=>2,"D"=>3,"3"=>3,"E"=>4,
					"4"=>4,"F"=>5,"5"=>5,"G"=>6,"6"=>6,"H"=>7,"7"=>7,"I"=>8,"8"=>8,
					"J"=>9,"9"=>9,"k"=>10,"L"=>11,"M"=>12,"N"=>13,"O"=>14,"P"=>15,
					"Q"=>16,"R"=>17,"S"=>18,"T"=>19,"U"=>20,"V"=>21,"W"=>22,"X"=>23,
					"Y"=>24,"Z"=>25);

	$somma = 0;

	for($i = 0; $i < strlen($codice_fiscale); $i ++ ){
			$lettera = $codice_fiscale[$i];

			if ($i % 2 == 1){
				$somma += $valori_pari[$lettera];
			} else {
				$somma += $valori_dispari[$lettera];
			}
	}

	$codici_controllo = str_split('ABCDEFGHIJKLMNOPQRSTUVXYZ');

	$resto = $somma % 26;

	$codice_controllo = $codici_controllo[$resto];

	$codice_fiscale = $codice_fiscale . $codice_controllo;

// ------ Fine Calcolo codice controllo  -------------


}
?>

<html>
	<head>
		<title>Calcolo codice fiscale</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	</head>
<body>

	<div id="header" class="no-menu">
		<h1>Codice Fiscale</h1>
	</div>

	<div id="container"><div id="content">

		<?php if($codice_fiscale) {?>
		<div class="box">
			<h2 class="box-head">Codice fiscale di <?php echo "$nome $cognome";?></h2>
			<p>
				<strong><?php echo $codice_fiscale; ?></strong>
			</p>
		</div>
		<?php } ?>

		
		<div class="box">
			<h2 class="box-head">Nuovo codice fiscale</h2>

			<form action="" method="get">
				<div class="form">
					<div class="fld">
						<label>Nome</label>
						<input type="text" name="nome" value="<?php echo $nome ?>" />
					</div>
					<div class="fld">
						<label>Cognome</label>
						<input type="text"  name="cognome" value="<?php echo $cognome ?>" />
					</div>
					<div class="inline-field">
						<label>Data nascita</label>
						<select name="giorno">
						<?php for($g = 1 ; $g <= 31 ; $g++){ ?>
							<option><?php echo $g; ?></option>
						<?php } ?>
						</select>
						<select  name="mese" >
							<?php for($m = 1 ; $m <= 12 ; $m++){ ?>
								<option><?php echo $m; ?></option>
						    <?php } ?>
						</select>
						<select  name="anno">
							<?php for($a = 2010; $a >= 1940 ; $a--){ ?>
								<option><?php echo $a; ?></option>
						    <?php } ?>
						</select>
					</div>
					<div class="fld">
						<label>Sesso</label>
						<select name="sesso">
							<option value="M">Uomo</option>
							<option value="D">Donna</option>
						</select>
					</div>
					<div class="fld">
						<label>Localit&agrave; di nascita</label>
						<select name="localita">
							<option value="L219" >Torino</option>
							<option value="E715">Lucca</option>
							<option value="G478">Perugia</option>
						</select>
					</div>
				</div>
				<div class="buttons">
						<button type="reset" >Azzera</button>
						<button type="submit" >Calcola</button>

				</div>
			</form>
		</div>

	</div></div>

	<div id="footer">
		<span class="left">Corso PHP</span>

		<span class="right">
			Design by <a href="http://chocotemplates.com" target="_blank"
			title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a>
		</span>
	</div>

</body>
</html>
