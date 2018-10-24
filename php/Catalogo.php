<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
	<title>Catalogo</title>
	<link rel="icon" href=""/> <!-- link icona -->
	<meta name="title" content="Catalogo" />
	<meta name="description" content="Catalogo dei libri" /> <!-- da fare -->
	<meta name="keywords" content="libro, unipd" /> <!-- da fare -->
	<meta name="language" content="italian it" />
	<meta name="author" content="" /> <!-- da fare -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/catalogo.css" /> <!-- da fare -->
  <link rel="stylesheet" type="text/css"  href="../css/" media="screen and (max-width:768px)" /> <!-- schermi piccoli --> <!-- da fare -->
  <link rel="stylesheet" type="text/css" href="../css/" media="print" /> <!-- da fare -->
</head>
<body>
  <?php
    include '../HTML/header.html';
    include '../php/navbar.php';
    include '../HTML/footer.html';
	?>
<div class="outerbox">
	<?php
		include "phpConnect.php";
		if(!$result = $connect->query("SELECT * FROM Libri_Listati")){
			echo "Errore di query";
			exit();
		}
		else{
			$connect->close();
		}
		if($result->num_rows > 0){
			while($row = $result->fetch_array(MYSQLI_ASSOC)){
				$str = 	'<dl class="search_item">
								<dt class="item_name">'.$row['Titolo'].'</dt>
								<dt class="item_spec">Autore</dt><dd class="spec_desc">'.$row['Autore'].'</dt>
								<dt class="item_spec">Casa Editrice</dt><dd class="spec_desc">'.$row['Casa_Editrice'].'</dt>
								<dt class="item_spec">Corso</dt><dd class="spec_desc">'.$row['Corso'].'</dt></dl>';
				$str = mb_convert_encoding($str, "utf-8", "auto");
				echo $str;
			}
			$result->free();
		}
	?>
</div>
</body>
</html>
