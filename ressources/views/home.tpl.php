<?php

require 'ressources/views/header.tpl.php';

if (!empty($lastPosts)){
    foreach ($lastPosts as $row){
        echo "<li>" . $row['title_article'] . " par " . $row['nickname'] . "</li> <br>";
    }
} else {
    echo "Il n'y a pas de données à afficher";
}

require 'ressources/views/footer.tpl.php';

