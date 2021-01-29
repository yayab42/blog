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

if (!empty($postFetchPost['title_article'])){
    $postFetchPost= array(
        'title_article'=>FILTER_SANITIZE_STRING,
        'text_article'=>FILTER_SANITIZE_STRING,
        'publication_date'=>FILTER_SANITIZE_STRING,
        'publication_enddate'=>FILTER_SANITIZE_STRING,
        'importance'=>FILTER_SANITIZE_NUMBER_INT,
        'author_id'=>FILTER_SANITIZE_NUMBER_INT,
    );

    $modifyArray=filter_input_array(INPUT_POST,$postFetchPost);

//    $title_article= filter_input(INPUT_POST, 'title_article', FILTER_SANITIZE_STRING);
//    $text_article= filter_input(INPUT_POST, 'text_article', FILTER_SANITIZE_STRING);
//    $publication_date= filter_input(INPUT_POST, 'publication_date', FILTER_SANITIZE_STRING);
//    $publication_enddate= filter_input(INPUT_POST, 'publication_enddate', FILTER_SANITIZE_STRING);
//    $importance= filter_input(INPUT_POST, 'importance', FILTER_SANITIZE_NUMBER_INT);
//    $author_id= filter_input(INPUT_POST, 'author_id', FILTER_SANITIZE_NUMBER_INT);
    if (filter_has_var(INPUT_POST, 'submit')){
    $postModify = blogPostUpdate($pdo, $articleNumber, $modifyArray);
    }
}

require './ressources/views/blogPostUpdate.tlp.php';