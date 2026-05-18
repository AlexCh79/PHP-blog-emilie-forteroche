<?php 
    /** 
     * Affichage de la partie monitoring basée sur la page admin de base : liste des articles selon leur titre, le nombre de vues, de commentaires, et la date de création pour chacun.
     */
?>

<h2>Monitoring des articles</h2>

<table class="adminTable">
    <thead>
        <tr class="articleTable">
            <th scope="col" class="head">Titre <a href="index.php?action=showMonitoring&sortParam=title&sortOrder=ASC">▲</a> / <a href="index.php?action=showMonitoring&sortParam=title&sortOrder=DESC">▼</a></th>
            <th scope="col" class="views">Vues <a href="index.php?action=showMonitoring&sortParam=views&sortOrder=ASC">▲</a> / <a href="index.php?action=showMonitoring&sortParam=views&sortOrder=DESC">▼</a></th>
            <th scope="col" class="com">Commentaires <a href="index.php?action=showMonitoring&sortParam=comments&sortOrder=ASC">▲</a> / <a href="index.php?action=showMonitoring&sortParam=comments&sortOrder=DESC">▼</a></th>
            <th scope="col" class="date">Date de création <a href="index.php?action=showMonitoring&sortParam=date&sortOrder=ASC">▲</a> / <a href="index.php?action=showMonitoring&sortParam=date&sortOrder=DESC">▼</a></th>
        </tr>
    </thead>
    <tbody class="articleTableRow">
    <?php foreach ($articles as $article) { ?>    
        <tr class="articleTable">
            <td class="title" scope="row"><a href="index.php?action=showArticle&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a></td>
            <td class="views"><?= $article->getViews() ?></td>
            <td class="com"><?= $article->getNbComments() ?></td>
            <td class="date"><?= Utils::convertDateToFrenchFormat($article->getDateCreation()) ?></td>
        </tr>
    <?php } ?> 
    </tbody>
</table>

<nav class="adminNav">
    <a class="submit" href="index.php?action=admin">Retour</a>
</nav>