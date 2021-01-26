<?php
function lastBlogPosts(PDO $db): array
{
    $result = $db->query('SELECT title_article, text_article, nickname FROM articles INNER JOIN author LIMIT 10');
    return $result->fetchAll();
}

function blogPostById(PDO $db, $articleNumber): array
{
    $result = $db->query("SELECT * FROM articles WHERE id = $articleNumber");
    return $result->fetch(PDO::FETCH_ASSOC);
}