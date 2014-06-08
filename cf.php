<?php
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];

$giorno = $_GET['giorno'];
$mese = $_GET['mese'];
$anno = $_GET['anno'];

$sesso = $_GET['sesso'];
$localita = $_GET['localita'];

//print_r($_GET);

$codice_fiscale = '';

if ($nome){
	$codice_fiscale = $nome;
}

?>

<html>
	<head>
		<title>Calcolo codice fiscale</title>
		<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
	</head>
<body>

	<div id="header" class="no-menu">
		<h1>Codice Fiscale</h1>
	</div>


<div id="container">
	<div id="content">
		
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
						<input type="text" name="nome" />
					</div>
					<div class="fld">
						<label>Cognome</label>
						<input type="text"  name="cognome"  />
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
							<option value="L219">Torino</option>
							<option value="E715">Lucca</option>
							<option value="G478">Perugia</option>
						</select>			
					</div>
				</div>		
				<div class="buttons">						
						<input type="submit" class="button" value="Calcola" />
				</div>
			</form>
		</div>
<!-- End Box -->

</div>



			

</div>


<!-- Footer --> <div id="footer">
		<span class="left">Corso PHP</span> <span class="right">
			Design by <a href="http://chocotemplates.com" target="_blank"
			title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a>
		</span>
</div> <!-- End Footer -->
	
</body> </html>