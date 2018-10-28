<!DOCTYPE html>
<html lang="it">
   <head>
      <meta charset="UTF-8">
      <title>Libri acquistati - LumBooks</title>
      <link rel="icon" href=""/><!-- link icona -->
      <meta name="title" content="Libri acquistati - LumBooks" />
      <meta name="description" content="In questa pagina vedi i libri che hai comprato in passato" /><!-- da fare -->
      <meta name="keywords" content="libro, unipd" /><!-- da fare -->
      <meta name="language" content="italian it" />
      <meta name="author" content="" /><!-- da fare -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../css/libri.css" /><!-- FARE CSS -->
      <link rel="stylesheet" type="text/css"  href="../css/" media="screen and (max-width:768px)" /><!-- schermi piccoli --> <!-- da fare -->
      <link rel="stylesheet" type="text/css" href="../css/" media="print" /><!-- da fare -->
   </head>
   <body>
      <?php
         include '../HTML/header.html';
         include '../php/navbar.php';
         include '../HTML/footer.html';
         ?>

<div class="outerbox">
	<h1>Libri acquistati</h1>
		<div id="filter-bar">
		<form method="POST" action=".php?????"> <!-- da fare importante -->
	    <select name="genere">
 		<option value="all" selected="selected">Tutti i generi</option><!-- da fare -->
 		<option value="scientifico">Scientifico</option>
  		<option value="letterario">Letterario</option>
		</select>
		<select name="numero">
 		<option value="all" selected="selected">Tutti</option>
 		<option value="scientifico">Primi 20</option>
  		<option value="letterario">Primi 50</option>
		</select>
		<select name="ordine">
 		<option value="all" selected="cronologico">Dal più recente</option>
 		<option value="crescente">Dal meno caro</option>
  		<option value="decrescente">Dal più caro</option>
		</select>
		</form>
	</div>
	<dl class="search_item">
	<dt class="item_name">Titolo</dt>
	<dt class="item_spec">Autore</dt><dd class="spec_desc">AUTORE</dd>
	<dt class="item_spec">Prezzo</dt><dd class="spec_desc">Un rene</dd>
	<dt class="item_spec">Immagine</dt><dd class="spec_desc"><img src="/images/logo.jpg" caption="Immagine del libro phpTITOLO"></dd>
	<!-- con SCRIPT visualizza altro>
	<dt class="item_spec">Venditore</dt><dd class="spec_desc">NomeVenditore</dd>
	<dt class="item_spec">Corso</dt><dd class="spec_desc">CORSO</dd>
	<dt class="item_spec">ISBN</dt><dd class="spec_desc">ISBN</dd>
	<dt class="item_spec">Casa Editrice</dt><dd class="spec_desc">CASA ED</dd>
	<dt class="item_spec">Anno pubblicazione</dt><dd class="spec_desc">2025</dd> -->
	</dl>
</div>

   </body>
</html>