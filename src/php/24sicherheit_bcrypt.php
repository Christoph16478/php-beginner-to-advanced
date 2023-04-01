<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
$text="hallo";

$options = [
    'cost' => 14,
];
echo password_hash($text, PASSWORD_BCRYPT, $options);



echo "<br>\n";

$options = [
    'cost' => 14,
];
echo password_hash($text, PASSWORD_BCRYPT, $options);

echo "<br>\n";
echo "<br>\n";



//HINWEIS: Die beiden unterschiedlichen Ausgaben kopieren und in diese Variablen speichern
// $ ggf mit \ maskieren!!


$aaaa="$2y$14\$DoV45Eg4zvrSv6jSC0gn0uJQ69ez3CzfLJYnUkrUkCrSSUTiCQ6Wq";
$bbbb="$2y$14\$xIuIo7blBQIPxIrUlSWdSewWydSvaclwHAEEiSzTEkZCC9gasnPRC";

if (password_verify($text, $aaaa)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
echo "<br>\n";

if (password_verify($text, $bbbb)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}


?>
</body>
</html>



























