<div class="ability-scores-area">
    <h3>ABILITIES</h3>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= get_field('strength') ?><?php if (get_field('exceptional_strength') > 0) {echo  "/".get_field('exceptional_strength');}	?></td>
            <td class="ability-label-cell">
                <div class="ability-label">STR</div>
                <div class="ability-details">
                    <?= printStrHit(get_field('strength'),get_field('exceptional_strength')) ?>,
                    <?= printStrDmg(get_field('strength'),get_field('exceptional_strength')) ?>,
                    <?= printStrDoors(get_field('strength'),get_field('exceptional_strength')) ?>,
                    <?= printStrBarsGates(get_field('strength'),get_field('exceptional_strength')) ?>
                </div>
            </td>
        </tr>
    </table>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= get_field('intelligence') ?></td>
            <td class="ability-label-cell">
                <div class="ability-label">INT</div>
                <div class="ability-details">
                    <?= printIntMaxSpellLevel(get_field('intelligence')) ?>
                </div>
            </td>
        </tr>
    </table>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= get_field('wisdom') ?></td>
            <td class="ability-label-cell">
                <div class="ability-label">WIS</div>
                <div class="ability-details">
                    <?= printWisMagDefAdj(get_field('wisdom')) ?>
                </div>
            </td>
        </tr>
    </table>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= get_field('dexterity') ?></td>
            <td class="ability-label-cell">
                <div class="ability-label">DEX</div>
                <div class="ability-details">
                    <?= printDexMissileAttack(get_field('dexterity')) ?>,
                    <?= printDexDefAdj(get_field('dexterity')) ?>
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
                    Hit Point Adj: <?= formatMod(get_field('constitution_hit_point_adjustment')) ?>,
                    <?= printConPoisonAdj($constitution) ?>
                </div>
            </td>
        </tr>
    </table>
    <table class="ability-scores-table">
        <tr>
            <td class="ability-value-cell"><?= get_field('charisma') ?></td>
            <td class="ability-label-cell"><div class="ability-label">CHA</div></td>
        </tr>
    </table>
</div>
