<?php
    if( have_rows('weapons') ):
        echo '<h3 class="weapons-header">WEAPONS</h3>';
        while ( have_rows('weapons') ) : the_row();
?>

            <?php
                $sheetWeapon = get_sub_field('weapon');

                foreach ($weaponsArray as $weapon) {
                    $validWeapon = true;

                    if (strpos($weapon['name'], $sheetWeapon) !== false) {

                        if (strToLower($sheetWeapon) == 'sling') {
                            if (strpos(strToLower($weapon['name']), 'staff') !== false) {
                                continue;
                            }
                        }

                        if (strToLower($sheetWeapon) == 'short bow' || strToLower($sheetWeapon) == 'long bow') {
                            if (strpos(strToLower($weapon['name']), 'composite') !== false) {
                                continue;
                            }
                        }

                        $thac0Melee = "-";
                        $thac0Ranged = "-";
                        $slots = 0;
                        $minSlots = 0; // extra slots required for specialization
                        $proficient = false;
                        $specialized = false;
                        $profBadge = '';
                        $warriorProfPenalty = -2;
                        $wizardProfPenalty = -5;
                        $priestProfPenalty = -3;
                        $rogueProfPenalty = -3;
                        $specialAttackAdj = (int) get_sub_field('attack_adjustment');
                        $thac0Mods = '';
                        $dmgAdjMods = '';
                        $dmgAdj = $specialDmgAdj = (int) get_sub_field('damage_adjustment');
                        $weaponNotes = '';
                        $nonProficientMod = 0;
                        $nonProficientNote = '';
                        $attackRate = 1;

                        if( have_rows('weapon_proficiencies') ):
                            while ( have_rows('weapon_proficiencies') ) : the_row();
                                $sheetWp = get_sub_field('weapon');

                                if (strpos($weapon['name'], $sheetWp) !== false) {
                                    $proficient = true;
                                    $profBadge = '(P)';
                                    $thac0Mods = $thac0Mods.'proficient ';
                                    
                                    foreach ($wpArray as $wp) {
                                        if (strpos($wp['name'], $sheetWp) !== false) {
                                            $slots = (int) get_sub_field('slots');
                                            $minSlots = (int) $wp['minSlots'];
                                        }
                                    }

                                    if ($slots > $minSlots && in_array('fighter', $classNameArray)) {
                                        if (strpos(strtolower($weapon['name']), 'bow') !== false && $slots < 3) {
                                            $specialized = false;
                                        } else {
                                            $specialized = true;
                                            $profBadge = '(S)';
                                        }
                                    }
                                }
                            endwhile;
                        else :
                            // no rows found
                        endif;

                        $thac0Mods = $thac0Mods."baseTHAC0($baseThac0) ";

                        if ($slots == 0) {
                            if ($isWizard) {
                                $nonProficientNote = 'wizardNonProficiency(+5) ';
                                $nonProficientMod = -5;
                            }

                            if ($isPriest || $isRogue) {
                                if ($isPriest) $nonProficientNote = 'priestNonProficiency(+3) ';
                                if ($isRogue) $nonProficientNote = 'rogueNonProficiency(+3) ';
                                $nonProficientMod = -3;
                            }

                            if ($isWarrior) {
                                $nonProficientNote = 'warriorNonProficiency(+2) ';
                                $nonProficientMod = -2;
                            }

                            $thac0Mods = $thac0Mods."$nonProficientNote ";
                        }

                        if ($specialAttackAdj != 0) {
                            $thac0Mods = $thac0Mods.'specialAttackAdj('.formatMod(-$specialAttackAdj).') ';
                        }
                        
                        // if melee weapon
                        if ($weapon['attackType'] == 'melee' || $weapon['attackType'] == 'both') {
                            $thac0Melee = $baseThac0 - $strHit - $specialAttackAdj - $nonProficientMod;
                            $thac0Mods = $thac0Mods.'strength('.formatMod(-$strHit).') ';
                            if ($weapon['attackType'] == 'melee') {
                                $attackRate = $baseMeleeAttacks;
                            } elseif ($weapon['attackType'] == 'both') {
                                $attackRate = "M: $baseMeleeAttacks<br>R: 1";
                            }

                            // apply proficiencies
                            if ($specialized) {
                                $thac0Mods = $thac0Mods.'specialized(-1) ';
                                $thac0Melee--;
                            }
                        }

                        // if ranged weapon
                        if ($weapon['attackType'] == "ranged" || $weapon['attackType'] == "both") {
                            $thac0Ranged = $baseThac0 - $missileAttackAdj - $specialAttackAdj - $nonProficientMod;
                            if ($missileAttackAdj != 0) {
                                $thac0Mods = $thac0Mods.'missileAttackAdj('.formatMod(-$missileAttackAdj).') ';
                            }

                            // apply proficiencies
                            if ($specialized && (strpos(strtolower($weapon['name']), 'bow') !== false)) {
                                $weaponNotes = $weaponNotes.'Specialization: +2 to hit at Point Blank Range. ';
                            }
                        }

                        if ($weapon['strDmg'] == "yes") {
                            $dmgAdj = $dmgAdj + $strDmg;
                            $dmgAdjMods = $dmgAdjMods.'strength('.formatMod($strDmg).') ';
                            if ($specialDmgAdj != 0) {
                                $dmgAdjMods = $dmgAdjMods.'special('.formatMod($specialDmgAdj).') ';
                            }
                            

                            if ($specialized && ($weapon['attackType'] == 'melee' || $weapon['attackType'] == 'both')) {
                                $dmgAdj = $dmgAdj +2;
                                $dmgAdjMods = $dmgAdjMods."specialized(+2) ";
                            }
                        }

                        if (strtolower($race) == 'elf' && strpos($weapon['name'], " Bow ") !== false || $weapon['name'] == 'Short Sword' || $weapon['name'] == 'Long Sword') {
                            $thac0Melee--;
                            $thac0Ranged--;
                            $thac0Mods = $thac0Mods.'elfFavoredWeapon(-1) ';
                        }

                        if (strtolower($race) == 'halfling' && $weapon['thrown'] == 'yes') {
                            $thac0Ranged--;
                            $thac0Mods = $thac0Mods.'halflingThrownWeapon(-1) ';
                        }

                        if ($specialized) {
                            $attackRate = getSpecialistAttackRate($classArray,$weapon);
                        }
            ?>
                        <table class="weapons-table avoid-page-break">
                            <tr>
                                <th colspan="2" class="no-border weapon-title"><?= strtoupper($weapon['name']) ?> <?= $profBadge ?></th>
                                <th colspan="2">THAC0</th>
                                <th colspan="2">Damage</th>
                                <th class="no-border"></th>
                                <th colspan="3">Range</th>
                                <th colspan="2" class="no-border"></th>
                            </tr>
                            <tr>
                                <th># AT</th>
                                <th>ROF</th>
                                <th>Melee</th>
                                <th>Ranged</th>
                                <th>S / M</th>
                                <th>L</th>
                                <th>Dmg Type</th>
                                <th>S</th>
                                <th>M (-2)</th>
                                <th>L (-5)</th>
                                <th>Size</th>
                                <th>Speed</th>
                            </tr>
                            <tr>

                                <td><?= $attackRate ?></td>
                                <td><?= $weapon['rof'] ?></td>
                                <td><?= $thac0Melee ?></td>
                                <td><?= $thac0Ranged ?></td>
                                <td><?= getFormattedDamage($weapon['damageSM'], $dmgAdj) ?></td>
                                <td><?= getFormattedDamage($weapon['damageL'], $dmgAdj) ?></td>
                                <td><?= $weapon['damageType'] ?></td>
                                <td><?= $weapon['rangeS'] ?></td>
                                <td><?= $weapon['rangeM'] ?></td>
                                <td><?= $weapon['rangeL'] ?></td>
                                <td><?= $weapon['size'] ?></td>
                                <td><?= $weapon['speed'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="13" class="weapon-notes">
                                    
                                    <?php
                                        $weaponNotesField = get_sub_field('notes');
                                        echo "THAC0 Mods: $thac0Mods";
                                        if ($dmgAdjMods != '') echo " / Dmg Mods: $dmgAdjMods";
                                        if ($weaponNotes != '') echo " / $weaponNotes";
                                        if ($weaponNotesField != '') echo " / Notes: $weaponNotesField";
                                    ?>
                                </td>
                            </tr>
                        </table>
<?php
                    }
                }
        endwhile;
    else :
        // no rows found
    endif;
?>
