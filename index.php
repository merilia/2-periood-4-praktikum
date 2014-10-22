<?php 
	if (isset($_POST["submit"])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$message = "Vormis esines vigu!";} 
	else { 
	$message = "Palun logi sisse!";}
 ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>2. periood 4. praktikum</title>
</head>
<body>
	<h2><?php echo $message;?></h2>	
	<form name="loginform" action="index.php" method="post">
		<span>Kasutajanimi:</span>
			<input type="text" name="username" value="<?php if (isset($_POST["submit"])){
			$username = $_POST['username'];}?>">
		<br>
		<span>Parool:</span>
			<input type="password" class="parool" name="password">
		<br>
			<input type="submit" name="submit" value="Saada">
	</form>
	<pre><?php print_r($_POST);?></pre>
</body>
</html>
	