<?php include 'view/header.php' ?>
<main>
    <article>
        <h3 id="top">Update Weapon</h3>
        <form action="admin_controller.php" method="post">
            <input type="hidden" name="action" value="add_weapon">
            <fieldset>
                <legend>Update Weapon</legend>
                <label for="category">Category:</label>
                <input type="text" id="category" name="category">
                <br>
                <br>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <br>
                <br>
                <label for="ar">Atack Rating:</label>
                <input type="text" id="ar" name="ar">
                <br>
                <br>
                <label for="weight">Weight:</label>
                <input type="text" id="weight" name="weight">
                <br>
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Add Weapon">
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