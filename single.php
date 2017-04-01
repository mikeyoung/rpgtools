<?php
/**
 * The template for displaying all single posts.
 *
 * @package Libre
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="character-container" v-cloak>
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>











					<transition name="fade" appear>
						<div>
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
									<?php printFormattedAttribute('Move',get_field('movement')) ?>
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
									<li><?php printFormattedAttribute('Paralyzation, Poison, or Death Magic',get_field('save_vs_paralyzation_poison_or_death_magic')) ?></li>
									<li><?php printFormattedAttribute('Rod, Staff, or Wand',get_field('save_vs_rod_staff_or_wand')) ?></li>
									<li><?php printFormattedAttribute('Petrification or Polymorph',get_field('save_vs_petrification_or_polymorph')) ?></li>
									<li><?php printFormattedAttribute('Breath Weapon',get_field('save_vs_breath_weapon')) ?></li>
									<li><?php printFormattedAttribute('Spell',get_field('save_vs_spell')) ?></li>
								</ul>
							</div>
							<div class="stat-box">
								<h3>ARMOR</h3>
								<ul class="stat-list">
									<li><?php printFormattedAttribute('Armor',get_field('armor')) ?></li>
									<li><?php printFormattedAttribute('Shield',get_field('shield')) ?></li>
									<li><?php printFormattedAttribute('Armor Class',get_field('armor_class')) ?></li>
									<li><?php printFormattedAttribute('Shieldless',get_field('armor_class_shieldless')) ?></li>
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
											<?php printFormattedAttribute('No. of Attacks',get_sub_field('number_of_attacks')) ?>
											<?php printFormattedAttribute('Rate of Fire',get_sub_field('rate_of_fire')) ?>
											<?php printFormattedAttribute('Attack Adjustment',get_sub_field('attack_adjustment')) ?>
											<?php printFormattedAttribute('THAC0',get_sub_field('thac0')) ?>
											<?php printFormattedAttribute('Damage Adjustment',get_sub_field('damage_adjustment')) ?>
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
									<?php
									endwhile;

								else :

								// no rows found

								endif;
							?>

							<?php get_template_part( 'template-parts/content', 'single' ); ?>
						</div>
					</transition>





				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<script>
	var vm;

	function startVue(theData) {
		vm = new Vue({
			el: "#primary",
			// data: theData,
			data: {show:true}
		});
	}

	jQuery.getJSON("/wordpress/wp-json/wp/v2/posts/98", startVue);

</script>