<?php
require './app/persistences/blogPostData.php';
echo "helloworld";
$lastPosts = lastBlogPosts($pdo);
require './ressources/views/home.tpl.php';
