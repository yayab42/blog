<?php

require 'ressources/views/header.tpl.php';
?>

<main xmlns="http://www.w3.org/1999/html">
<div class="viewhome">
    <article class="articleNickname">
        <?php if (!empty($lastPosts)):foreach ($lastPosts as $row): ?>
        <header>
            <h2>Article</p><?=$row['title_article']; ?></h2>
            <p>Nickname</p><?=$row['nickname']?></p>
        </header>
        <?php endforeach;
        else:?><p>Il n'y a pas d'articles à afficher</p>
        <?php endif;?>
    </article>
</div>
</main>
<?php
require 'ressources/views/footer.tpl.php';

