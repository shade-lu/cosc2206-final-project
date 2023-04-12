<?php include 'view/header.php' ?>
<main>
    <article>
        <h3 id="top">Login as admin</h3>
        <form action="admin_controller.php" method="post">
            <input type="hidden" name="action" value="login">
            <fieldset>
                <legend>Login</legend>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email);?>">
                <?php echo $fields->getField('email')->getHTML(); ?>
                <br>
                <br>
                <label for="password">Password:</label>
                <input type="text" name="password" id="password" value="<?php echo htmlspecialchars($password);?>">
                <?php echo $fields->getField('password')->getHTML(); ?>
                <br>
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </article>
    <section>
    </section>
    <aside>
        <h3 id="top">Helpful Resources</h3>
        <ul>
            <li><a href="https://darksouls.wiki.fextralife.com/Dark+Souls+Wiki">The Dark Souls Wiki</a></li>
            <li><a href="https://www.youtube.com/@VaatiVidya/featured">VaatiVidya's YouTube Channel</a></li>
            <li><a href="https://discord.com/invite/darksouls3">Join the Dark Souls Discord</a></li>
        </ul>
    </aside>
</main>
<?php include 'view/footer.php' ?>