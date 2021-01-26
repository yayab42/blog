<?php
function lastBlogPosts(PDO $db) : array {
    $result = $db->query('SELECT title_article, nickname FROM articles INNER JOIN author LIMIT 10;');
    return $result->fetchAll();
}