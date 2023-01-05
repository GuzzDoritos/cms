<?php include "templates/include/header.php" ?>

<link rel="stylesheet" href="templates/styling/admin/adminHeader.css">
<link rel="stylesheet" href="templates/styling/admin/editArticle.css">

<div id="adminHeader">
    <p>thou art logged in as thy highness <b>
            <?php echo htmlspecialchars($_SESSION['username']) ?>
        </b>. <a style="text-decoration: none; color: yellow;" href="admin.php?action=logout" ?>🚪 log out</a> </p>
</div>

<h1><?php echo $results['pageTitle'] ?></h1>

<form action="admin.php?action=<?php echo $results['formAction'] ?>" method="post">
    <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>">

    <?php if (isset($results['errorMessage'])) { ?>
        <div class="errorMessage">
            <?php echo $results['errorMessage'] ?>
        </div>
    <?php } ?>

    <div class="formcontainer">
        <div class="row" id="titlerow">
            <div class="label">
                <label for="title">article title</label>
            </div>
            <div class="input">
                <input type="text" name="title" id="title" placeholder="name thy article" required autofocus
                    maxlength="255" value="<?php echo htmlspecialchars($results['article']->title) ?>" />
            </div>
        </div>
        <div class="row">
            <div class="label">
                <label for="summary">article summary</label>
            </div>
            <div class="input">
                <textarea name="summary" id="summary" placeholder="describe thy topic" required
                    maxlength="1000"><?php echo htmlspecialchars($results['article']->summary) ?></textarea>
            </div>
        </div>
        <div class="row" id="contentrow">
            <div class="label">
                <label for="content">article content</label>
            </div>
            <div class="input">
                <textarea name="content" id="content" placeholder="type thy wise words in here. html markup allowed!"
                    required maxlength="100000"><?php echo htmlspecialchars($results['article']->content) ?></textarea>
            </div>
        </div>
        <div class="row" id="daterow">
            <div class="label">
                <label for="publicationDate">publication date</label>
            </div>
            <div class="input">
                <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required
                    maxlength="10" value="<?php echo $results['article']->publicationDate
                        ? date("Y-m-d", $results['article']->publicationDate)
                        : ""
                        ?>">
            </div>
        </div>
    </div>
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