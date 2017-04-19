<div class="avoid-page-break">
    <h3>PROFICIENCIES AND LANGUAGES</h3>
    <table class="proficiences-and-languages-table">
        <tr class="proficiences-and-languages-headers">
            <th>Weapon Proficiencies</th>
            <th>Non-Weapon Proficiencies</th>
            <th>Languages</th>
        </tr>
        <tr>
            <td><?= get_field('weapon_proficiencies') ?></td>
            <td>
                <?php 								
                if( have_rows('non_weapon_proficiencies') ):
                    echo '<ul class="vertList">';
                    while ( have_rows('non_weapon_proficiencies') ) : the_row();
                        $sheetNwp = get_sub_field('proficiency');
                        $rollUnder = 0;
                        $slots = 0;
                        $minSlots = 0;
                        $abilityScore = "";
                        $abilityMod = 0;
                        $specialNote = "";

                        foreach ($nwpArray as $nwp) {
                            if (strpos($nwp['name'], $sheetNwp) !== false) {
                                $slots = get_sub_field('slots');
                                $minSlots = (int) $nwp['minSlots'];
                                if ($nwp['abilityMod'] != 'NA' && $nwp['abilityMod'] != 'SP' ) {
                                    $abilityMod = intval(strval($nwp['abilityMod']));
                                } else {
                                    $abilityMod = $nwp['abilityMod'];
                                    if ($abilityMod == "SP") {
                                        $specialNote = "&dagger;";
                                    }
                                }
                                $abilityScore = get_field(strtolower($nwp['ability']));
                            }
                        }

                        if ($slots < $minSlots) {
                            $rollUnder = "*";
                        } else {
                            if (is_int($abilityMod)) {
                                $rollUnder = $abilityScore + $abilityMod + ($slots - $minSlots);
                            } else {
                                $rollUnder = $abilityScore + ($slots - $minSlots);
                            }
                        }

                        echo "<li>$sheetNwp($slots): $rollUnder<sup>$specialNote</sup></li>";
                    endwhile;
                    echo '</ul>';
                else :
                    // no rows found
                endif;
                ?>
            
            
            </td>
            <td><?= get_field('languages') ?></td>
        </tr>
        <tr>
            <td colspan="3">* Does not have the minimum slots allocated / <sup>&dagger;</sup>Special modifiers in proficiency description</td>
        </tr>
    </table>
</div>
