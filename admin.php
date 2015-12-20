<?php
	if(isset($_COOKIE['loggedin'])){
	}
	else{
		header('Location: index.php');
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Uzzi's PHP Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<h1>Welcome to the admin panel.</h1>
		<p>You have successfully logged in.</p>
	</header>
	<section>
		<p>Now, it's time to log out and go home.</p>
		<button><a href="action.php">Log Out</a></button>
	</section>

</body>
</html>