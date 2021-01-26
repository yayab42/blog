<?php
$lastPosts = lastBlogPosts($pdo);


if (isset($lastPosts)){
    var_dump($lastPosts);
} else {
    echo "Il n'y a pas de données à afficher";
}