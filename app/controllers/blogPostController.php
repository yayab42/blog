<?php
require './app/persistences/blogPostData.php';
echo "helloworld";
$postsById = blogPostById($pdo, 1);
require './ressources/views/blogPost.tpl.php';