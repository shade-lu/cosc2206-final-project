<?php

function get_weapons() {
    global $db;
    try {
        $query = 'SELECT * FROM weapons';
        $statement = $db->prepare($query);
        $statement->execute();
        $weapons = $statement->fetchAll();
        $statement->closeCursor();

        return $weapons;
    } catch (PDOException $e) {
        $error = $e->getMessage();
        include 'error.php';
        exit();
    }
}

function get_weapon_by_id($id) {
    global $db;
    try {
        $query = 'SELECT * FROM weapons WHERE weaponID = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $weapon = $statement->fetch();
        $statement->closeCursor();

        return $weapon;
    } catch (PDOException $e) {
        $error = $e->getMessage();
        include 'error.php';
        exit();
    }
}

function get_armour() {
    global $db;
    try {
        $query1 = 'SELECT * FROM armour WHERE type = "Leggings"';
        $statement = $db->prepare($query1);
        $statement->execute();
        $leggings = $statement->fetchAll();
        $statement->closeCursor();

        $query2 = "SELECT * FROM armour WHERE type = 'Gauntlets'";
        $statement = $db->prepare($query2);
        $statement->execute();
        $gauntlets = $statement->fetchAll();
        $statement->closeCursor();

        $query3 = "SELECT * FROM armour WHERE type = 'Chests'";
        $statement = $db->prepare($query3);
        $statement->execute();
        $chests = $statement->fetchAll();
        $statement->closeCursor();

        $query4 = "SELECT * FROM armour WHERE type = 'Helms'";
        $statement = $db->prepare($query4);
        $statement->execute();
        $helms = $statement->fetchAll();
        $statement->closeCursor();

        $arr = array('leggings' => $leggings, 'gauntlets' => $gauntlets, 'chests' => $chests, 'helms' => $helms);
        return $arr;
    } catch (PDOException $e) {
        $error = $e->getMessage();
        include 'error.php';
        exit();
    }
}

function get_armour_by_id($id) {
    global $db;
    try {
        $query = 'SELECT * FROM armour WHERE armourID = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $weapon = $statement->fetch();
        $statement->closeCursor();

        return $weapon;
    } catch (PDOException $e) {
        $error = $e->getMessage();
        include 'error.php';
        exit();
    }
}

?>