<?php
require './app/persistences/blogPostData.php';
$articleNumber = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$delete=blogPostDelete($pdo, $articleNumber);

require './ressources/views/blogPostDelete.tlp.php';