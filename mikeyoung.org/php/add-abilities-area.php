<div class="ability-scores-area">
    <h3>ABILITIES</h3>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= $strength ?><?php if ($exceptionalStrength > 0) {echo  "/".$exceptionalStrength;}	?></td>
            <td class="ability-label-cell">
                <div class="ability-label">STR</div>
                <div class="ability-details">
                    <?= printStrHit($strength,$exceptionalStrength) ?>,
                    <?= printStrDmg($strength,$exceptionalStrength) ?>,
                    <?= printStrDoors($strength,$exceptionalStrength) ?>,
                    <?= printStrBarsGates($strength,$exceptionalStrength) ?>
                </div>
            </td>
        </tr>
    </table>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= $intelligence ?></td>
            <td class="ability-label-cell">
                <div class="ability-label">INT</div>
                <div class="ability-details">
                    <?= printIntMaxSpellLevel($intelligence) ?>
                </div>
            </td>
        </tr>
    </table>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= $wisdom ?></td>
            <td class="ability-label-cell">
                <div class="ability-label">WIS</div>
                <div class="ability-details">
                    <?= printWisMagDefAdj($wisdom) ?>
                </div>
            </td>
        </tr>
    </table>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= $dexterity ?></td>
            <td class="ability-label-cell">
                <div class="ability-label">DEX</div>
                <div class="ability-details">
                    <?= printDexReactionAdj($dexterity) ?>,
                    <?= printDexMissileAttack($dexterity) ?>,
                    <?= printDexDefAdj($dexterity) ?>
                </div>
            </td>
        </tr>
    </table>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= $constitution ?></td>
            <td class="ability-label-cell">
                <div class="ability-label">CON</div>
                <div class="ability-details">
                    <?= printConHitPointAdj($constitution,$isWarrior) ?>,
                    <?= printConPoisonAdj($constitution) ?>
                </div>
            </td>
        </tr>
    </table>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= $charisma ?></td>
            <td class="ability-label-cell"><div class="ability-label">CHA</div></td>
        </tr>
    </table>
</div>
