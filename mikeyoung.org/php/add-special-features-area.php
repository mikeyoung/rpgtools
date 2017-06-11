<div class="avoid-page-break">
    <h3>RACIAL FEATURES</h3>
    <table class="proficiences-and-languages-table special-features-table">
        <tr>
            <td>
                <ul class="vertList">
                    <?php
                        if ($race == 'Halfling') {
                            echo "HALFLING (pure Stout):<br />";
                        } else {
                            echo strToUpper($race).':<br />';
                        }

                        if (strToLower($race) == 'dwarf') {
                            echo "
                            <li>".formatMod($racialMagicSaveBonus)." save vs magic</li>
                            <li>".formatMod($racialMagicSaveBonus)." save vs poison</li>
                            <li>+1 to hit vs orcs, half-orcs, goblins, and hobgoblins</li>
                            <li>Ogres, trolls, ogre magi, giants, or titans are at -4 to hit dwarves</li>
                            <li>Dwarven infravision 60'</li>
                            <li>Detect grade or slope in passage 1–5 on 1d6</li>
                            <li>Detect new tunnel/passage construction 1–5 on 1d6</li>
                            <li>Detect sliding/shifting walls or rooms 1–4 on 1d6</li>
                            <li>Detect stonework traps, pits, and deadfalls 1–3 on 1d6</li>
                            <li>Determine approximate depth underground 1–3 on 1d6</li>
                            <li>All magical items that are not specifically suited to the character's class have a 20% chance to malfunction when used by a dwarf. This check is made each time a dwarf uses a magical item. A malfunction affects only the current use; the item may work properly next time. For devices that are continually in operation, the check is made the first time the device is used during an encounter. If the check is passed, the device functions normally until it is turned off.</li>
                            ";
                        }

                        if (strToLower($race)== 'elf') {
                            echo "
                            <li>90% resistance to sleep and all charm-related spells (in addition to normal saving throw)</li>
                            <li>+1 to hit with all bows (except crossbows), short swords and long swords</li>
                            <li>Elven infravision 60'</li>
                            <li>1 in 6 chance passively detect secret/concealed doors within 10'</li>
                            <li>1 in 3 chance actively detect secret door within 10'</li>
                            <li>1 in 2 chance actively detect concealed door</li>
                            <li>An elf can gain a bonus to surprise opponents, but only if the elf is not in metal armor. Even then, the elf must either be alone, or with a party comprised only of elves or halflings (also not in metal armor), or 90 feet or more away from his party (the group of characters he is with) to gain this bonus. If he fulfills these conditions, he moves so silently that opponents suffer a –4 penalty to their surprise die rolls. If the elf must open a door or screen to attack, this penalty is reduced to –2.</li>
                            ";
                        }
                        
                        if (strToLower($race) == 'gnome') {
                            echo "
                            <li>".formatMod($racialMagicSaveBonus)." save vs magic</li>
                            <li>+1 to hit vs kobolds or goblins</li>
                            <li>Gnolls, bugbears, ogres, trolls, ogre magi, giants, or titans are at -4 to hit gnomes</li>
                            <li>Gnomish infravision 60'</li>
                            <li>Detect grade or slope in passage within 10' 1–5 on 1d6</li>
                            <li>Detect unsafe walls, ceiling, and floors within 10' 1–7 on 1d10</li>
                            <li>Determine approximate depth underground 1–4 on 1d6</li>
                            <li>Determine approximate direction underground 1–3 on 1d6</li>
                            <li>Gnomes suffer a 20% chance for failure every time they use any magical item except weapons, armor, shields, illusionist items, and (if the character is a thief) items that duplicate thieving abilities. This check is made each time the gnome attempts to use the device, or, in the case of continuous-use devices, each time the device is activated.</li>
                            ";
                        }

                        if (strToLower($race) == 'half-elf') {
                            echo "
                            <li>30% resistance to sleep and all charm-related spells (in addition to normal saving throw)</li>
                            <li>Half-elven infravision 60'</li>
                            <li>1 in 6 chance to passively detect secret/concealed doors within 10'</li>
                            <li>1 in 3 chance to actively detect secret door within 10'</li>
                            <li>1 in 2 chance to actively detect concealed door</li>
                            ";
                        }

                        if (strToLower($race) == 'halfling') {
                            echo "
                            <li>".formatMod($racialMagicSaveBonus)." save vs magic</li>
                            <li>".formatMod($racialMagicSaveBonus)." save vs poison</li>
                            <li>Halflings (full Stout) can note if a passage is an up or down grade with 75% accuracy (roll a 1, 2, or 3 on 1d4). They can determine direction half the time (roll a 1, 2, or 3 on 1d6).</li>
                            <li>A halfling can gain a bonus to surprise opponents, but only if the halfling is not in metal armor. Even then, the halfling must either be alone, or with a party comprised only of halflings or elves, or 90 feet or more away from his party to gain this bonus. If he fulfills any of these conditions, he causes a –4 penalty to opponents’ surprise rolls. If a door or other screen must be opened, this penalty is reduced to –2.</li>
                            ";
                        }

                        if (strToLower($race) == 'human') {
                            echo "
                            <li>Humans have no special features except that they can be of any character class and rise to any level in any class.</li>
                            ";
                        }
                    ?>


                </ul>
            </td>
        </tr>
    </table>
</div>