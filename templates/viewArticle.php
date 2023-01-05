<?php include "templates/include/header.php" ?>

<link rel="stylesheet" href="templates/styling/viewArticle.css">


        <div class="title" style="width: 75%;">            
            <h1><?php echo htmlspecialchars( $results['article']->title) ?></h1>
            <div class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate) ?></div>
        </div>
        <div class="summary" style="width: 75%; font-style: italic;">
            <?php echo htmlspecialchars($results['article']->summary) ?>
        </div>
        <hr>
        <div class="content" style="width: 65%;">
            <?php echo $results['article']->content ?>
        </div>
<?php include "templates/include/footer.php"?>