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

/**
 * Load AD&D savesArray function
 */
require get_template_directory() . '/mikeyoung.org/php/add-saves-array.php';


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
			echo "<div>&nbsp;&nbsp;<span class='field-value'>$className $classLevel (".$classExperience."xp)</span></div>";
		}
	} else {
		$className = $classArray[0]['name'];
		$classLevel = $classArray[0]['level'];
		$classExperience = $classArray[0]['experience'];
		echo "<div><span class='field-label'>Class:</span> <span class='field-value'>$className $classLevel (".$classExperience."xp)</span></div>";
	}
}

function getClassLevel($requestClass,$classArray) {
	foreach ($classArray as $class) {
		if (strtolower($class['name']) == $requestClass) {
			return $class['level'];
		}
	}
}

function hasClassGroup($classNameArray, $classGroup) {
	foreach ($classNameArray as $className) {
		if (getClassGroup($className) == $classGroup) {
			return true;
		}
	}

	return false;
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
	if ($ability >= 16 && $ability < 18) $stat = 1;
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

function getClassGroup($class) {
	$class = strtolower($class);
	if ($class == 'fighter' || $class == 'ranger'  || $class == 'paladin' ) return 'warrior';
	if ($class == 'mage' || $class == 'illusionist' || $class == 'abjurer' || $class == 'conjurer' || $class == 'diviner' || $class == 'enchanter' || $class == 'invoker' || $class == 'necromancer' || $class == 'transmuter') return 'wizard';
	if ($class == 'cleric' || $class == 'druid') return 'priest';
	if ($class == 'thief' || $class == 'bard'  || $class == 'assassin' ) return 'rogue';
}

function getClassArray() {
	$classArray = [];

	if( have_rows('classes') ):
		$loop = 0;
		while ( have_rows('classes') ) : the_row();
			$className = get_sub_field('class');
			$xp = get_sub_field('experience');

			$classArray[$loop]["name"] = $className;
			$classArray[$loop]["level"] = getLevel( strtolower($className),$xp);
			$classArray[$loop]["experience"] = $xp;
			$classArray[$loop]["classGroup"] = getClassGroup(strtolower($className));
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
			$class = strtolower(get_sub_field('class'));
			array_push($classArray, $class);
		endwhile;
	else :
		// no rows found
	endif;

	return $classArray;
}

function getParryAdjustment($classArray,$isWarrior) {
	$parryAdjustment = 0;
	$characterLevel = 0;

	// get the highest level of all classes
	foreach ($classArray as $key=>$value) {
		if ($classArray[$key]['level'] > $characterLevel) {
			$characterLevel = $classArray[$key]['level'];
		}
	}

	$parryAdjustment = floor($characterLevel / 2);

	if ($parryAdjustment < 1) {
		$parryAdjustment = 1;
	}

	if ($isWarrior) {
		$parryAdjustment += 1;
	}

	$parryAdjustment = 0 - $parryAdjustment;

	return $parryAdjustment;
}

function printProficiencies($profArray) {
	$sheetprof = get_sub_field('proficiency');
	$rollUnder = 0;
	$slots = 0;
	$minSlots = 0;
	$abilityScore = "";
	$abilityMod = 0;
	$specialNote = "";

	foreach ($profArray as $prof) {
		if (strpos($prof['name'], $sheetprof) !== false) {
			$slots = get_sub_field('slots');
			$minSlots = (int) $prof['minSlots'];
			if ($prof['abilityMod'] != 'NA' && $prof['abilityMod'] != 'SP' ) {
				$abilityMod = (int) ($prof['abilityMod']);
			} else {
				$abilityMod = $prof['abilityMod'];
				if ($abilityMod == "SP") {
					$specialNote = "&dagger;";
				}
			}
			$abilityScore = get_field(strtolower($prof['ability']));
		}
	}

	if ($slots < $minSlots) {
		$rollUnder = "*";
	} else {
		if (is_int($abilityMod)) {
			$rollUnder = $abilityScore + $abilityMod + ($slots - $minSlots);
		} else {
			$rollUnder = $abilityScore + ($slots - $minSlots);
		}
	}

	echo "<li>$sheetprof($slots): $rollUnder<sup>$specialNote</sup></li>";
}

function getLevel($class,$xp) {
	$level = 0;
	$levelClass = $class;

	$levelTable = [
		'mage' => [
			0,
			2500,
			5000,
			10000,
			20000,
			40000,
			60000,
			90000,
			135000,
			250000,
			375000,
			750000,
			1125000,
			1500000,
			1875000,
			2250000,
			2625000,
			3000000,
			3375000,
			3750000
		],

		'fighter' => [
			0,
			2000,
			4000,
			8000,
			16000,
			32000,
			64000,
			125000,
			250000,
			500000,
			750000,
			1000000,
			1250000,
			1500000,
			1750000,
			2000000,
			2250000,
			2500000,
			2750000,
			3000000
		],

		'paladin' => [
			0,
			2250,
			4500,
			9000,
			18000,
			36000,
			75000,
			150000,
			300000,
			600000,
			900000,
			1200000,
			1500000,
			1800000,
			2100000,
			2400000,
			2700000,
			3000000,
			3300000,
			3600000
		],

		'cleric' => [
			0,
			1500,
			3000,
			6000,
			13000,
			27500,
			55000,
			110000,
			225000,
			450000,
			675000,
			900000,
			1125000,
			1350000,
			1575000,
			1800000,
			2025000,
			2250000,
			2475000,
			2700000
		],

		'druid' => [
			0,
			2000,
			4000,
			7500,
			12500,
			20000,
			35000,
			60000,
			90000,
			125000,
			200000,
			300000,
			750000,
			1500000,
			3000000,
			3500000,
			4000000,
			4500000,
			5000000,
			5500000
		],

		'thief' => [
			0,
			1250,
			2500,
			5000,
			10000,
			20000,
			40000,
			70000,
			110000,
			160000,
			220000,
			440000,
			660000,
			880000,
			1100000,
			1320000,
			1540000,
			1760000,
			1980000,
			2200000
		],
	];

	if ($class == 'paladin' || $class == 'ranger') $levelClass = 'paladin';
	if (getClassGroup($class) == 'wizard') $levelClass = 'mage';
	if ($class == 'thief' || $class == 'bard' || $class == 'assassin') $levelClass = 'thief';

	foreach ($levelTable[$levelClass] as $key => $value) {
		if ($xp >= $value) {
			$level = 1 + $key;
		}
	}
	return $level;
}

function getBaseThac0($classArray) {
	$thac0 = 20;

	$thac0TableArray = array(
		'priest' => [20,20,20,18,18,18,16,16,16,14,14,14,12,12,12,10,10,10,8,8],
		'rogue' => [20,20,19,19,18,18,17,17,16,16,15,15,14,14,13,13,12,12,11,11],
		'warrior' => [20,19,18,17,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1],
		'wizard' => [20,20,20,19,19,19,18,18,18,17,17,17,16,16,16,15,15,15,14,14],
	);

	foreach ($classArray as $class) {
		$classGroup = getClassGroup(strtolower($class['name']));
		$classLevelIndex = $class['level'] - 1;
		$classGroupThac0 = $thac0TableArray[$classGroup][$classLevelIndex];
		if ($classGroupThac0 < $thac0) $thac0 = $classGroupThac0;
	}

	return $thac0;
}

function getMovementRate($race) {
	$race = strtolower($race);

	$moveArray = [
		'human' => 12,	
		'dwarf' => 6,
		'elf' => 12,
		'gnome' => 6,
		'half-elf' => 12,
		'halfling' => 6,
	];

	return $moveArray[$race];
}

function getSave($saveName, $classArray, $savesArray) {
	$save = $classGroupSave = 99;

	foreach($classArray as $class) {
		$className = strtolower($class['name']);
		$classGroup = getClassGroup($className);
		$savesGroupArray = $savesArray[$classGroup];

		// get the highest level's' save in the current class
		foreach ($savesGroupArray as $key => $value) {
			if ($class['level'] >= $key) {
				$classGroupSave = $value[$saveName];	
			} else {
				break;
			}
		}
		
		if ($classGroupSave < $save) $save = $classGroupSave;
	}

	return $save;
}

function getBaseHeight($race) {
	$race = strtolower($race);

	switch ($race) {
		case 'dwarf':
			return '4\'0"';
		case 'elf':
			return '5\'0"';
		case 'gnome':
			return '3\'6"';
		case 'half-elf':
			return '5\'6"';
		case 'half-orc':
			return '6\'0"';
		case 'halfling':
			return '3\'6"';
		case 'human':
			return '6\'0"';
	}
}

function getBaseWeight($race) {
	$race = strtolower($race);

	switch ($race) {
		case 'dwarf':
			return 135;
		case 'elf':
			return 95;
		case 'gnome':
			return 80;
		case 'half-elf':
			return 135;
		case 'half-orc':
			return 165;
		case 'halfling':
			return 60;
		case 'human':
			return 155;
	}
}

function classInClassArray($requestClass,$classArray) {
	foreach ($classArray as $class) {
		$className = strtolower($class['name']);
		$requestClassName = strtolower($requestClass);
		if ($className == $requestClassName) {
			return $class;
		}
	}

	return false;
}

function getBaseAttackRate($classNameArray,$isWarrior,$classArray) {
	if ($isWarrior) {
		$warriorLevel = 0;
		$attackRate = '';

		if (in_array('fighter',$classNameArray)) {
			$classLevel = getClassLevel('fighter',$classArray);
			if ($warriorLevel < $classLevel) {
				$warriorLevel = $classLevel;
			}
		}

		if (in_array('paladin',$classNameArray)) {
			$classLevel = getClassLevel('paladin',$classArray);
			if ($warriorLevel < $classLevel) {
				$warriorLevel = $classLevel;
			}
		}

		if (in_array('ranger',$classNameArray)) {
			$classLevel = getClassLevel('ranger',$classArray);
			if ($warriorLevel < $classLevel) {
				$warriorLevel = $classLevel;
			}
		}

		$warriorArray = [
			1 => '1/round',
			7 => '3/2 rounds',
			13 => '2/round'
		];

		foreach ($warriorArray as $key => $value) {
			if ($warriorLevel >= $key) {
				$attackRate = $value;
			}
		}

		return $attackRate;
	} else {
		return '1/round';
	}
}

function getSpecialistAttackRate($classArray,$weapon) {
	$fightlerLevel = classInClassArray('fighter',$classArray)['level'];
	$newAttackRate = 0;
	$weaponName = strtolower($weapon['name']);
	$meleeAttackRate = 0;
	$thrownAttackRate = 0;

	/*
	Row keys are minimum fighter level

	Columns are:
		0 Melee Weapon,
		1 Light Crossbow,
		2 Heavy Crossbow,
		3 Thrown Dagger
		4 Thrown Dart
		5 Other
	*/	
	$specialistAttacks = [
		1 => ['3/2','1/1','1/2','3/1','4/1','3/2'],
		7 => ['2/1','3/2','1/1','4/1','5/1','2/1'],
		13 => ['5/2','2/1','3/2','5/1','6/1','5/2'],
	];

	foreach ($specialistAttacks as $key => $value) {
		if ($fightlerLevel >= $key) {
			if ($weapon['attackType'] == 'melee') {
				$newAttackRate = $value[0];
			} elseif ($weapon['attackType'] == 'both') {
				$meleeAttackRate = $value[0];
				if ($weaponName == 'dagger') {
					$thrownAttackRate = $value[3];
				} elseif ($weaponName == 'dart') {
					$thrownAttackRate = $value[4];
				} else {
					$thrownAttackRate = $value[5];
				}

				$newAttackRate = "M: $meleeAttackRate<br>R: $thrownAttackRate";
			} elseif ($weaponName == 'hand crossbow' || $weaponName == 'light crossbow') {
				$newAttackRate = $value[1];
			} elseif ($weaponName == 'heavy crossbow') {
				$newAttackRate = $value[2];
			} elseif ($weapon['thrown'] == 'yes') {
				$newAttackRate = $value[5];
			} else {
				$newAttackRate = 1;
			}
		}
	}

	return $newAttackRate;
}

function getPaladinAbilityArray($level,$column) {
	/*
	Rows are ranger levels, starting at 9.

	Columns are:
		0 Casting Level,
		1 Level 1 Spells,
		2 Level 2 Spells,
		3 Level 3 Spells,
		4 Level 4 Spells
	*/

	$classAbilityArray = [
		[1,1,0,0,0],
		[2,2,0,0,0],
		[3,2,1,0,0],
		[4,2,2,0,0],
		[5,2,2,1,0],
		[6,3,2,1,0],
		[7,3,2,1,1],
		[8,3,3,2,1],
		[9,3,3,3,1],
		[9,3,3,3,1],
		[9,3,3,3,2],
		[9,3,3,3,3],
	];

	$levelOffset = $level - 9;

	if ($level >= 9 && $level < 21) {
		return $classAbilityArray[$levelOffset][$column];
	} else {
		return -1;
	}
}

function getRangerAbilityArray($level,$column) {
	/*
	Rows are ranger levels, starting at 1.

	Columns are:
		0 Hide in Shadows,
		1 Move Silently,
		2 Casting Level,
		3 Level 1 Spells,
		4 Level 2 Spells,
		5 Level 3 Spells
	*/

	$classAbilityArray = [
		[10,15,0,0,0,0],
		[15,21,0,0,0,0],
		[20,27,0,0,0,0],
		[25,33,0,0,0,0],
		[31,40,0,0,0,0],
		[37,47,0,0,0,0],
		[43,55,0,0,0,0],
		[49,62,1,1,0,0],
		[56,70,2,2,0,0],
		[63,78,3,2,1,0],
		[70,86,4,2,2,0],
		[77,94,5,2,2,1],
		[85,99,6,3,2,1],
		[93,99,7,3,2,2],
		[99,99,8,3,3,2],
		[99,99,9,3,3,3],
	];

	$levelOffset = $level - 1;

	if ($level < 17) {
		return $classAbilityArray[$levelOffset][$column];
	} else {
		return -1;
	}
}
/* END MIKE YOUNG FUNCTIONS & CLASSES */