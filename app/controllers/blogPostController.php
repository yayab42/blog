<?php
require './app/persistences/blogPostData.php';
echo "helloworld";
$articleNumber = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_ENCODED);
$postsById = blogPostById($pdo, $articleNumber);
$commentsPostsById=commentsByBlogPost($pdo, $articleNumber);
require './ressources/views/blogPost.tpl.php';