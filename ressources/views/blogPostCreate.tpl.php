<?php ?>

<main>
    <form action="index.php?action=blogPostCreateController.php" method="get">
        <div>
            <label for = "title_article"> Entrer titre </label>
            <input type="text" name="title_article">
        </div>
        <div>
            <label for = "text_article"> Entrer texte </label>
            <input type="text" name="text_article">
        </div>
        <div>
            <label for = "publicationDate" Selectionner date de publication</label>
            <input type="date" name="publicationDate" value="">
        </div>
        <div>
            <label for = "publicationEndDate" Selectionner date de fin de publication</label>
            <input type="date" name="publicationEndDate" value="">
        </div>
        <div>
            <label for ="importance">Choisir importance</label>
            <select name="importance">
                <option value="">Choisir importance</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div>
            <label for ="author_id">Entrer ID auteur</label>
            <input type="text" name="author_id">
        </div>

    </form>






</main>
