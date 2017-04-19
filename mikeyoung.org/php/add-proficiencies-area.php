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
                        echo '<li>'.get_sub_field('proficiency').' '.get_sub_field('slots').'</li>';
                    endwhile;
                    echo '</ul>';
                else :
                    // no rows found
                endif;
                ?>
            
            
            </td>
            <td><?= get_field('languages') ?></td>
        </tr>
    </table>
</div>
