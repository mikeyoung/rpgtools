<?php
    if ($isRogue) {
?>
<h3>Rogue Abilities</h3>
<table class="single-row-table avoid-page-break">
    <tr>
        <th>Pick<br />Pockets</th>
        <th>Open<br />Locks</th>
        <th>Find/Remove<br />Traps</th>
        <th>Move<br />Silently</th>
        <th>Hide in<br />Shadows</th>
        <th>Detect<br />Noise</th>
        <th>Climb<br />Walls</th>
        <th>Read<br />Languages</th>
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
    </tr>
</table>

<?php
    }
?>

