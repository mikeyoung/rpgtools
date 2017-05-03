<?php
/**
 * The template for displaying all single posts.
 *
 * @package Libre
 */

get_header(); ?>
	<?php
		$strength = get_field('strength');
		$exceptionalStrength = get_field('exceptional_strength');
		$intelligence = get_field('intelligence');
		$wisdom = get_field('wisdom');
		$dexterity = get_field('dexterity');
		$constitution = get_field('constitution');
		$charisma = get_field('charisma');
		$armorClass = 10;
		$shieldlessArmorClass = 10;
		$shieldDetail = "";
		$armorDetail = "";
		$weaponsArray = getWeaponsArray();
		$armorArray = getArmorArray();
		$classArray = getClassArray();
		$classNameArray = getClassNameArray();
		$wpArray = getWpArray();
		$nwpArray = getNwpArray();
		$isWarrior = hasClassGroup($classNameArray,'warrior');
		$isWizard = hasClassGroup($classNameArray,'wizard');
		$isPriest = hasClassGroup($classNameArray,'priest');
		$isRogue = hasClassGroup($classNameArray,'rogue');
		$baseThac0 = getBaseThac0($classArray);
		$strHit = (int) getStrHit($strength,$exceptionalStrength);
		$strDmg = getStrDmg($strength,$exceptionalStrength);
		$missileAttackAdj = (int) getDexMissileAttack($dexterity);
		$race = get_field('race');
		$baseMovement = getMovementRate($race);
		$savesArray = getSavesArray();
		$height = '';
		$weight = 0;
		$baseMeleeAttacks = getBaseAttackRate($classNameArray,$isWarrior,$classArray);

		if (get_field('custom_height_and_weight')) {
			$height = get_field('height');
			$weight = get_field('weight');
		} else {
			$height = getBaseHeight($race);
			$weight = getBaseWeight($race);
		}
	?>

	<div id="primary" class="content-area">
		<div class="character-container">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					 	getSave('rod' ,$classArray, $savesArray);
					?>



					<div class="sheet-top">
						<?php
							require get_template_directory() . '/mikeyoung.org/php/add-character-summary-area.php';
							require get_template_directory() . '/mikeyoung.org/php/add-saves-area.php';
						?>
					</div>

					<?php
						require get_template_directory() . '/mikeyoung.org/php/add-abilities-area.php';
						require get_template_directory() . '/mikeyoung.org/php/add-defense-area.php';
					?>
					<br class="clear" />
					<?php
						require get_template_directory() . '/mikeyoung.org/php/add-weapons-area.php';
						require get_template_directory() . '/mikeyoung.org/php/add-rogue-abilities.php';
						require get_template_directory() . '/mikeyoung.org/php/add-proficiencies-area.php';
						require get_template_directory() . '/mikeyoung.org/php/add-spells-area.php';
					?>

					<div class="avoid-page-break">
						<h3 class="multi-size-header">Notes</h3>
						<div class="multi-size-header multi-size-header-small">Memorized spells, inventory, quests, etc.</div>
						<br class="clear" />
						<div class="hr" />
						
						<br /><?= get_field('notes') ?>
					</div>

					<div class="hidden"><?php get_template_part( 'template-parts/content', 'single' ); ?></div>

				<?php endwhile; // End of the loop. ?>

				<?php
					require get_template_directory() . '/mikeyoung.org/php/add-debug.php';
				?>

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>