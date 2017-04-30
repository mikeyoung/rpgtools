<div class="character-summary-block">
    <div class="character-name"><?= single_post_title() ?></div>
    <?php printAttribute('Player Name',get_field('player_name')) ?>
    <?php printAttribute('Alignment',get_field('alignment')) ?>
    <?php printAttribute('Race',$race) ?>
    <?php printClasses($classArray) ?>
    <?php printAttribute('Age',get_field('age')) ?>
    <?php printAttribute('Sex',get_field('sex')) ?>
    <?php printAttribute('Height',get_field('height')) ?>
    <?php printAttribute('Weight',get_field('weight')) ?>
    <?php printAttribute('Base THAC0',$baseThac0) ?>
    <?php printAttribute('Move',$baseMovement) ?>
</div>
<img class="character-image" src='<?= the_post_thumbnail_url('large'); ?>' />