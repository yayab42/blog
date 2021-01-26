<?php
$user='usertest';
$pass='usertest';
$dbName ='blog';
$pdo =new PDO("mysql:host=localhost;dbname={$dbName}", $user,$pass);
