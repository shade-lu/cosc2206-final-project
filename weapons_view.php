<?php include 'view/header.php' ?>
<main>
    <article>
    <table>
        <tr>
            <th>Weapon ID</th>
            <th>Category</th>
            <th>Name</th>
            <th>Attack Rating</th>
            <th>Weight</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>

        <?php foreach($weapons as $weapon) : ?>
        <tr>
            <td><?php echo $weapon['weaponID']; ?></td>
            <td><?php echo $weapon['category']; ?></td>
            <td><?php echo $weapon['name']; ?></td>
            <td><?php echo $weapon['dmg']; ?></td>
            <td><?php echo $weapon['weight']; ?></td>
            <td>
                <form action="admin_controller.php" method="post">
                    <input type="hidden" name="action" value="delete_weapon">
                    <input type="hidden" name="weapon_id" value="<?php echo $weapon['weaponID'] ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
            <td>
                <form action="admin_controller.php" method="post">
                    <input type="hidden" name="action" value="update_weapon_view">
                    <input type="hidden" name="weapon_id" value="<?php echo $weapon['weaponID'] ?>">
                    <input type="submit" value="Update">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </article>
    <section>
        <p><a href="add_weapon_view.php">Add Weapon</a></p>
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