<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start(); 
	?>

	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="firstName" required></p>
		<p><input type="password" placeholder="Password here" name="password" required></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>	
	<a href="unset.php">Logout</a>

	<?php if (isset($_SESSION['error'])): ?>
		<h3 style='color:black;'><?php echo htmlspecialchars($_SESSION['error']); ?></h3>
		<?php unset($_SESSION['error']); ?>
	<?php elseif (isset($_SESSION['firstName'])): ?>
		<h2>User logged in: <?php echo htmlspecialchars($_SESSION['firstName']); ?></h2>
		<h2>User password: <?php echo htmlspecialchars($_SESSION['password']); ?></h2>
	<?php endif; ?>
</body>
</html>