<div class="saving-throw-area">
    <h3>SAVING THROWS</h3>
    <table class="saves-table">
        <tr>
            <td class="save-value-cell"><div class="save-value-inner"><?= getSave('paralyzation', $classArray, $savesArray) ?></div></td>
            <td class="save-label-cell">Paralyzation, Poison,<br />or Death Magic</td>
        </tr>
        <tr>
            <td class="save-pad-cell"></td>
            <td></td>
        </tr>
    </table>
    <table class="saves-table">
        <tr>
            <td class="save-value-cell"><div class="save-value-inner"><?= getSave('rod', $classArray, $savesArray) ?></div></td>
            <td class="save-label-cell">Rod, Staff, or Wand</td>
        </tr>
        <tr>
            <td class="save-pad-cell"></td>
            <td></td>
        </tr>
    </table>
    <table class="saves-table">
        <tr>
            <td class="save-value-cell"><div class="save-value-inner"><?= getSave('petrification', $classArray, $savesArray) ?></div></td>
            <td class="save-label-cell">Petrification<br />or Polymorph</td>
        </tr>
        <tr>
            <td class="save-pad-cell"></td>
            <td></td>
        </tr>
    </table>
    <table class="saves-table">
        <tr>
            <td class="save-value-cell"><div class="save-value-inner"><?= getSave('breath', $classArray, $savesArray) ?></div></td>
            <td class="save-label-cell">Breath Weapon</td>
        </tr>
        <tr>
            <td class="save-pad-cell"></td>
            <td></td>
        </tr>
    </table>
    <table class="saves-table">
        <tr>
            <td class="save-value-cell"><div class="save-value-inner"><?= getSave('spell', $classArray, $savesArray) ?></div></td>
            <td class="save-label-cell">Spell</td>
        </tr>
    </table>
    <div class="save-mods"></div>
</div>
<br class="clear" />
