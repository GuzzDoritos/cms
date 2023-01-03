<?php include "templates/include/header.php" ?>

<link rel="stylesheet" href="templates/styling/homepage.css">

<div id="headlines">

    <?php foreach ($results['articles'] as $article) { ?>

        <div class="articlerow">
            <span class="pubDate">
                <?php echo strtoupper(date('j F Y', $article->publicationDate)) ?>
            </span>
            <div class="contentcontainer">
                <div class="content">
                    <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>">
                        <?php echo htmlspecialchars($article->title) ?>
                    </a>
                </div>
                <div class="summary">
                    <?php echo $article->summary ?>
                </div>
            </div>
        </div>

        <?php } ?>
</div>
    <?php include "templates/include/footer.php"?>