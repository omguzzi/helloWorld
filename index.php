<?php 
	$login = array(
		'bryan' => 'conzone', 
		'uzzi' => 'carninja',
		'ninja' => 'max'
		);
	

	$username = $_POST['username'];
	$password = $_POST['password'];
	

	if(!empty($_POST)){
		if (array_key_exists($username, $login) && $password == $login[$username]) {
			setcookie('loggedin', '1', time() + 86400, '/', 'uzzi.dev');
			header( 'Location: admin.php' );
			exit;
		}
		else{
			$error = "Error: Try again.";
		}
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
		<h1>Uzzi's Website</h1>
	</header>

	<section class="main">
		<div class="my-form">
			<form id="testform" action="index.php" method="post">
	 		<p id="formtitle">Username:</p><br>
	  		<input type="text" name="username">
	  		<br>
	  		<p id="formtitle">Password:</p><br>
	  		<input type="password" name="password">
	  		<?php echo $error ?>
	  		<br><br>
	  		<input type="submit" value="Log In">

		</form>
		</div>
	</section>

</body>
</html>