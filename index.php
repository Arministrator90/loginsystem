<?php
require_once 'core/init.php';
$general->logged_in_protect();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head> 
<body>	
	<div id="container">
		<h1>Login</h1>

		<?php 

		if(empty($errors) === false){
			echo '<p>' . implode('</p><p>', $errors) . '</p>';	
		}

		?>

	<form action="postlogin.php" method="post">
		<label for="username">Username</label>
		<input type="text" id="username" name="username" value="Your username" onfocus="if (this.value == 'Your username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Your username';}" />  
		<label for="password">Password</label>
		<input type="password" id="password" name="password" value="Password" />
		<label for="submit-button" ></label>
		<input type="hidden" name="token" value="<?=$token;?>">
		<input type="submit" value="Send" id="submit-button" name="submit" />
	</form>

	</div>
</body>
</html>