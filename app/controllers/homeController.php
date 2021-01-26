<?php
require './app/persistences/blogPostData.php';

echo "helloworld";

$lastPosts = lastBlogPosts($pdo);
var_dump($lastPosts);
