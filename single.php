<?php
/**
 * The template for displaying all single posts.
 *
 * @package Libre
 */

get_header(); ?>
	<?php
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
		$strHit = (int) getStrHit(get_field('strength'),get_field('exceptional_strength'));
		$strDmg = getStrDmg(get_field('strength'),get_field('exceptional_strength'));
		$missileAttackAdj = (int) getDexMissileAttack(get_field('dexterity'));
		$race = get_field('race');
		$baseMovement = getMovementRate($race);
		$savesArray = getSavesArray();
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
							require get_template_directory() . '/mikeyoung.org/php/add-abilities-area.php';
							require get_template_directory() . '/mikeyoung.org/php/add-saves-area.php';
						?>
					</div>

					<?php
						require get_template_directory() . '/mikeyoung.org/php/add-defense-area.php';
						require get_template_directory() . '/mikeyoung.org/php/add-weapons-area.php';
						require get_template_directory() . '/mikeyoung.org/php/add-rogue-abilities.php';
						require get_template_directory() . '/mikeyoung.org/php/add-proficiencies-area.php';
						require get_template_directory() . '/mikeyoung.org/php/add-spells-area.php';
					?>

					<div class="avoid-page-break">
						<h3>Notes</h3>
						<div class="text-box"><?= get_field('notes') ?></div>
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