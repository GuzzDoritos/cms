<?php include "templates/include/header.php" ?>

<style>
    .form {
        margin: auto;
        display: flex;
    }

    .form > * {
        margin: auto;
        align-items: center;
        display: flex;
    }

    .labels, .inputs {
        display: flex;
        flex-direction: column;
    }

    .label {
        margin: 10px;
        padding: 10px;
    }

    input {
        margin: 10px;
        padding: 10px;
        width: 100%;
    }

    .buttons {
        margin: auto;
        display: flex;
    }

    .buttons > * {
        margin: auto;
        width: 100%;
    }

    form {
        margin: auto;
        max-width: 50%;
        border: 2px solid black;
        border-radius: 10px;
        padding: 5px;
        background-color: lightblue;
    }

</style>
    
    <form action="admin.php?action=login" method="POST">
        <input type="hidden" name="login" value="true"/>
        <?php if (isset($results['errorMessage'])) { ?>
                    
                    <div class="errorMessage">
                        <?php echo $results['errorMessage'] ?>
                    </div>

        <?php } ?>
            <div class="form">
                <div class="labels">
                        <div class="label">username</div>
                        <div class="label">password</div>
                    </div>
                <div class="inputs">
                    <input type="text" name="username" id="username" placeholder="usrnm" required autofocus maxlength="20">
                    <input type="password" name="password" id="password" placeholder="pswrd" required maxlength="20">
                </div>
            </div>
            <div class="buttons"><input name="login" type="submit" value="Login"/></div>
    </form>
    
    <div class="return"><a href="./">Return to Index</a></div>

<?php include "templates/include/footer.php" ?>