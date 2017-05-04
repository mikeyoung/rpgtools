<table class="defense-detail-table">
    <tr>
        <th class="defense-detail-ac-head"><h3>A.C.</h3></th>
        <th class="defense-detail-adj-ac-head"><h3>A.C. ADJUSTMENTS</h3></th>
    </tr>
    <tr>
        <td class="defense-detail-ac">
            <?php
                $armorDetail = '';

                if( have_rows('armor') ):
                    $baseArmorAC = 0;

                    while ( have_rows('armor') ) : the_row();
                        if (strtolower(get_sub_field('armor_type')) != "none") {
                            $armorType = get_sub_field('armor_type');

                            foreach ($armorArray as $armor) {
                                if (strpos($armor['name'], $armorType) !== false) {
                                    $armorClass = $armor['ac'];
                                    break;
                                }
                            }

                            $baseArmorAC = $armorClass;

                            if (get_sub_field('armor_adjustment') != 0) {
                                $armorClass += (int) get_sub_field('armor_adjustment');
                            }

                            $armorDetail = get_sub_field('armor_type')."($baseArmorAC) ";

                            if (get_sub_field('armor_adjustment') != 0) {
                                $armorDetail = $armorDetail.'(special adj: '.formatMod(get_sub_field('armor_adjustment')).') ';
                            }

                            if (get_sub_field('armor_notes') != '') {
                                $armorDetail = $armorDetail.' ('.get_sub_field('armor_notes').')';
                            }
                        } else {
                            $armorDetail = 'None';
                        }
                    endwhile;
                else :
                    // no rows found
                endif;
                $armorClass += getDexDefAdj($dexterity);

                // capture armor class before shield added
                $shieldlessArmorClass = $armorClass;
                $shieldDetail = '';

                if( have_rows('shield') ):
                    while ( have_rows('shield') ) : the_row();
                        if (strtolower(get_sub_field('shield_type')) != "none") {
                            $shieldAdjustment = (int) get_sub_field('shield_adjustment');
                            $armorClass -= 1;
                            $armorClass += $shieldAdjustment;

                            $shieldDetail = get_sub_field('shield_type').'('.(-1 + $shieldAdjustment).') ';

                            if (get_sub_field('shield_adjustment') != 0) {
                                $shieldDetail = $shieldDetail.'(special adj: '.formatMod(get_sub_field('shield_adjustment')).') ';
                            }

                            if (get_sub_field('shield_notes') != '') {
                                $shieldDetail = $shieldDetail.' '.get_sub_field('shield_notes');
                            }
                        } else {
                            $shieldDetail = 'None';
                        }
                    endwhile;
                else :
                    // no rows found
                endif;

                echo $armorClass;
            ?>
        </td>
        <td class="defense-detail-adj-ac">
            
            <?php
                printAttribute('Surpise AC',$shieldlessArmorClass - getDexDefAdj($dexterity));
                printAttribute('Shieldless AC',$shieldlessArmorClass);
                printAttribute('Armorless & Shieldless AC',10 + getDexDefAdj($dexterity));
                printAttribute('Parry Adjustment',getParryAdjustment($classArray,$isWarrior));
            ?>
        </td>
    </tr>
    <tr>
        <td class="defense-detail-armor" colspan="2">
            <?php
                printAttribute('Armor',$armorDetail);
                printAttribute('Shield',$shieldDetail);
            ?>
        </td>
    </tr>
    <tr>
        <td class="defense-detail-armor hit-points" colspan="2">
            <h3>Hit Points <sup class="hp-sup">(<?= get_field('maximum_hit_points') ?>)</sup></h3>
        </td>
    </tr>
</table>
