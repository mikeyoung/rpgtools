<?php
/**
 * Load AD&D weapons function
 */
require get_template_directory() . '/mikeyoung.org/php/add-weapons.php';

/**
 * Load AD&D armor function
 */
require get_template_directory() . '/mikeyoung.org/php/add-armor.php';

/**
 * Load AD&D nwp function
 */
require get_template_directory() . '/mikeyoung.org/php/add-nwp.php';

/**
 * Load AD&D wp function
 */
require get_template_directory() . '/mikeyoung.org/php/add-wp.php';


/* BEGIN MIKE YOUNG FUNCTIONS & CLASSES */
function printAttribute($label,$value) {
	echo "<div><span class='field-label'>$label:</span> <span class='field-value'>$value</span></div>";
}

function printClasses($classArray) {
	if (count($classArray) > 1) {
		echo "<div><span class='field-label'>Classes:</span></div>";
		foreach ($classArray as $key=>$value) {
			$className = $classArray[$key]['name'];
			$classLevel = $classArray[$key]['level'];
			$classExperience = $classArray[$key]['experience'];
			echo "<div>&nbsp;&nbsp;<span class='field-value'>$className $classLevel (Exp $classExperience)</span></div>";
		}
	} else {
		$className = $classArray[0]['name'];
		$classLevel = $classArray[0]['level'];
		$classExperience = $classArray[0]['experience'];
		echo "<div><span class='field-label'>Class:</span> <span class='field-value'>$className $classLevel (Exp $classExperience)</span></div>";
	}
}

function formatMod($theNumber) {
	$statSign = "";
	if ($theNumber > 0) {
		$statSign = "+";
	}
	return $statSign.$theNumber;
}

function getStrHit($ability,$exStr) {
	$stat = 0;

	if ($ability == 1) $stat = -5;
	if ($ability >= 2 && $ability < 4) $stat = -3;
	if ($ability >= 4 && $ability < 6) $stat = -2;
	if ($ability >= 6 && $ability < 8) $stat = -1;
	if ($ability == 17) $stat = 1;
	if ($ability == 18) {
		if ($exStr < 51) $stat = 1;
		if ($exStr >= 51 && $exStr < 99) $stat = 2;
		if ($exStr == 100) $stat = 3;
	}
	if ($ability >= 19 && $ability < 21) $stat = 3;
	if ($ability >= 21 && $ability < 23) $stat = 4;
	if ($ability == 23) $stat = 5;
	if ($ability == 24) $stat = 6;
	if ($ability == 25) $stat = 7;

	return $stat;
}

function printStrHit($ability,$exStr) {
	return 'Hit: '.formatMod(getStrHit($ability,$exStr));
}

function getStrDmg($ability,$exStr) {
	$stat = 0;

	if ($ability == 1) $stat = -4;
	if ($ability == 2) $stat = -2;
	if ($ability >= 3 && $ability < 6) $stat = -1;
	if ($ability >= 16 && $ability < 18) $stat = +1;
	if ($ability == 18 && $exStr == 0) $stat = 2;
	if ($ability == 18 && $exStr > 0) {
		if ($exStr < 76) $stat = 3;
		if ($exStr >= 76 && $exStr < 91) $stat = 4;
		if ($exStr >= 91 && $exStr < 100) $stat = 5;
		if ($exStr == 100) $stat = 6;
	}
	if ($ability == 19) $stat = 7;
	if ($ability == 20) $stat = 8;
	if ($ability == 21) $stat = 9;
	if ($ability == 22) $stat = 10;
	if ($ability == 23) $stat = 11;
	if ($ability == 24) $stat = 12;
	if ($ability == 25) $stat = 14;

	return $stat;
}

function printStrDmg($ability,$exStr) {
	return 'Dmg: '.formatMod(getStrDmg($ability,$exStr));
}

function printStrDoors($ability,$exStr) {
	$stat = '1';

	if ($ability == 3) $stat = '2';
	if ($ability >= 4 && $ability < 6) $stat = '3';
	if ($ability >= 6 && $ability < 8) $stat = '4';
	if ($ability >= 8 && $ability < 10) $stat = '5';
	if ($ability >= 10 && $ability < 12) $stat = '6';
	if ($ability >= 12 && $ability < 14) $stat = '7';
	if ($ability >= 14 && $ability < 16) $stat = '8';
	if ($ability == 16) $stat = '9';
	if ($ability == 17) $stat = '10';
	if ($ability == 18 && $exStr == 0) $stat = '11';
	if ($ability == 18 && $exStr > 0) {
		if ($exStr < 51) $stat = '12';
		if ($exStr >= 51 && $exStr < 76) $stat = '13';
		if ($exStr >= 76 && $exStr < 91) $stat = '14';
		if ($exStr >= 91 && $exStr < 100) $stat = '15(3)';
		if ($exStr == 100) $stat = '16(6)';
	}
	if ($ability == 19) $stat = '16(8)';
	if ($ability == 20) $stat = '17(10)';
	if ($ability == 21) $stat = '17(12)';
	if ($ability == 22) $stat = '18(14)';
	if ($ability == 23) $stat = '18(16)';
	if ($ability == 24) $stat = '19(17)';
	if ($ability == 25) $stat = '19(18)';

	return 'Doors:'.$stat;
}

