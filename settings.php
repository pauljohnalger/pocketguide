<?php
$database = 'mysql:host=localhost; dbname=pocketguide';
$user = 'pocketguide-admin';
$pwd = '4FnZ5qdP26F*5Cyh';
try{
$pdo = new PDO($database, $user, $pwd);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo '';
}catch(PDOException $e){
echo 'Connection failed: '.$e->getMessage();
}
?>