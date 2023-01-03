<?php include "templates/include/header.php" ?>

    <div id="adminHeader">
        <h2>Guzz's Blog</h2>
        <p>you be logged in as thy highness <b><?php echo htmlspecialchars($_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>🚪 log out</a> </p>
    </div>

    <h1>'em articles</h1>

<?php if (isset($results['errorMessage'])) { ?>
        <div class="errorMessage">
            <?php echo $results['errorMessage'] ?>
        </div>
<?php } ?>

    <table>
        <tr>
            <th>Publication Date</th>
            <th>Article</th>
        </tr>
<?php foreach ($results['articles'] as $article) { ?>
        <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
            <td>
                <?php echo date('j M Y', $article->publicationDate) ?>
            </td>
            <td>
                <?php echo $article->title ?>
            </td>
        </tr>
    <?php } ?>
    </table>

<p>
    <?php echo $results['totalRows']?> article<?php echo($results['totalRows'] != 1) ? 's' : '' ?>
</p>

<p>
    <a href="admin.php?action=newArticle">create new article</a>
</p>

<?php include "templates/include/footer.php" ?>