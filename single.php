<?php
/**
 * The template for displaying all single posts.
 *
 * @package Libre
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>




			<img class="character-portrait" src="<?= wp_get_attachment_url( get_post_thumbnail_id(), 'large') ?>" />
			<div class="character-overview">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php printFormattedAttribute('Player Name',get_field('player_name')) ?>
					<?php printFormattedAttribute('Alignment',get_field('alignment')) ?>
					<?php printFormattedAttribute('Race',get_field('race')) ?>
					<?php printFormattedAttribute('Class',get_field('class')) ?>
					<?php printFormattedAttribute('Age',get_field('age')) ?>
					<?php printFormattedAttribute('Sex',get_field('sex')) ?>
					<?php printFormattedAttribute('Height',get_field('height')) ?>
					<?php printFormattedAttribute('Weight',get_field('weight')) ?>
					<?php printFormattedAttribute('Base THAC0',get_field('base_thac0')) ?>
					<?php printFormattedAttribute('Move',get_field('movement'),get_field('movement_modifiers')) ?>
					<?php printFormattedAttribute('Max. Hit Points',get_field('maximum_hit_points')) ?>
					<?php printFormattedAttribute('Exp. Points',get_field('experience_points')) ?>
				</header><!-- .entry-header -->
			</div>
			<br class="clear" />
			<div class="stat-box">
				<h3>ABILITY SCORES</h3>
				<ul class="stat-list">
					<li><?php printFormattedAttribute('Strength',get_field('strength')) ?></li>
					<li><?php printFormattedAttribute('Dexterity',get_field('dexterity')) ?></li>
					<li><?php printFormattedAttribute('Constitution',get_field('constitution')) ?></li>
					<li><?php printFormattedAttribute('Intelligence',get_field('intelligence')) ?></li>
					<li><?php printFormattedAttribute('Wisdom',get_field('wisdom')) ?></li>
					<li><?php printFormattedAttribute('Charisma',get_field('charisma')) ?></li>
				</ul>
			</div>
			<div class="stat-box">
				<h3>SAVING THROWS</h3>
				<ul class="stat-list">
					<li><?php printFormattedAttribute('Paralyzation, Poison, or Death Magic',get_field('save_vs_paralyzation_poison_or_death_magic'),get_field('save_vs_paralyzation_poison_or_death_magic_modifiers')) ?></li>
					<li><?php printFormattedAttribute('Rod, Staff, or Wand',get_field('save_vs_rod_staff_or_wand'),get_field('save_vs_rod_staff_or_wand_modifiers')) ?></li>
					<li><?php printFormattedAttribute('Petrification or Polymorph',get_field('save_vs_petrification_or_polymorph'),get_field('save_vs_petrification_or_polymorph_modifiers')) ?></li>
					<li><?php printFormattedAttribute('Breath Weapon',get_field('save_vs_breath_weapon'),get_field('save_vs_breath_weapon_modifiers')) ?></li>
					<li><?php printFormattedAttribute('Spell',get_field('save_vs_spell'),get_field('save_vs_spell_modifiers')) ?></li>
				</ul>
			</div>
			<div class="stat-box">
				<h3>ARMOR CLASS</h3>
				<ul class="stat-list">
					<li><?php printFormattedAttribute('Full',get_field('armor_class_full'),get_field('armor_class_modifiers')) ?></li>
					<li><?php printFormattedAttribute('Shieldless',get_field('armor_class_shieldless')) ?></li>
					<li><?php printFormattedAttribute('Surprised / Immobile',get_field('armor_class_surprised__immobile')) ?></li>
				</ul>
			</div>
			<br class="clear" />

			<?php
				// check if the repeater field has rows of data
				if( have_rows('weapon_profiles') ):

					// loop through the rows of data
					while ( have_rows('weapon_profiles') ) : the_row();
			?>
						<div class="weapon-details">
							<h3><?= get_sub_field('weapon') ?></h3>
							<?php printFormattedAttribute('No. of Attacks',get_sub_field('number_of_attacks'),get_sub_field('number_of_attacks_modifiers')) ?>
							<?php printFormattedAttribute('Rate of Fire',get_sub_field('rate_of_fire')) ?>
							<?php printFormattedAttribute('Attack Adjustment',get_sub_field('attack_adjustment'),get_sub_field('attack_adjustment_modifiers')) ?>
							<?php printFormattedAttribute('THAC0',get_sub_field('thac0')) ?>
							<?php printFormattedAttribute('Damage Adjustment',get_sub_field('damage_adjustment'),get_sub_field('damage_adjustment_modifiers')) ?>
							<?php printFormattedAttribute('Damage (S,M/L)',get_sub_field('damage')) ?>
							<?php printFormattedAttribute('Damage Type',get_sub_field('damage_type')) ?>
							<?php printFormattedAttribute('Range (S/M/L)',get_sub_field('range')) ?>
							<?php printFormattedAttribute('Size',get_sub_field('size')) ?>
							<?php printFormattedAttribute('Speed',get_sub_field('speed')) ?>
							<?php
								if (get_sub_field('notes') != '') {
									printFormattedAttribute('notes',get_sub_field('notes'));
								}
							?>
						</div>

						<?php
							$weapon_thac0 = (int) get_sub_field('thac0');
						?>
						<div class="weapon-roll-table">
							<h3><?= get_sub_field('weapon') ?> ROLL TABLE</h3>
							<table class="thac0-key-table">
								<tr>
									<td>Key</td>
									<td>Roll</td>
									<td>AC Hit</td>
								</tr>
							</table>
							<table class="thac0-table thac0-table-left horz-table">
								<tr>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
								</tr>
								<tr>
									<td><?= $weapon_thac0 - 1 ?></td>
									<td><?= $weapon_thac0 - 2 ?></td>
									<td><?= $weapon_thac0 - 3 ?></td>
									<td><?= $weapon_thac0 - 4 ?></td>
									<td><?= $weapon_thac0 - 5 ?></td>
								</tr>
							</table>
							<table class="thac0-table thac0-table-right horz-table">
								<tr>
									<th>6</th>
									<th>7</th>
									<th>8</th>
									<th>9</th>
									<th>10</th>
								</tr>
								<tr>
									<td><?= $weapon_thac0 - 6 ?></td>
									<td><?= $weapon_thac0 - 7 ?></td>
									<td><?= $weapon_thac0 - 8 ?></td>
									<td><?= $weapon_thac0 - 9 ?></td>
									<td><?= $weapon_thac0 - 10 ?></td>
								</tr>
							</table>
							<table class="thac0-table thac0-table-left horz-table">
								<tr>
									<th>11</th>
									<th>12</th>
									<th>13</th>
									<th>14</th>
									<th>15</th>
								</tr>
								<tr>
									<td><?= $weapon_thac0 - 11 ?></td>
									<td><?= $weapon_thac0 - 12 ?></td>
									<td><?= $weapon_thac0 - 13 ?></td>
									<td><?= $weapon_thac0 - 14 ?></td>
									<td><?= $weapon_thac0 - 15 ?></td>
								</tr>
							</table>
							<table class="thac0-table thac0-table-right horz-table">
								<tr>
									<th>16</th>
									<th>17</th>
									<th>18</th>
									<th>19</th>
									<th>20</th>
								</tr>
								<tr>
									<td><?= $weapon_thac0 - 16 ?></td>
									<td><?= $weapon_thac0 - 17 ?></td>
									<td><?= $weapon_thac0 - 18 ?></td>
									<td><?= $weapon_thac0 - 19 ?></td>
									<td><?= $weapon_thac0 - 20 ?></td>
								</tr>
							</table>
							<br class="clear" />




						</div>
					<?php
					endwhile;

				else :

				// no rows found

				endif;
			?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
