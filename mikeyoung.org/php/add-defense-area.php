<table class="defense-detail-table">
    <tr>
        <th class="defense-detail-ac-head"><h3>A.C.</h3></th>
        <th class="defense-detail-adj-ac-head"><h3>A.C. ADJUSTMENTS</h3></th>
        <th class="defense-detail-armor-head"><h3>ARMOR</h3></th>
    </tr>
    <tr>
        <td class="defense-detail-ac">
            <?php
                if( have_rows('armor') ):
                    while ( have_rows('armor') ) : the_row();
                        if (strtolower(get_sub_field('armor_type')) != "none") {
                            $armorType = get_sub_field('armor_type');

                            foreach ($armorArray as $armor) {
                                if (strpos($armor['name'], $armorType) !== false) {
                                    $armorClass = $armor['ac'];
                                    break;
                                }
                            }

                            if (get_sub_field('armor_adjustment') != 0) {
                                $armorClass += (int) get_sub_field('armor_adjustment');
                            }

                            $armorDetail = get_sub_field('armor_type');

                            if (get_sub_field('armor_adjustment') != 0) {
                                $armorDetail = $armorDetail.formatMod(get_sub_field('armor_adjustment'));
                            }

                            if (get_sub_field('armor_notes') != '') {
                                $armorDetail = $armorDetail.' ('.get_sub_field('armor_notes').')';
                            }
                        }
                    endwhile;
                else :
                    // no rows found
                endif;

                $armorClass += getDexDefAdj(get_field('dexterity'));

                // capture armor class before shield added
                $shieldlessArmorClass = $armorClass;

                if( have_rows('shield') ):
                    while ( have_rows('shield') ) : the_row();
                        if (strtolower(get_sub_field('shield_type')) != "none") {
                            $armorClass -= 1;
                            $armorClass += (int) get_sub_field('shield_adjustment');
                        }

                        $shieldDetail = get_sub_field('shield_type');

                        if (get_sub_field('shield_adjustment') != 0) {
                            $shieldDetail = $shieldDetail.formatMod(get_sub_field('shield_adjustment'));
                        }

                        if (get_sub_field('shield_notes') != '') {
                            $shieldDetail = $shieldDetail.' ('.get_sub_field('shield_notes').')';
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
                printAttribute('Surpise AC',$shieldlessArmorClass - getDexDefAdj(get_field('dexterity')));
                printAttribute('Shieldless AC',$shieldlessArmorClass);
                printAttribute('Armorless & Shieldless AC',10 + getDexDefAdj(get_field('dexterity')));
                printAttribute('Parry Adjustment',getParryAdjustment($classArray,$isWarrior));
            ?>
        </td>
        <td class="defense-detail-armor">
            <?php
                printAttribute('Armor',$armorDetail);
                printAttribute('Shield',$shieldDetail);
            ?>
        </td>
    </tr>
</table>
