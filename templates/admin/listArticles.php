<?php include "templates/include/header.php" ?>

<link rel="stylesheet" href="templates/styling/list.css">
<link rel="stylesheet" href="templates/styling/admin/listArticles.css">
<link rel="stylesheet" href="templates/styling/admin/adminHeader.css">

    <div id="adminHeader">
        <p>thou art logged in as thy highness <b><?php echo htmlspecialchars($_SESSION['username']) ?></b>. 
        <a style="color: yellow; text-decoration: none;" href="admin.php?action=logout"?>🚪 log out</a> </p>
    </div>

<?php if (isset($results['errorMessage'])) { ?>
        <div class="errorMessage">
            <?php echo $results['errorMessage'] ?>
        </div>
<?php } ?>

<div id="totalrows">
    <b style="font-size: 1.5em;"><?php echo $results['totalRows']?> article<?php echo($results['totalRows'] != 1) ? 's' : '' ?></b>
    <input id="newarticle" type="button" onclick="location.href = 'admin.php?action=newArticle'" value="create new article">
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
                    <a href="admin.php?action=editArticle&amp;articleId=<?php echo $article->id ?>">
                        <?php echo htmlspecialchars($article->title) . " 📝(edit)" ?>
                    </a>
                </div>
                <div class="summary">
                    <em><?php echo $article->summary ?></em>
                </div>
            </div>
        </div>

        <?php } ?>
</div>



<?php include "templates/include/footer.php" ?>