function printStrBarsGates($ability,$exStr) {
	$stat = 0;

	if ($ability >= 8 && $ability < 10) $stat = 1;
	if ($ability >= 10 && $ability < 12) $stat = 2;
	if ($ability >= 12 && $ability < 14) $stat = 4;
	if ($ability >= 14 && $ability < 16) $stat = 7;
	if ($ability == 16) $stat = 10;
	if ($ability == 17) $stat = 13;
	if ($ability == 18 && $exStr == 0) $stat = 16;
	if ($ability == 18 && $exStr > 0) {
		if ($exStr < 51) $stat = 20;
		if ($exStr >= 51 && $exStr < 76) $stat = 25;
		if ($exStr >= 76 && $exStr < 90) $stat = 30;
		if ($exStr >= 91 && $exStr < 100) $stat = 35;
		if ($exStr == 100) $stat = 40;
	}
	if ($ability == 19) $stat = 50;
	if ($ability == 20) $stat = 60;
	if ($ability == 21) $stat = 70;
	if ($ability == 22) $stat = 80;
	if ($ability == 23) $stat = 90;
	if ($ability == 24) $stat = 95;
	if ($ability == 25) $stat = 99;

	return 'Bars/Gates: '.$stat.'%';
}

function getDexMissileAttack($ability) {
	$stat = 0;

	if ($ability == 1) $stat = -6;
	if ($ability == 2) $stat = -4;
	if ($ability == 3) $stat = -3;
	if ($ability == 4) $stat = -2;
	if ($ability == 5) $stat = -1;
	if ($ability == 16) $stat = 1;
	if ($ability >= 17 && $ability < 19) $stat = 2;
	if ($ability >= 19 && $ability < 21) $stat = 3;
	if ($ability >= 22 && $ability < 24) $stat = 4;
	if ($ability >= 24) $stat = 5;

	return $stat;
}

function printDexMissileAttack($ability) {
	return 'Missile Attack Adj: '.formatMod(getDexMissileAttack($ability));
}

function getDexDefAdj($ability) {
	$stat = 0;

	if ($ability >= 1 && $ability < 3) $stat = 5;
	if ($ability == 3) $stat = 4;
	if ($ability == 4) $stat = 3;
	if ($ability == 5) $stat = 2;
	if ($ability == 6) $stat = 1;
	if ($ability == 15) $stat = -1;
	if ($ability == 16) $stat = -2;
	if ($ability == 17) $stat = -3;
	if ($ability >= 18 && $ability < 21) $stat = -4;
	if ($ability >= 21 && $ability < 24) $stat = -5;
	if ($ability >= 24) $stat = -6;

	return $stat;
}

function printDexDefAdj($ability) {
	return 'Defensive Adj: '.formatMod(getDexDefAdj($ability));
}

function printConPoisonAdj($ability) {
	$stat = 0;

	if ($ability == 1) $stat = -2;
	if ($ability == 1) $stat = -1;
	if ($ability >= 19 && $ability < 21) $stat = 1;
	if ($ability >= 21 && $ability < 23) $stat = 2;
	if ($ability >= 23 && $ability < 25) $stat = 3;
	if ($ability == 25) $stat = 4;

	return 'Poison Save Adj: '.formatMod($stat);
}

function printIntMaxSpellLevel($ability) {
	$stat = '--';

	if ($ability == 9) $stat = '4th';
	if ($ability >= 10 && $ability < 12) $stat = '5th';
	if ($ability >= 12 && $ability < 14) $stat = '6th';
	if ($ability >= 14 && $ability < 16) $stat = '7th';
	if ($ability >= 16 && $ability < 18) $stat = '8th';
	if ($ability >= 18) $stat = '9th';

	return 'Max Spell Level: '.$stat;
}

function printWisMagDefAdj($ability) {
	$stat = 0;

	if ($ability == 1) $stat = -6;
	if ($ability == 2) $stat = -4;
	if ($ability == 3) $stat = -3;
	if ($ability == 4) $stat = -2;
	if ($ability >= 5 && $ability < 8) $stat = -1;
	if ($ability == 15) $stat = 1;
	if ($ability == 16) $stat = 2;
	if ($ability == 17) $stat = 3;
	if ($ability >= 18) $stat = 4;

	return 'Mag. Def. Adj: '.formatMod($stat);
}

function clog($output) {
	echo "<script>console.log('$output')</script>";
}

function getFormattedDamage($weaponDmg, $dmgAdj) {
	$dmgDice = "";
	$dmgMod = 0;
	$formattedMod = "";



	if (strpos($weaponDmg, "-") !== false) {
		$dmgPart = explode("-", $weaponDmg);
		$dmgDice = $dmgPart[0];
		$dmgMod = 0 - (int) $dmgPart[1];
		$dmgMod += $dmgAdj;
	} elseif (strpos($weaponDmg, "+") !== false) {
		$dmgPart = explode("+", $weaponDmg);
		$dmgDice = $dmgPart[0];
		$dmgMod = (int) $dmgPart[1];
		$dmgMod += $dmgAdj;
	} else {
		$dmgDice = $weaponDmg;
		$dmgMod += $dmgAdj;
	}

	if ($dmgMod != 0) {
		$formattedMod = formatMod($dmgMod);
	}

	return $dmgDice.$formattedMod;
}

function getClassArray() {
	$classArray = [];

	if( have_rows('classes') ):
		$loop = 0;
		while ( have_rows('classes') ) : the_row();
			$classArray[$loop]["name"] = get_sub_field('class');
			$classArray[$loop]["level"] = get_sub_field('level');
			$classArray[$loop]["experience"] = get_sub_field('experience');
			$loop += 1;
		endwhile;
	else :
		// no rows found
	endif;

	return $classArray;
}


function getClassNameArray() {
	$classArray = [];

	if( have_rows('classes') ):
		while ( have_rows('classes') ) : the_row();
			$class = get_sub_field('class');
			array_push($classArray, $class);
		endwhile;
	else :
		// no rows found
	endif;

	return $classArray;
}
/* END MIKE YOUNG FUNCTIONS & CLASSES */
