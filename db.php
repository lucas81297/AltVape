<?php
/* Database connection settings */
$host = 'localhost';
$user = 'id127258_users';
$pass = 'luke812';
$db = 'id127258_altvape';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);