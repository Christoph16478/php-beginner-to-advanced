<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
<form action="21post.php" method="post">
	User:
	<input type="text" name="user"><br>
	PW:
	<input type="text" name="pw"><br>
	<input type="submit" name="senden" value="absenden">
</form>

<a href="22get.php?seite=4&user=Susi">zur GET-Seite</a>

</div>
</body>
</html>