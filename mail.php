<?php
	if(isset($_GET["ok"])){
		if(isset($_GET["mail"])){
			$test = preg_match("#^[a-z0-9._-]+$#", $_GET["mail"]);
			echo $test;
			echo $_GET["mail"];
		}
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<body>
		<form action="" method="get">
			<input type="text" name="mail" />
			<input type="submit" name="ok" value="Ok" />
		</form>
	</body>