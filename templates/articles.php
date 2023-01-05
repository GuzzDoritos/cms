<?php include "templates/include/header.php" ?>

<link rel="stylesheet" href="templates/styling/list.css">
<link rel="stylesheet" href="templates/styling/admin/listArticles.css">

<div id="totalrows">
    <b style="font-size: 1.5em;"><?php echo $results['totalRows']?> article<?php echo($results['totalRows'] != 1) ? 's' : '' ?></b> in total.
</div>

<div id="headlines">

    <?php foreach ($results['articles'] as $article) { ?>

        <div class="articlerow">
            <div class="date">
                <span id="month"><?php echo strtoupper(date('F', $article->publicationDate)) ?></span>
                <span id="day"><?php echo strtoupper(date('j', $article->publicationDate)) ?></span>
            </div>
            <div class="contentcontainer">
                <div class="content">
                    <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>">
                        <?php echo htmlspecialchars($article->title) ?>
                    </a>
                </div>
                <div class="summary">
                    <em><?php echo $article->summary ?></em>
                </div>
            </div>
        </div>

        <?php } ?>
<?php include "templates/include/footer.php" ?>