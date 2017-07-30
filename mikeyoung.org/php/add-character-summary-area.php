<div class="character-summary-block">
    <div class="character-name"><?= single_post_title() ?></div>
    <?php printAttribute('Player Name',get_field('player_name')) ?>
    <?php printAttribute('Alignment',get_field('alignment')) ?>
    <?php printAttribute('Race',$race) ?>
    <?php printClasses($classArray) ?>
    <?php printAttribute('Age',get_field('age')) ?>
    <?php printAttribute('Sex',get_field('sex')) ?>
    <?php printAttribute('Height',$height) ?>
    <?php printAttribute('Weight',$weight) ?>
    <?php printAttribute('Base THAC0',$baseThac0) ?>
    <?php printAttribute('Move',$baseMovement.' ('.($baseMovement*10).'\'/'.($baseMovement*30).'\')') ?>
    <?php printAttribute('Deity',get_field('deity')); ?>
    <?php printAttribute('Melee Attacks',$baseMeleeAttacks) ?>
</div>
<img class="character-image" src='<?= the_post_thumbnail_url('large'); ?>' />