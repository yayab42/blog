<?php
require './app/persistences/blogPostData.php';

echo "hello world";

$title_article= filter_input(INPUT_POST, 'title_article', FILTER_SANITIZE_STRING);
$text_article= filter_input(INPUT_POST, 'text_article', FILTER_SANITIZE_STRING);
$publication_date= filter_input(INPUT_POST, 'publication_date', FILTER_SANITIZE_STRING);
$publication_enddate= filter_input(INPUT_POST, 'publication_enddate', FILTER_SANITIZE_STRING);
$importance= filter_input(INPUT_POST, 'importance', FILTER_SANITIZE_NUMBER_INT);
$author_id= filter_input(INPUT_POST, 'author_id', FILTER_SANITIZE_NUMBER_INT);

if ($title_article!=false){
$postArray = array(
    'title_article'=>   $title_article,
    'text_article'=>$text_article,
    'publication_date'=>$publication_date,
    'publication_enddate'=>$publication_enddate,
    'importance'=>$importance,
    'author_id'=>$author_id,
);



$postArticle=blogPostCreate($pdo, $postArray );

}
require './ressources/views/blogPostCreate.tpl.php';