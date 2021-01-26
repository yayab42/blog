<?php
$lastPosts = lastBlogPosts($pdo);


if (!empty($lastPosts)){
    var_dump($lastPosts);
} else {
    echo "Il n'y a pas de données à afficher";
}
require 'ressources/views/header.tpl.php';
require 'ressources/views/footer.tpl.php';

