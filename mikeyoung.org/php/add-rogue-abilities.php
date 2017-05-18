<?php
    $hasRogueAbilities = false;

    $rogueAbilities = [
        get_field('pick_pockets'),
        get_field('open_locks'),
        get_field('findremove_traps'),
        get_field('move_silently'),
        get_field('hide_in_shadows'),
        get_field('detect_noise'),
        get_field('climb_walls'),
        get_field('read_languages'),
    ];

    foreach ($rogueAbilities as $ability) {
        if ($ability > 0 ) {
            $hasRogueAbilities = true;
            break;
        }
    }

    if ($hasRogueAbilities) {
?>
<div class="avoid-page-break">
    <h3>Rogue Abilities</h3>
    <table class="single-row-table">
        <tr>
            <th>Pick<br />Pockets</th>
            <th>Open<br />Locks</th>
            <th>Find/Remove<br />Traps</th>
            <th>Move<br />Silently</th>
            <th>Hide in<br />Shadows</th>
            <th>Detect<br />Noise</th>
            <th>Climb<br />Walls</th>
            <th>Read<br />Languages</th>
            <?php
                if (in_array('thief',$classNameArray)) {
            ?>
            <th>Backstab</th>
            <?php
                }
            ?>
        </tr>
        <tr>
            <td><?= get_field('pick_pockets') ?>%</td>
            <td><?= get_field('open_locks') ?>%</td>
            <td><?= get_field('findremove_traps') ?>%</td>
            <td><?= get_field('move_silently') ?>%</td>
            <td><?= get_field('hide_in_shadows') ?>%</td>
            <td><?= get_field('detect_noise') ?>%</td>
            <td><?= get_field('climb_walls') ?>%</td>
            <td><?= get_field('read_languages') ?>%</td>
            <?php
                if (in_array('thief', $classNameArray)) {
            ?>
            <td><?= getBackstabBonus($classArray) ?></td>
            <?php
                }
            ?>
        </tr>
    </table>
</div>

<?php
    }
?>

