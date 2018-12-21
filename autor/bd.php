<?php 
header('Content-Type: text/html; charset=utf-8');
$username = 'biblioteca';
$password = '';
$connection = new PDO( 'mysql:host=localhost;dbname=biblioteca', $username, $password );
?>