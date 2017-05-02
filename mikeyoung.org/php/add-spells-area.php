<!-- Begin: Wizard Spells -->
<?php
    if ($isWizard || in_array('bard',$classNameArray)) {

        $spellsArray = [0,0,0,0,0,0,0,0,0,];
?>
    <div class="avoid-page-break">
        <h3>Maximum Prepared Wizard Spells Per Level</h3>
        <table class="single-row-table">
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
            </tr>
            <tr>
                <td><?= get_field('maximum_spells_level_1') ?></td>
                <td><?= get_field('maximum_spells_level_2') ?></td>
                <td><?= get_field('maximum_spells_level_3') ?></td>
                <td><?= get_field('maximum_spells_level_4') ?></td>
                <td><?= get_field('maximum_spells_level_5') ?></td>
                <td><?= get_field('maximum_spells_level_6') ?></td>
                <td><?= get_field('maximum_spells_level_7') ?></td>
                <td><?= get_field('maximum_spells_level_8') ?></td>
                <td><?= get_field('maximum_spells_level_9') ?></td>
            </tr>
            <tr>
                <td colspan='9'><?= getWizardSpellInfo($classNameArray) ?></td>
            </tr>
        </table>
<?php
            if( have_rows('spell_book') ):
                echo '<h3>Spell Book</h3><div class="text-box"><ul class="vertList">';
                while ( have_rows('spell_book') ) : the_row();
                    echo '<li>'.get_sub_field('spell').'</li>';
                endwhile;
                echo '</ul>';
            else :
                // no rows found
            endif;
        echo '</div><br />';
?>
    </div>
<?php
    }
?>
<!-- End: Wizard Spells -->

<!-- Begin: Priest Spells -->
<?php
    if ($isPriest || in_array('paladin',$classNameArray) || in_array('ranger',$classNameArray) ) {

        $spellsArray = [0,0,0,0,0,0,0,];
        $casterLevel = 0;

        $spellsArray = getClassSpellsArray('cleric', 0, $spellsArray, $classNameArray, $classArray);
        $spellsArray = getClassSpellsArray('druid', 0, $spellsArray, $classNameArray, $classArray);
        $spellsArray = getClassSpellsArray('paladin', 1, $spellsArray, $classNameArray, $classArray);
        $spellsArray = getClassSpellsArray('ranger', 1, $spellsArray, $classNameArray, $classArray);

        if (in_array('cleric', $classNameArray)) {
            $classCasterLevel = getClassLevel('cleric',$classArray);
            if ($casterLevel < $classCasterLevel) $casterLevel = $classCasterLevel;
        }

        if (in_array('druid', $classNameArray)) {
            $classCasterLevel = getClassLevel('druid',$classArray);
            if ($casterLevel < $classCasterLevel) $casterLevel = $classCasterLevel;
        }

        if (in_array('paladin', $classNameArray)) {
            $classLevel = getClassLevel('paladin',$classArray);
            $classCasterLevel = getPaladinAbility($classLevel,0);
            if ($casterLevel < $classCasterLevel) $casterLevel = $classCasterLevel;
        }

        if (in_array('ranger', $classNameArray)) {
            $classLevel = getClassLevel('ranger',$classArray);
            $classCasterLevel = getRangerAbility($classLevel,0);
            if ($casterLevel < $classCasterLevel) $casterLevel = $classCasterLevel;
        }
?>
    <div class="avoid-page-break">
        <h3>Maximum Prepared Priest Spells Per Level</h3>
        <table class="single-row-table">
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
            </tr>
            <tr>
                <td><?= $spellsArray[0] ?></td>
                <td><?= $spellsArray[1] ?></td>
                <td><?= $spellsArray[2] ?></td>
                <td><?= $spellsArray[3] ?></td>
                <td><?= $spellsArray[4] ?></td>
                <td><?= $spellsArray[5] ?></td>
                <td><?= $spellsArray[6] ?></td>
            </tr>
            <tr>
                <td colspan='7'>CasterLevel(<?= $casterLevel ?>) <?= getPriestSpellInfo($classNameArray) ?></td>
            </tr>
        </table>
    </div>
<?php
    }
?>
<!-- End: Priest Spells -->