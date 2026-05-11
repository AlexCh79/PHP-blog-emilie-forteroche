<?php 
    /** 
     * Affichage de la partie monitoring basée sur la page admin de base : liste des articles selon leur titre, le nombre de vues, de commentaires, et la date de création pour chacun.
     */
    $articleController = new ArticleController();
    //$articleManager = new ArticleManager();
    //$articles = $articleManager->getArticlesForMonitoring();

?>

<h2>Monitoring des articles</h2>

<table class="adminTable">
    <tr class="articleTable">
        <th scope="col" class="head">Titre ▲ / ▼</th>
        <th scope="col" class="views">Vues ▲ / ▼</th>
        <th scope="col" class="com">Commentaires ▲ / ▼</th>
        <th scope="col" class="date">Date de création ▲ / ▼</th>
    </tr>
    <?php foreach ($articles as $article) { ?>    
        <tr class="articleTable">
            <td class="title" scope="row"><a href="index.php?action=showArticle&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a></td>
            <td class="views"><?= $article->getViews() ?></td>
            <td class="com"><?= $articleController->getCommentCount($article->getId()) ?></td>
            <td class="date"><?= Utils::convertDateToFrenchFormat($article->getDateCreation()) ?></td>
        </tr>
    <?php } ?> 
</table>

<nav class="adminNav">
    <a class="submit" href="index.php?action=admin">Retour</a>
</nav>