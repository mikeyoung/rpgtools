<?php
    if (isset($_GET['debug']) && $_GET['debug'] == 'true') {

		echo '<br /><h3>DEBUG WEAPONS LIST</h3><br />';
		foreach ($weaponsArray as $weapon) {
			echo $weapon['name'].'<br />';
		}

		echo '<br /><h3>DEBUG ARMOR LIST</h3><br />';
		foreach ($armorArray as $armor) {
			echo $armor['name'].'<br />';
		}

		echo '<br /><h3>NWP Array Builder</h3><br />';
		$nwpArray = [
			["Agriculture","1","Intelligence","0"],
			["Alertness","1","Wisdom","+1"],
			["Ancient_History","1","Intelligence","–1"],
			["Animal_Handling","1","Wisdom","–1"],
			["Animal_Lore","1","Intelligence","0"],
			["Animal_Training","1","Wisdom","0"],
			["Appraising","1","Intelligence","0"],
			["Armorer","2","Intelligence","–2"],
			["Artistic_Ability","1","Wisdom","0"],
			["Astrology","2","Intelligence","0"],
			["Begging","1","Charisma","SP"],
			["Blacksmithing","1","Strength","0"],
			["Blind-fighting","2","NA","NA"],
			["Bowyer/Fletcher","1","Dexterity","–1"],
			["Brewing","1","Intelligence","0"],
			["Carpentry","1","Strength","0"],
			["Chanting","1","Charisma","+2"],
			["Charioteering","1","Dexterity","+2"],
			["Close-Quarter_Fighting","2","Dex","0"],
			["Cobbling","1","Dexterity","0"],
			["Cooking","1","Intelligence","0"],
			["Dancing","1","Dexterity","0"],
			["Direction_Sense","1","Wisdom","+1"],
			["Disguise","1","Charisma","–1"],
			["Endurance","2","Constitution","0"],
			["Engineering","2","Intelligence","–3"],
			["Etiquette","1","Charisma","0"],
			["Fire-building","1","Wisdom","–1"],
			["Fishing","1","Wisdom","–1"],
			["Forgery","1","Dexterity","–1"],
			["Gaming","1","Charisma","0"],
			["Gem_Cutting","2","Dexterity","–2"],
			["Healing","2","Wisdom","–2"],
			["Heraldry","1","Intelligence","0"],
			["Herbalism","2","Intelligence","-2"],
			["Herbalism","2","Intelligence","–2"],
			["Hunting","1","Wisdom","–1"],
			["Information_Gathering","1","Intelligence","SP"],
			["Intimidation","1","Strength","/","Charisma","0"],
			["Juggling","1","Dexterity","–1"],
			["Jumping","1","Strength","0"],
			["Languages,_Ancient","1","Intelligence","0"],
			["Languages,_Modern","1","Intelligence","0"],
			["Leatherworking","1","Intelligence","0"],
			["Local_History","1","Charisma","0"],
			["Looting","1","Dexterity","0"],
			["Mining","2","Wisdom","–3"],
			["Mountaineering","1","NA","NA"],
			["Musical_Instrument","1","Dexterity","–1"],
			["Navigation","1","Intelligence","–2"],
			["Observation","1","Intelligence","0"],
			["Pottery","1","Dexterity","–2"],
			["Reading_Lips","2","Intelligence","–2"],
			["Reading/Writing","1","Intelligence","+1"],
			["Religion","1","Wisdom","0"],
			["Riding,_Airborne","2","Wisdom","–2"],
			["Riding,_Land-based","1","Wisdom","+3"],
			["Rope_Use","1","Dexterity","0"],
			["Running","1","Constitution","–6"],
			["Seamanship","1","Dexterity","+1"],
			["Seamstress/Tailor","1","Dexterity","–1"],
			["Set_Snares","1","Dexterity","–1"],
			["Singing","1","Charisma","0"],
			["Spellcraft","1","Intelligence","–2"],
			["Stonemasonry","1","Strength","–2"],
			["Survival","2","Intelligence","0"],
			["Swimming","1","Strength","0"],
			["Tightrope_Walking","1","Dexterity","0"],
			["Tracking","2","Wisdom","0"],
			["Trailing","1","Dexterity","SP"],
			["Tumbling","1","Dexterity","0"],
			["Ventriloquism","1","Intelligence","–2"],
			["Voice_Mimicry","2","Charisma","SP"],
			["Weaponsmithing","3","Intelligence","–3"],
			["Weather_Sense","1","Wisdom","–1"],
			["Weaving","1","Intelligence","–1"],
		];

		echo '$nwpArray = [<br />';
		foreach ($nwpArray as $nwp) {
			echo "
				array(\n
					'name' => '$nwp[0]',<br />
					'minSlots' => '$nwp[1]',<br />
					'ability' => '$nwp[2]',<br />
					'abilityMod' => '$nwp[3]',<br />
				),<br />
			";
		}
		echo '];<br />';

		echo '<br /><h3>WP Array Builder</h3><br />';
		$wpArray = [
			["Awl Pike", 1],
			["Bardiche", 1],
			["Bastard Sword", 1],
			["Battle Axe", 1],
			["Bec de Corbin", 1],
			["Bill-Guisarme", 1],
			["Blowgun", 1],
			["Broad Sword", 1],
			["Club", 1],
			["Composite Long Bow", 2],
			["Composite Short Bow", 2],
			["Dagger", 1],
			["Dart", 1],
			["Dirk", 1],
			["Fauchard", 1],
			["Fauchard-Fork", 1],
			["Footman's Flail", 1],
			["Footman's Mace", 1],
			["Footman's Pick", 1],
			["Glaive", 1],
			["Glaive-Guisarme", 1],
			["Guisarme", 1],
			["Guisarme-Voulge", 1],
			["Halberd", 1],
			["Hand Crossbow", 1],
			["Hand/Throwing Axe", 1],
			["Harpoon", 1],
			["Heavy Crossbow", 1],
			["Heavy Horse Lance", 1],
			["Hook-Fauchard", 1],
			["Horseman's Flail", 1],
			["Horseman's Mace", 1],
			["Horseman's Pick", 1],
			["Javelin", 1],
			["Jousting Lance", 1],
			["Khopesh", 1],
			["Knife", 1],
			["Light Crossbow", 1],
			["Light Horse Lance", 1],
			["Long Bow", 2],
			["Long Sword", 1],
			["Lucern Hammer", 1],
			["Mancatcher", 1],
			["Medium Horse Lance", 1],
			["Military Fork", 1],
			["Morning Star", 1],
			["Partisian", 1],
			["Quarterstaff", 1],
			["Ranseur", 1],
			["Scimitar", 1],
			["Scourge", 1],
			["Short Bow", 2],
			["Short Sword", 1],
			["Sickle", 1],
			["Sling", 1],
			["Spear", 1],
			["Spetum", 1],
			["Staff Sling", 1],
			["Trident", 1],
			["Two-Handed Sword", 1],
			["Voulge", 1],
			["Warhammer", 1],
			["Whip", 1],
		];

		echo '$wpArray = [<br />';
		foreach ($wpArray as $wp) {
			echo "
				array(\n
					'name' => '$wp[0]',<br />
					'minSlots' => '$wp[1]',<br />
				),<br />
			";
		}
		echo '];<br />';
	}
?>

