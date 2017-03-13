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

			<?php get_template_part( 'template-parts/content', 'single' ); ?>



			<?php
				// check if the repeater field has rows of data
				if( have_rows('weapon_profiles') ):

					// loop through the rows of data
					while ( have_rows('weapon_profiles') ) : the_row();
			?>
						<div class="weapon-details">
							<div class="weapon-name"><?= get_sub_field('weapon') ?></div>
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
							<table class="thac0-table thac0-table-left">
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
							<table class="thac0-table thac0-table-right">
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
							<table class="thac0-table thac0-table-left">
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
							<table class="thac0-table thac0-table-right">
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



		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
