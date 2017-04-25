<?php
    if( have_rows('weapons') ):
        echo '<h3 class="weapons-header">WEAPONS</h3>';
        while ( have_rows('weapons') ) : the_row();
?>

            <?php
                $sheetWeapon = get_sub_field('weapon');

                foreach ($weaponsArray as $weapon) {
                    if (strpos($weapon['name'], $sheetWeapon) !== false) {
                        $thac0Melee = "-";
                        $thac0Ranged = "-";

                        if ($weapon['attackType'] == "melee" || $weapon['attackType'] == "both") {
                            $thac0Melee = (int) get_field('base_thac0') - (int) getStrHit(get_field('strength'),get_field('exceptional_strength')) - (int) get_sub_field('attack_adjustment');
                        }

                        if ($weapon['attackType'] == "ranged" || $weapon['attackType'] == "both") {
                            $thac0Ranged = (int) get_field('base_thac0') - (int) getDexMissileAttack(get_field('dexterity')) - (int) get_sub_field('attack_adjustment');
                        }

                        $dmgAdj = ((int) get_sub_field('damage_adjustment'));
                        
                        if ($weapon['strDmg'] == "yes") {
                            $dmgAdj = $dmgAdj + getStrDmg(get_field('strength'),get_field('exceptional_strength'));
                        }
            ?>
                        <table class="weapons-table avoid-page-break">
                            <tr>
                                <th colspan="2" class="no-border weapon-title"><?= strtoupper($weapon['name']) ?></th>
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

                                <td><?= get_sub_field('number_of_attacks') ?></td>
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
                                <td colspan="13" class="weapon-notes">Notes: <?= get_sub_field('notes') ?>. Raw Attack Adj: <?= get_sub_field('attack_adjustment') ?>, Raw Damage Adj: <?= get_sub_field('damage_adjustment') ?>.</td>
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
