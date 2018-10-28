<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
	<title>Login</title>
	<link rel="icon" href=""/> <!-- link icona -->
	<meta name="title" content="Login" />
	<meta name="description" content="Pagina di Login" />
	<meta name="keywords" content="libro, unipd, login" />
	<meta name="language" content="italian it" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css" />
  <link rel="stylesheet" type="text/css"  href="../css/" media="screen and (max-width:768px)" /> <!-- schermi piccoli --> <!-- da fare -->
  <link rel="stylesheet" type="text/css" href="../css/" media="print" /> <!-- da fare -->
  <script type="text/javascript" src="../js/validation.js"></script>
</head>
<body>
  <?php
    include '../HTML/header.html';
    include '../php/navbar.php';
    include '../HTML/footer.html';
	?>
	<div id="loginBox" class="outerBox">
		<form id="loginForm" class="innerBox" action="check_login.php" method="post">
      <input type="email" id="loginEmail" placeholder="Email" name="mail" class="formText" />
      <br/>
      <input type="password" id="inputPsw" placeholder="Password" name="password" class="formText"/>
      <br />
      <a href="recuperoPwd.php" id="recuperoPsw">password dimenticata?</a>
      <input type="submit" id="loginSubmit" value="Accedi"/>
    </form>
	</div>
</body>
</html>