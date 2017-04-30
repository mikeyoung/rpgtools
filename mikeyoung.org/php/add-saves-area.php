<?php
    $globalSaveMod = 0;
    if (in_array('paladin', $classNameArray)) $globalSaveMod += 2;
?>


<div class="saving-throw-area">
    <h3>SAVING THROWS</h3>
    <table class="saves-table">
        <tr>
            <td class="save-value-cell"><div class="save-value-inner"><?= getSave('paralyzation', $classArray, $savesArray) - $globalSaveMod ?></div></td>
            <td class="save-label-cell">Paralyzation, Poison,<br />or Death Magic</td>
        </tr>
        <tr>
            <td class="save-pad-cell"></td>
            <td></td>
        </tr>
    </table>
    <table class="saves-table">
        <tr>
            <td class="save-value-cell"><div class="save-value-inner"><?= getSave('rod', $classArray, $savesArray) - $globalSaveMod ?></div></td>
            <td class="save-label-cell">Rod, Staff, or Wand</td>
        </tr>
        <tr>
            <td class="save-pad-cell"></td>
            <td></td>
        </tr>
    </table>
    <table class="saves-table">
        <tr>
            <td class="save-value-cell"><div class="save-value-inner"><?= getSave('petrification', $classArray, $savesArray) - $globalSaveMod ?></div></td>
            <td class="save-label-cell">Petrification<br />or Polymorph</td>
        </tr>
        <tr>
            <td class="save-pad-cell"></td>
            <td></td>
        </tr>
    </table>
    <table class="saves-table">
        <tr>
            <td class="save-value-cell"><div class="save-value-inner"><?= getSave('breath', $classArray, $savesArray) - $globalSaveMod ?></div></td>
            <td class="save-label-cell">Breath Weapon</td>
        </tr>
        <tr>
            <td class="save-pad-cell"></td>
            <td></td>
        </tr>
    </table>
    <table class="saves-table">
        <tr>
            <td class="save-value-cell"><div class="save-value-inner"><?= getSave('spell', $classArray, $savesArray) - $globalSaveMod ?></div></td>
            <td class="save-label-cell">Spell</td>
        </tr>
    </table>
    <div class="save-mods">
        <?php
            $saveNotes = '';
            $magicSaveBonus = 0;
            if ($race == 'Dwarf' || $race == 'Halfling' || $race == 'Gnome') {
                if ($constitution >= 3) $magicSaveBonus = 0;
                if ($constitution >= 6) $magicSaveBonus = 1;
                if ($constitution >= 10) $magicSaveBonus = 2;
                if ($constitution >= 13) $magicSaveBonus = 3;
                if ($constitution >= 17) $magicSaveBonus = 4;
                if ($constitution >= 19) $magicSaveBonus = 5;

                if ($magicSaveBonus > 0) {
                    $saveNotes = $saveNotes."$race: +$magicSaveBonus vs magic<br />";
                }
            }

            if ($race == 'Dwarf' || $race == 'Halfling') {
                $saveNotes = $saveNotes."$race: +2 vs poison<br />";
            }

            if ($race == 'Elf') {
                $saveNotes = $saveNotes.'Elf: 90% resistance to sleep and all charm-related spells (in addition to normal saving throw).<br />';
            }

            if ($race == 'Half-Elf') {
                $saveNotes = $saveNotes.'Half-Elf: 30% resistance to sleep and all charm-related spells (in addition to normal saving throw).<br />';
            }

            if (in_array('paladin',$classNameArray)) {
                $saveNotes = $saveNotes.'Paladin: global save +2 (already applied above)<br />';
            }

            if (in_array('druid', $classNameArray)) {
                $saveNotes = $saveNotes.'Druid: +2 vs. fire or electrical attacks.<br />';
            }

            echo $saveNotes;
        ?>
    </div>
</div>
<br class="clear" />
