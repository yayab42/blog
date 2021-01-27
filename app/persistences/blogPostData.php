<?php
function lastBlogPosts(PDO $db): array
{
    $result = $db->query('SELECT title_article, text_article, nickname FROM articles INNER JOIN author ON author_id = author.id LIMIT 10');
    return $result->fetchAll();
}

function blogPostById(PDO $db, $articleNumber): array
{
    $result = $db->query("SELECT * FROM articles WHERE id = $articleNumber");
    return $result->fetch(PDO::FETCH_ASSOC);
}

function commentsByBlogPost(PDO $db, $articleNumber): array
{
    $result = $db->query('SELECT text_commentary, articles_id, commentaries.author_id FROM commentaries INNER JOIN articles ON articles_id= articles.id');
    return $result->fetch(PDO::FETCH_ASSOC);
}
