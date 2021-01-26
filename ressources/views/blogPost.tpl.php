<?php
require 'ressources/views/header.tpl.php';
var_dump($postsById);
if (!empty($postsById)) {
    foreach ($postsById as $keys=> $row) {
        echo "<li>" . $keys . "=" . $row . "</li>" . "<br>";
    }
} else {
    echo "Il n'y a pas d'articles liés à cet ID";
}
require 'ressources/views/footer.tpl.php';