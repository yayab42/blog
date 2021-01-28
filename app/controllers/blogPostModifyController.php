<?php

require './app/persistences/blogPostData.php';

echo "hello world";
$articleNumber = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$postFetchPost=blogPostById($pdo, $articleNumber);

$title=$postFetchPost['title_article'];
$text=$postFetchPost['text_article'];
$publicationDate=$postFetchPost['publication_date'];
$publicationEndDate=$postFetchPost['publication_enddate'];
$postImportance=$postFetchPost['importance'];
$authorId=$postFetchPost['author_id'];

if (filter_has_var(INPUT_POST, 'text_article')) {

    $title_article= filter_input(INPUT_POST, 'title_article', FILTER_SANITIZE_STRING);
    $text_article= filter_input(INPUT_POST, 'text_article', FILTER_SANITIZE_STRING);
    $publication_date= filter_input(INPUT_POST, 'publication_date', FILTER_SANITIZE_STRING);
    $publication_enddate= filter_input(INPUT_POST, 'publication_enddate', FILTER_SANITIZE_STRING);
    $importance= filter_input(INPUT_POST, 'importance', FILTER_SANITIZE_NUMBER_INT);
    $author_id= filter_input(INPUT_POST, 'author_id', FILTER_SANITIZE_NUMBER_INT);

    $postArray = array(
        'title_article' => $title_article,
        'text_article' => $text_article,
        'publication_date' => $publication_date,
        'publication_enddate' => $publication_enddate,
        'importance' => $importance,
        'author_id' => $author_id,
    );

    $postModify = blogPostUpdate($pdo, $articleNumber, $postArray);

}
var_dump(blogPostUpdate($pdo, $articleNumber, $postArray));
require './ressources/views/blogPostUpdate.tlp.php';