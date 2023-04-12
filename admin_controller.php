<?php
    require_once 'database.php';
    require_once 'model/fields.php';
    require_once 'model/validate.php';
    require_once 'util/secure_conn.php';
    require_once 'calc_model.php';

    $validate = new Validate();
    $fields = $validate->getFields();
    $fields->addField('email');
    $fields->addField('password');

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'view_login';
        }
    }

    switch ($action) {
        case 'view_login':
            $email = '';
            $password = '';
            include 'admin_login_view.php';
            break;
        case 'login':
            $email = trim(filter_input(INPUT_POST, 'email'));
            $password = trim(filter_input(INPUT_POST, 'password'));

            $validate->email('email', $email);
            $validate->password('password', $password);

            try {
                $query = 'SELECT * FROM admins WHERE email = :email';
                $statement = $db->prepare($query);
                $statement->bindValue(':email', $email);
                $statement->execute();
                $user = $statement->fetch();
                $statement->closeCursor();

                $hash = $user['password'];
                $valid_user = password_verify($password, $hash);

                if (!$valid_user) {
                    $field = $fields->getField('email');
                    $field->setErrorMessage('Inccorrect email or password.');
                }
            } catch (PDOException $e) {
                $error = $e->getMessage();
                include 'error.php';
                exit();
            }

            if ($fields->hasErrors()) {
                include 'admin_login_view.php';
            } else {
                include 'admin_menu.php';
            }

            break;
        case 'view_weapons':
            $weapons = get_weapons();
            include 'weapons_view.php';
            break;
        case 'delete_weapon':
            $weapon_id = filter_input(INPUT_POST, 'weapon_id');
            try {
                $query = 'DELETE FROM weapons WHERE weaponID = :weaponID';
                $statement = $db->prepare($query);
                $statement->bindValue(':weaponID', $weapon_id);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                include 'error.php';
                exit();
            }

            $weapons = get_weapons();

            include 'weapons_view.php';
            break;
        case 'update_weapon_view':
            $weapon_id = filter_input(INPUT_POST, 'weapon_id');
            $weapon = get_weapon_by_id($weapon_id);

            include 'update_weapon_view.php';

            break;
        case 'update_weapon':
            $weapon_id = filter_input(INPUT_POST, 'weapon_id');
            $category = filter_input(INPUT_POST, 'category');
            $name = filter_input(INPUT_POST, 'name');
            $ar = filter_input(INPUT_POST, 'ar');
            $weight = filter_input(INPUT_POST, 'weight');

            try {
                $query = 'UPDATE weapons SET category = :category, 
                                         name = :name, 
                                         dmg = :dmg, 
                                         weight = :weight
                                         WHERE weaponID = :weaponID';
                $statement = $db->prepare($query);
                $statement->bindValue(':category', $category);
                $statement->bindValue(':name', $name);
                $statement->bindValue(':dmg', $ar);
                $statement->bindValue(':weight', $weight);
                $statement->bindValue(':weaponID', $weapon_id);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                include 'error.php';
                exit();
            }

            $weapon_id = filter_input(INPUT_POST, 'weapon_id');
            $weapon = get_weapon_by_id($weapon_id);

            include 'update_weapon_view.php';

            break;
        case 'add_weapon':
            $category = filter_input(INPUT_POST, 'category');
            $name = filter_input(INPUT_POST, 'name');
            $ar = filter_input(INPUT_POST, 'ar');
            $weight = filter_input(INPUT_POST, 'weight');
            try {
                $query = 'INSERT INTO weapons (category, name, dmg, weight)
                VALUES (:category, :name, :dmg, :weight)';
                $statement = $db->prepare($query);
                $statement->bindValue(':category', $category);
                $statement->bindValue(':name', $name);
                $statement->bindValue(':dmg', $ar);
                $statement->bindValue(':weight', $weight);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                include 'error.php';
                exit();
            }

            $weapons = get_weapons();

            include 'weapons_view.php';

            break;
    }
?>