<?php
    require_once 'database.php';
    require_once 'calc_model.php';

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'view_calc';
        }
    }

    switch ($action) {
        case 'view_calc':
            $weapons = get_weapons();
            $armour = get_armour();
            include 'calc_view.php';
            break;
        case 'roll_calc':
            $weapon = get_weapon_by_id(filter_input(INPUT_POST, 'weapon'));
            $helmet = get_armour_by_id(filter_input(INPUT_POST, 'helmet'));
            $chest = get_armour_by_id(filter_input(INPUT_POST, 'chest'));
            $gauntlets = get_armour_by_id(filter_input(INPUT_POST, 'gauntlets'));
            $leggings = get_armour_by_id(filter_input(INPUT_POST, 'leggings'));
            $endurance = filter_input(INPUT_POST, 'endurance');

            $equip_load = $endurance + 40;
            $total_weight = $weapon['weight'] + $helmet['weight'] + $chest['weight'] + 
                            $gauntlets['weight'] + $leggings['weight'];
            $encumbrance = $total_weight / $equip_load;

            if ($encumbrance == 0) {
                $roll = 'Maximum roll speed';
            } else if ($encumbrance < 0.25) {
                $roll = 'Fast roll';
            } else if ($encumbrance < 0.5) {
                $roll = 'Medium roll';
            } else if ($encumbrance <= 1) {
                $roll = 'Slow roll';
            } else {
                $roll = 'Rolling impossible';
            }

            $_SESSION['weapon'] = $weapon['name'];
            $_SESSION['helmet'] = $helmet['name'];
            $_SESSION['chest'] = $chest['name'];
            $_SESSION['gauntlets'] = $gauntlets['name'];
            $_SESSION['leggings'] = $leggings['name'];

            $weapons = get_weapons();
            $armour = get_armour();
            
            include 'calc_results_view.php';
            break;
    }
?>