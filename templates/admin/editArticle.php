<?php include "templates/include/header.php" ?>

<div id="adminHeader">
    <h2>Guzz's Blog</h2>
    <p>you be logged in as thy highness <b>
            <?php echo htmlspecialchars($_SESSION['username']) ?>
        </b>. <a href="admin.php?action=logout" ?>🚪 log out</a> </p>
</div>

<h1><?php echo $results['pageTitle'] ?></h1>

<form action="admin.php?action=<?php echo $results['formAction'] ?>" method="post">
    <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>">

    <?php if (isset($results['errorMessage'])) { ?>
        <div class="errorMessage">
            <?php echo $results['errorMessage'] ?>
        </div>
    <?php } ?>

    <ul>
        <li>
            <label for="title">article title</label>
            <input type="text" name="title" id="title" placeholder="name thy article" required autofocus maxlength="255" value="<?php echo htmlspecialchars($results['article']->title) ?>"/>
        </li>

        <li>
            <label for="summary">article summary</label>
            <textarea name="summary" id="summary" placeholder="describe thy topic" required maxlength="1000"
                style="height: 5em;">
                    <?php echo htmlspecialchars($results['article']->summary) ?>
                </textarea>

        <li>
            <label for="content">article content</label>
            <textarea name="content" id="content" placeholder="type thy wise words in here. html markup allowed!"
                required maxlength="100000" style="height: 30em;">
                    <?php echo htmlspecialchars($results['article']->content) ?>
                </textarea>
        </li>

        <li>
            <label for="publicationDate">publication date</label>
            <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required
                maxlength="10"
                value="<?php echo $results['article']->publicationDate ? date("Y-m-d", $results['article']->publicationDate) : "" ?>">
        </li>

    </ul>

    <div class="buttons">
        <input type="submit" name="saveChanges" value="save changes">
        <input type="submit" formnovalidate name="cancel" value="cancel">
    </div>
</form>

<?php if ($results['article']->id) { ?>
    <p><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>"
            onclick="return confirm('r u sure u wanna do dis?')">delete this boy</a></p>
<?php } ?>

<?php include "templates/include/footer.php" ?>