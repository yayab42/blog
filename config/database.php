<?php
$pdo =new PDO('mysql:host=localhost;dbname=blog.sql', 'usertest', 'usertest');
$statement=$pdo->query("select * FROM *");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['*']);