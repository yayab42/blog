<?php require 'ressources/views/header.tpl.php';?>


<main>
<div class="viewhome">
    <article>
        <header>
            <?php if (!empty($postsById)):?><h2>Article</p><?=$articleNumber; ?></h2><?php foreach ($postsById as $keys=> $row): ?>
            <p><?=$keys . " : "?></p><?=$row?></p>
        </header>
        <?php endforeach;
        else:?><p>Il n'y a pas d'articles à afficher</p>
        <?php endif;?>
    </article>
</div>

<div>
    <article>
        <header>
            <?php if (!empty ($commentsPostsById)):?> <h2>Commentaire de l'article</h2>
            <?php foreach ($commentsPostsById as $keys=>$row): ?>
            <p><?=$keys . " : "?></p><p><?=$row?></p>
            <?php endforeach;
            else:?><p>Il n'y a pas de commentaires à afficher</p>
            <?php endif;?>
        </header>
    </article>


</div>

</main>




<?php
require 'ressources/views/footer.tpl.php';