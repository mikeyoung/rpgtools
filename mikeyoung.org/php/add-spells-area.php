<!-- Begin: Wizard Spells -->
<?php
    if (in_array("Mage", $classNameArray) || in_array("Illusionist", $classNameArray)) {
?>
    <div class="avoid-page-break">
        <h3>Maximum Prepared Wizard Spells Per Level</h3>
        <table class="max-spells-table">
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
        </table>
<?php
        echo '<h3>Spell Book</h3><div class="text-box">'.get_field('spell_book').'</div><br />';
?>
    </div>
<?php
    }
?>
<!-- End: Wizard Spells -->

<!-- Begin: Priest Spells -->
<?php
    if (in_array("Cleric", $classNameArray) || in_array("Druid", $classNameArray)) {
?>
    <div class="avoid-page-break">
        <h3>Maximum Prepared Priest Spells Per Level</h3>
        <table class="max-spells-table">
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
                <td><?= get_field('maximum_spells_level_1') ?></td>
                <td><?= get_field('maximum_spells_level_2') ?></td>
                <td><?= get_field('maximum_spells_level_3') ?></td>
                <td><?= get_field('maximum_spells_level_4') ?></td>
                <td><?= get_field('maximum_spells_level_5') ?></td>
                <td><?= get_field('maximum_spells_level_6') ?></td>
                <td><?= get_field('maximum_spells_level_7') ?></td>
            </tr>
        </table>
<?php
        echo '<h3>Spell Book</h3><div class="text-box">'.get_field('spell_book').'</div><br />';
?>
    </div>
<?php
    }
?>
<!-- End: Priest Spells -->
