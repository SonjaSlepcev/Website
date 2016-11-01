<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Odgovor | Psihološko savetovalište BUDI OK</title>
    
    <script src="../js/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../js/app.js"></script>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css"/>
</head>

<body>

<?php

if (isset($_POST["submit"])) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	$human = intval($_POST['human']);
	
	$from = 'Website - Psihološko savetovalište BUDI OK';  
	$to = 'budiok@yahoo.com'; 
	$subject = 'Poruka sa sajta.';
	 
	$body = "From: $name\n E-Mail: $email\n Message:\n $comments";
	
    $errHuman = "";
	
	if ($human !== 12) {
		$errHuman = 'Niste uneli ispravan zbir. Molimo popunite ponovo podatke.';
	}
	
	if (!$errHuman) {
		
		if (mail($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Zahvaljujemo se na poruci! Odgovorićemo u što kraćem roku!</div>';
		} else {
			$result='<div class="alert alert-danger">Izvinjavamo se, došlo je do greške. Molimo pokušaje ponovo.</div>';
		}
		
    } else {
		$result = $errHuman; 	
	}
	
	echo $result;
}
?>

</body>
</html>





















