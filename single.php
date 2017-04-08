<?php
/**
 * The template for displaying all single posts.
 *
 * @package Libre
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="character-container">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="sheet-top">
						<img class="character-portrait" src="<?= wp_get_attachment_url( get_post_thumbnail_id(), 'large') ?>" />
						<div class="character-overview">
							<header class="entry-header">

<!-- BEGIN TEMP AREA -->
<!-- <h1><?= (getWeaponsArray())[0]['name'] ?></h1> -->
<!-- END TEMP AREA -->



								<h1 class="entry-title"><?= single_post_title() ?></h1>
								<div class="character-summary-block">
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
								</div>
							</header><!-- .entry-header -->
						</div>
						<br class="clear" />
					</div>
					<div class="ability-scores-area">
						<h3>ABILITIES</h3>
						<table class="ability-scores-table">
							<tr>
								<td class="ability-value-cell"><?= get_field('strength') ?><?php if (get_field('exceptional_strength') > 0) {echo  "/".get_field('exceptional_strength');}	?></td>
								<td class="ability-label-cell">STR</td>
								<td class="ability-details-cell">
									(<?= printStrHit(get_field('strength'),get_field('exceptional_strength')) ?>,
									<?= printStrDmg(get_field('strength'),get_field('exceptional_strength')) ?>,
									<?= printStrDoors(get_field('strength'),get_field('exceptional_strength')) ?>,
									<?= printStrBarsGates(get_field('strength'),get_field('exceptional_strength')) ?>)
								</td>
							</tr>
						</table>
						<table class="ability-scores-table">
							<tr>
								<td class="ability-value-cell"><?= get_field('intelligence') ?></td>
								<td class="ability-label-cell">INT</td>
								<td class="ability-details-cell">
									(<?= printIntMaxSpellLevel(get_field('intelligence')) ?>)
								</td>
							</tr>
						</table>
						<table class="ability-scores-table">
							<tr>
								<td class="ability-value-cell"><?= get_field('wisdom') ?></td>
								<td class="ability-label-cell">WIS</td>
								<td class="ability-details-cell">(<?= printWisMagDefAdj(get_field('wisdom')) ?>)</td>
							</tr>
						</table>
						<table class="ability-scores-table">
							<tr>
								<td class="ability-value-cell"><?= get_field('dexterity') ?></td>
								<td class="ability-label-cell">DEX</td>
								<td class="ability-details-cell">
									(<?= printDexMissileAttack(get_field('dexterity')) ?>,
									<?= printDexDefAdj(get_field('dexterity')) ?>)
								</td>
							</tr>
						</table>
						<table class="ability-scores-table">
							<tr>
								<td class="ability-value-cell"><?= get_field('constitution') ?></td>
								<td class="ability-label-cell">CON</td>
								<td class="ability-details-cell">
									(Hit Point Adj: <?= formatMod(get_field('constitution_hit_point_adjustment')) ?>,
									<?= printConPoisonAdj(get_field('constitution')) ?>)
								</td>
							</tr>
						</table>
						<table class="ability-scores-table">
							<tr>
								<td class="ability-value-cell"><?= get_field('charisma') ?></td>
								<td class="ability-label-cell">CHA</td>
								<td class="ability-details-cell"></td>
							</tr>
						</table>
					</div>
					<div class="saving-throw-area">
						<h3>SAVING THROWS</h3>
						<table class="saves-table">
							<tr>
								<td class="save-value-cell"><div class="save-value-inner"><?= get_field('save_vs_paralyzation_poison_or_death_magic') ?></div></td>
								<td class="save-label-cell">Paralyzation, Poison,<br />or Death Magic</td>
							</tr>
							<tr>
								<td class="save-pad-cell"></td>
								<td></td>
							</tr>
						</table>
						<table class="saves-table">
							<tr>
								<td class="save-value-cell"><div class="save-value-inner"><?= get_field('save_vs_rod_staff_or_wand') ?></div></td>
								<td class="save-label-cell">Rod, Staff, or Wand</td>
							</tr>
							<tr>
								<td class="save-pad-cell"></td>
								<td></td>
							</tr>
						</table>
						<table class="saves-table">
							<tr>
								<td class="save-value-cell"><div class="save-value-inner"><?= get_field('save_vs_petrification_or_polymorph') ?></div></td>
								<td class="save-label-cell">Petrification or Polymorph</td>
							</tr>
							<tr>
								<td class="save-pad-cell"></td>
								<td></td>
							</tr>
						</table>
						<table class="saves-table">
							<tr>
								<td class="save-value-cell"><div class="save-value-inner"><?= get_field('save_vs_breath_weapon') ?></div></td>
								<td class="save-label-cell">Breath Weapon</td>
							</tr>
							<tr>
								<td class="save-pad-cell"></td>
								<td></td>
							</tr>
						</table>
						<table class="saves-table">
							<tr>
								<td class="save-value-cell"><div class="save-value-inner"><?= get_field('save_vs_spell') ?></div></td>
								<td class="save-label-cell">Spell</td>
							</tr>
						</table>
					</div>
					<br class="clear" />

					<table class="defense-detail-table">
						<tr>
							<th class="defense-detail-ac-head"><h3>A.C.</h3></th>
							<th class="defense-detail-adj-ac-head"><h3>A.C. ADJUSTMENTS</h3></th>
							<th class="defense-detail-armor-head"><h3>ARMOR</h3></th>
						</tr>
						<tr>
							<td class="defense-detail-ac">?</td>
							<td class="defense-detail-adj-ac">
								
								<?php
									printFormattedAttribute('Shieldless A.C.','?');
									printFormattedAttribute('Parry Adjustment',get_field('parry_adjustment'));
								?>
							</td>
							<td class="defense-detail-armor">
								<?php
									if( have_rows('armor') ):
										while ( have_rows('armor') ) : the_row();
											if (strtolower(get_sub_field('armor_type')) != "none") {
												$armorDetail = get_sub_field('armor_type');

												if (get_sub_field('armor_adjustment') != 0) {
													$armorDetail = $armorDetail.formatMod(get_sub_field('armor_adjustment'));
												}

												if (get_sub_field('armor_notes') != '') {
													$armorDetail = $armorDetail.' ('.get_sub_field('armor_notes').')';
												}

												printFormattedAttribute('Armor',$armorDetail);
											}

										endwhile;
									else :
										// no rows found
									endif;
								?>

								<?php
									if( have_rows('shield') ):
										while ( have_rows('shield') ) : the_row();
											if (strtolower(get_sub_field('shield_type')) != "none") {
												$shieldDetail = get_sub_field('shield_type');

												if (get_sub_field('shield_adjustment') != 0) {
													$shieldDetail = $shieldDetail.formatMod(get_sub_field('shield_adjustment'));
												}

												if (get_sub_field('shield_notes') != '') {
													$shieldDetail = $shieldDetail.' ('.get_sub_field('shield_notes').')';
												}
											}

											printFormattedAttribute('Shield',$shieldDetail);
										endwhile;
									else :
										// no rows found
									endif;
								?>
							</td>
						</tr>
					</table>
					<br class="clear" />

					<?php
						if( have_rows('weapon_profiles') ):
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
									<?php printFormattedAttribute('Range (S/M (-2)/L (-5)',get_sub_field('range')) ?>
									<?php printFormattedAttribute('Size',get_sub_field('size')) ?>
									<?php printFormattedAttribute('Speed',get_sub_field('speed')) ?>
									<?php
										if (get_sub_field('notes') != '') {
											printFormattedAttribute('notes',get_sub_field('notes'));
										}
									?>
								</div>

								

								<?php
									$weaponsArray = getWeaponsArray();
									foreach ($weaponsArray as $weapon) {
										$sheetWeapon = get_sub_field('weapon');

										/* if (strpos($weapon['name'], $sheetWeapon) !== false) { */
										if (true) {
											$thac0Melee = ((int) get_field('base_thac0')) - ((int) getStrHit(get_field('strength'),get_field('exceptional_strength'))) - ((int) get_sub_field('attack_adjustment'));
											$thac0Ranged = ((int) get_field('base_thac0')) - ((int) getDexMissileAttack(get_field('dexterity'))) - ((int) get_sub_field('attack_adjustment'));
											$dmgAdj = ((int) get_sub_field('damage_adjustment'));
											if ($weapon['strDmg'] == "yes") {
												$dmgAdj = $dmgAdj + getStrDmg(get_field('strength'),get_field('exceptional_strength'));
											}


								?>
											<table class="weapons-table">
												<tr>
													<th colspan="12" class="no-border weapon-title"><?= strtoupper($weapon['name']) ?></th>
												</tr>
												<tr>
													<th colspan="2" class="no-border"></th>
													<th colspan="2">THAC0</th>
													<th colspan="2">Damage</th>
													<th class="no-border"></th>
													<th colspan="3">Range</th>
													<th colspan="2" class="no-border"></th>
												</tr>
												<tr>
													<th># AT</th>
													<th>ROF</th>
													<th>Melee</th>
													<th>Ranged</th>
													<th>S / M</th>
													<th>L</th>
													<th>Dmg Type</th>
													<th>S</th>
													<th>M (-2)</th>
													<th>L (-5)</th>
													<th>Size</th>
													<th>Speed</th>
												</tr>
												<tr>
													<td><?= get_sub_field('number_of_attacks') ?></td>
													<td><?= $weapon['rof'] ?></td>
													<td><?= $thac0Melee ?></td>
													<td><?= $thac0Ranged ?></td>
													<td><?= getFormattedDamage($weapon['damageSM'], $dmgAdj) ?></td>
													<td><?= getFormattedDamage($weapon['damageL'], $dmgAdj) ?></td>
												</tr>
												<tr>
													<td colspan="12" class="weapon-notes">Notes: <?= get_sub_field('notes') ?>. Raw Attack Adj: <?= get_sub_field('attack_adjustment') ?>, Raw Damage Adj: <?= get_sub_field('damage_adjustment') ?>.</td>
												</tr>
											</table>
								<?php
										}
									}
								?>






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

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<script>
	var vm;

	function startVue(theData) {
		// slug
	}

	jQuery.getJSON("/wordpress/wp-json/wp/v2/posts/<?= get_the_ID() ?>", startVue);

</script>