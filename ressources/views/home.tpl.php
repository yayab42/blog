<?php

require 'ressources/views/header.tpl.php';
?>

<main>
<div class="viewhome">
    <table class="articleNickname">
        <?php if (!empty($lastPosts)):foreach ($lastPosts as $row): ?>
        <tr>
            <td><p>Article</p><?=$row['title_article']; ?></td>
            <td><p>Nickname</p><?=$row['nickname']?></td>
        </tr>
        <?php endforeach;
        else:?><p>Il n'y a pas d'articles à afficher</p>
        <?php endif;?>
    </table>
<!--        echo "<li>" . $row['title_article'] . " par " . $row['nickname'] . "</li> <br>";-->
<!--    }-->
<!--} else {-->
<!--    echo "Il n'y a pas de données à afficher";-->
<!--}-->

</div>
</main>
<?php
require 'ressources/views/footer.tpl.php';

