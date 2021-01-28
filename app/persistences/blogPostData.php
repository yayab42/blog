<?php
function lastBlogPosts(PDO $db): array
{
    $result = $db->query('SELECT title_article, text_article, nickname FROM articles INNER JOIN author 
    ON author_id = author.id LIMIT 10');
    return $result->fetchAll();
}

function blogPostById(PDO $db, $articleNumber): array
{
    $result = $db->query("SELECT * FROM articles WHERE id = $articleNumber");
    return $result->fetch(PDO::FETCH_ASSOC);
}

function commentsByBlogPost(PDO $db, $articleNumber): array
{
    $result = $db->query('SELECT text_commentary, articles_id, commentaries.author_id FROM commentaries 
    INNER JOIN articles ON articles_id= articles.id');
    return $result->fetch(PDO::FETCH_ASSOC);
}

function blogPostCreate(PDO $db, array $postArray): bool
{
    $result = $db->prepare('INSERT INTO articles(title_article, text_article, publication_date,
                     publication_enddate, importance, author_id)
VALUES(?,?,?,?,?,?)');
    $result->bindParam(1,$postArray['title_article'], PDO::PARAM_STR);
    $result->bindParam(2,$postArray['text_article'], PDO::PARAM_STR);
    $result->bindParam(3,$postArray['publication_date'], PDO::PARAM_STR);
    $result->bindParam(4,$postArray['publication_enddate'], PDO::PARAM_STR);
    $result->bindParam(5,$postArray['importance'], PDO::PARAM_INT);
    $result->bindParam(6,$postArray['author_id'], PDO::PARAM_INT);
    return $result ->execute();

}

function blogPostUpdate(PDO $db, $articleNumber, $postArray ) : bool
{
$result = $db->prepare('UPDATE articles SET
id = :id,
title_article = :title_article ,
text_article = :text_article,
publication_date = :publication_date,
publication_enddate = :publication_enddate,
importance = :importance,
author_id = :author_id,
WHERE id = :id');
  return $result->execute(array(':id'=>$articleNumber,
                                ':title_article'=>$postArray['title_article'],
                                ':text_article'=>$postArray['text_article'],
                                ':publication_date'=>$postArray['publication_date'],
                                ':publication_enddate'=>$postArray['publication_enddate'],
                                ':importance'=>$postArray['importance'],
                                ':author_id'=>$postArray['author_id'],));
}