<div class="character-summary-block">
    <h3><?= single_post_title() ?></h3>
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
    <?php printAttribute('Max. Hit Points',get_field('maximum_hit_points')) ?>
</div>