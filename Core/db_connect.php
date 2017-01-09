<?php
try {
	require_once 'incognito/settings.php';
} catch (Exception $e) {
	$error = $e->getMessage();
}

//Mamp PDO
$dsn = 'mysql:host=localhost;dbname=oophp;port=8889';
$db  = new PDO($dsn, $user, $pwd);

//Mamp SQLite3
// $dsn = 'sqlite:/Applications/Mamp/db/sqlite/oophp.db';
// $db  = new PDO($dsn);