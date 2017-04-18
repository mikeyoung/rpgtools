<?php

function getWeaponsArray() {
	$weaponsArray = [
        array(
            "name" => "Battle Axe",
            "size" => "M",
            "damageType" => "S",
            "speed" => 7,
            "damageSM" => "1d8",
            "damageL" => "1d8",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Blowgun w/ Barbed Dart",
            "size" => "S",
            "damageType" => "P",
            "speed" => 5,
            "damageSM" => "1d3",
            "damageL" => "1d2",
            "rof" => "2/1",
            "rangeS" => "10",
            "rangeM" => "20",
            "rangeL" => "30",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Blowgun w/ Needle",
            "size" => "S",
            "damageType" => "P",
            "speed" => 5,
            "damageSM" => "1",
            "damageL" => "1",
            "rof" => "2/1",
            "rangeS" => "10",
            "rangeM" => "20",
            "rangeL" => "30",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Short Bow w/ Sheaf Arrow",
            "size" => "M",
            "damageType" => "P",
            "speed" => 7,
            "damageSM" => "1d8",
            "damageL" => "1d8",
            "rof" => "2/1",
            "rangeS" => "50",
            "rangeM" => "100",
            "rangeL" => "150",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Long Bow w/ Sheaf Arrow",
            "size" => "L",
            "damageType" => "P",
            "speed" => 8,
            "damageSM" => "1d8",
            "damageL" => "1d8",
            "rof" => "2/1",
            "rangeS" => "50",
            "rangeM" => "100",
            "rangeL" => "170",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Long Bow w/ Flight Arrow",
            "size" => "L",
            "damageType" => "P",
            "speed" => 8,
            "damageSM" => "1d6",
            "damageL" => "1d6",
            "rof" => "2/1",
            "rangeS" => "70",
            "rangeM" => "140",
            "rangeL" => "210",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Composite Short Bow w/ Sheaf Arrow",
            "size" => "M",
            "damageType" => "P",
            "speed" => 6,
            "damageSM" => "1d8",
            "damageL" => "1d8",
            "rof" => "2/1",
            "rangeS" => "50",
            "rangeM" => "100",
            "rangeL" => "180",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Composite Long Bow w/ Sheaf Arrow",
            "size" => "L",
            "damageType" => "P",
            "speed" => 7,
            "damageSM" => "1d8",
            "damageL" => "1d8",
            "rof" => "2/1",
            "rangeS" => "40",
            "rangeM" => "80",
            "rangeL" => "170",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Composite Long Bow w/ Flight Arrow",
            "size" => "L",
            "damageType" => "P",
            "speed" => 7,
            "damageSM" => "1d6",
            "damageL" => "1d6",
            "rof" => "2/1",
            "rangeS" => "60",
            "rangeM" => "120",
            "rangeL" => "210",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Club",
            "size" => "M",
            "damageType" => "B",
            "speed" => 4,
            "damageSM" => "1d6",
            "damageL" => "1d3",
            "rof" => "1",
            "rangeS" => "10",
            "rangeM" => "20",
            "rangeL" => "30",
        	"attackType" => "both",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Hand Crossbow",
            "size" => "S",
            "damageType" => "P",
            "speed" => 5,
            "damageSM" => "1d3",
            "damageL" => "1d2",
            "rof" => "1",
            "rangeS" => "20",
            "rangeM" => "40",
            "rangeL" => "60",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Light Crossbow",
            "size" => "M",
            "damageType" => "P",
            "speed" => 7,
            "damageSM" => "1d4",
            "damageL" => "1d4",
            "rof" => "1",
            "rangeS" => "60",
            "rangeM" => "120",
            "rangeL" => "180",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Heavy Crossbow",
            "size" => "M",
            "damageType" => "P",
            "speed" => 10,
            "damageSM" => "1d4+1",
            "damageL" => "1d6+1",
            "rof" => "1/2",
            "rangeS" => "80",
            "rangeM" => "160",
            "rangeL" => "240",
        	"attackType" => "ranged",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Dagger",
            "size" => "S",
            "damageType" => "P",
            "speed" => 2,
            "damageSM" => "1d4",
            "damageL" => "1d3",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "both",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Dirk",
            "size" => "S",
            "damageType" => "P",
            "speed" => 2,
            "damageSM" => "1d4",
            "damageL" => "1d3",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Dart",
            "size" => "S",
            "damageType" => "P",
            "speed" => 2,
            "damageSM" => "1d3",
            "damageL" => "1d2",
            "rof" => "3/1",
            "rangeS" => "10",
            "rangeM" => "20",
            "rangeL" => "40",
        	"attackType" => "ranged",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Footman's Flail",
            "size" => "M",
            "damageType" => "B",
            "speed" => 7,
            "damageSM" => "1d6+1",
            "damageL" => "2d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Footman's Mace",
            "size" => "M",
            "damageType" => "B",
            "speed" => 7,
            "damageSM" => "1d6+1",
            "damageL" => "1d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Footman's Pick",
            "size" => "M",
            "damageType" => "P",
            "speed" => 7,
            "damageSM" => "1d6+1",
            "damageL" => "2d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Hand/Throwing Axe",
            "size" => "M",
            "damageType" => "S",
            "speed" => 4,
            "damageSM" => "1d6",
            "damageL" => "1d4",
            "rof" => "1",
            "rangeS" => "10",
            "rangeM" => "20",
            "rangeL" => "30",
        	"attackType" => "both",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Harpoon",
            "size" => "L",
            "damageType" => "P",
            "speed" => 7,
            "damageSM" => "2d4",
            "damageL" => "2d6",
            "rof" => "1",
            "rangeS" => "10",
            "rangeM" => "20",
            "rangeL" => "30",
        	"attackType" => "ranged",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Horseman's Flail",
            "size" => "M",
            "damageType" => "B",
            "speed" => 6,
            "damageSM" => "1d4+1",
            "damageL" => "1d4+1",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Horseman's Mace",
            "size" => "M",
            "damageType" => "B",
            "speed" => 6,
            "damageSM" => "1d6",
            "damageL" => "1d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Horseman's Pick",
            "size" => "M",
            "damageType" => "P",
            "speed" => 5,
            "damageSM" => "1d4+1",
            "damageL" => "1d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Javelin",
            "size" => "M",
            "damageType" => "P",
            "speed" => 4,
            "damageSM" => "1d6",
            "damageL" => "1d6",
            "rof" => "1",
            "rangeS" => "20",
            "rangeM" => "40",
            "rangeL" => "60",
        	"attackType" => "ranged",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Knife",
            "size" => "S",
            "damageType" => "P/S",
            "speed" => 2,
            "damageSM" => "1d3",
            "damageL" => "1d2",
            "rof" => "2/1",
            "rangeS" => "10",
            "rangeM" => "20",
            "rangeL" => "30",
        	"attackType" => "both",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Heavy Horse Lance",
            "size" => "L",
            "damageType" => "P",
            "speed" => 8,
            "damageSM" => "1d8+1",
            "damageL" => "3d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Light Horse Lance",
            "size" => "L",
            "damageType" => "P",
            "speed" => 6,
            "damageSM" => "1d6",
            "damageL" => "1d8",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Jousting Lance",
            "size" => "L",
            "damageType" => "P",
            "speed" => 10,
            "damageSM" => "1d3-1",
            "damageL" => "1d2-1",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Medium Horse Lance",
            "size" => "L",
            "damageType" => "P",
            "speed" => 7,
            "damageSM" => "1d6+1",
            "damageL" => "2d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Mancatcher",
            "size" => "L",
            "damageType" => "n/a",
            "speed" => 7,
            "damageSM" => "n/a",
            "damageL" => "n/a",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "no"
        ),

        array(
            "name" => "Morning Star",
            "size" => "M",
            "damageType" => "P/B",
            "speed" => 7,
            "damageSM" => "2d4",
            "damageL" => "1d6+1",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Awl Pike",
            "size" => "L",
            "damageType" => "P",
            "speed" => 13,
            "damageSM" => "1d6",
            "damageL" => "1d12",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Bardiche",
            "size" => "S",
            "damageType" => "S",
            "speed" => 9,
            "damageSM" => "2d4",
            "damageL" => "2d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Bec de Corbin",
            "size" => "L",
            "damageType" => "P/B",
            "speed" => 9,
            "damageSM" => "1d8",
            "damageL" => "1d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Bill-Guisarme",
            "size" => "L",
            "damageType" => "P/S",
            "speed" => 10,
            "damageSM" => "2d4",
            "damageL" => "1d10",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Fauchard",
            "size" => "L",
            "damageType" => "P/S",
            "speed" => 8,
            "damageSM" => "1d6",
            "damageL" => "1d8",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Fauchard-Fork",
            "size" => "L",
            "damageType" => "P/S",
            "speed" => 8,
            "damageSM" => "1d8",
            "damageL" => "1d10",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Glaive",
            "size" => "L",
            "damageType" => "S",
            "speed" => 8,
            "damageSM" => "1d6",
            "damageL" => "1d10",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Glaive-Guisarme",
            "size" => "L",
            "damageType" => "P/S",
            "speed" => 9,
            "damageSM" => "2d4",
            "damageL" => "2d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Guisarme",
            "size" => "L",
            "damageType" => "S",
            "speed" => 8,
            "damageSM" => "2d4",
            "damageL" => "1d8",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Guisarme-Voulge",
            "size" => "L",
            "damageType" => "P/S",
            "speed" => 10,
            "damageSM" => "2d4",
            "damageL" => "2d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Halberd",
            "size" => "L",
            "damageType" => "P/S",
            "speed" => 9,
            "damageSM" => "1d10",
            "damageL" => "2d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Hook-Fauchard",
            "size" => "L",
            "damageType" => "P/S",
            "speed" => 9,
            "damageSM" => "1d4",
            "damageL" => "1d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Lucern Hammer",
            "size" => "L",
            "damageType" => "P/B",
            "speed" => 9,
            "damageSM" => "2d4",
            "damageL" => "1d6",
            "rof" => "1",
            "rangeS" => "10",
            "rangeM" => "20",
            "rangeL" => "30",
        	"attackType" => "both",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Military Fork",
            "size" => "L",
            "damageType" => "P",
            "speed" => 7,
            "damageSM" => "1d8",
            "damageL" => "2d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Partisian",
            "size" => "L",
            "damageType" => "P",
            "speed" => 9,
            "damageSM" => "1d6",
            "damageL" => "1d6+1",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Ranseur",
            "size" => "L",
            "damageType" => "P",
            "speed" => 8,
            "damageSM" => "2d4",
            "damageL" => "2d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Spetum",
            "size" => "L",
            "damageType" => "P",
            "speed" => 8,
            "damageSM" => "1d6+1",
            "damageL" => "2d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Voulge",
            "size" => "L",
            "damageType" => "S",
            "speed" => 10,
            "damageSM" => "2d4",
            "damageL" => "2d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Quarterstaff",
            "size" => "L",
            "damageType" => "B",
            "speed" => 4,
            "damageSM" => "1d6",
            "damageL" => "1d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Scourge",
            "size" => "S",
            "damageType" => "n/a",
            "speed" => 5,
            "damageSM" => "1d4",
            "damageL" => "1d2",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Sickle",
            "size" => "S",
            "damageType" => "S",
            "speed" => 4,
            "damageSM" => "1d4+1",
            "damageL" => "1d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Sling w/ Bullet",
            "size" => "S",
            "damageType" => "B",
            "speed" => 6,
            "damageSM" => "1d4+1",
            "damageL" => "1d6+1",
            "rof" => "1",
            "rangeS" => "50",
            "rangeM" => "100",
            "rangeL" => "200",
        	"attackType" => "ranged",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Sling w/ Stone",
            "size" => "S",
            "damageType" => "B",
            "speed" => 6,
            "damageSM" => "1d4",
            "damageL" => "1d4",
            "rof" => "1",
            "rangeS" => "40",
            "rangeM" => "80",
            "rangeL" => "160",
        	"attackType" => "ranged",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Spear",
            "size" => "M",
            "damageType" => "P",
            "speed" => 6,
            "damageSM" => "1d6",
            "damageL" => "1d8",
            "rof" => "1",
            "rangeS" => "10",
            "rangeM" => "20",
            "rangeL" => "30",
        	"attackType" => "both",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Staff Sling w/ Bullet",
            "size" => "M",
            "damageType" => "B",
            "speed" => 11,
            "damageSM" => "1d4+1",
            "damageL" => "1d6+1",
            "rof" => "2/1",
            "rangeS" => "50",
            "rangeM" => "100",
            "rangeL" => "200",
        	"attackType" => "ranged",
        	"strDmg" => "yes"
        ),
        
        array(
            "name" => "Staff Sling w/ Stone",
            "size" => "M",
            "damageType" => "B",
            "speed" => 11,
            "damageSM" => "1d4",
            "damageL" => "1d4",
            "rof" => "2/1",
            "rangeS" => "n/a",
            "rangeM" => "30-60",
            "rangeL" => "90",
        	"attackType" => "ranged",
        	"strDmg" => "yes"
        ),
        
        array(
            "name" => "Bastard Sword (One Handed)",
            "size" => "M",
            "damageType" => "S",
            "speed" => 6,
            "damageSM" => "1d8",
            "damageL" => "1d12",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),
        
        array(
            "name" => "Bastard Sword (Two Handed)",
            "size" => "M",
            "damageType" => "S",
            "speed" => 8,
            "damageSM" => "2d4",
            "damageL" => "2d8",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),
        
        array(
            "name" => "Broad Sword",
            "size" => "M",
            "damageType" => "S",
            "speed" => 5,
            "damageSM" => "2d4",
            "damageL" => "1d6+1",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),
        
        array(
            "name" => "Khopesh",
            "size" => "M",
            "damageType" => "S",
            "speed" => 9,
            "damageSM" => "2d4",
            "damageL" => "1d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Long Sword",
            "size" => "M",
            "damageType" => "S",
            "speed" => 5,
            "damageSM" => "1d8",
            "damageL" => "1d12",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Scimitar",
            "size" => "M",
            "damageType" => "S",
            "speed" => 5,
            "damageSM" => "1d8",
            "damageL" => "1d8",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Short Sword",
            "size" => "S",
            "damageType" => "P",
            "speed" => 3,
            "damageSM" => "1d6",
            "damageL" => "1d8",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Two-Handed Sword",
            "size" => "L",
            "damageType" => "S",
            "speed" => 10,
            "damageSM" => "1d10",
            "damageL" => "3d6",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Trident",
            "size" => "L",
            "damageType" => "P",
            "speed" => 7,
            "damageSM" => "1d6+1",
            "damageL" => "3d4",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Warhammer",
            "size" => "M",
            "damageType" => "B",
            "speed" => 4,
            "damageSM" => "1d4+1",
            "damageL" => "1d4",
            "rof" => "1",
            "rangeS" => "10",
            "rangeM" => "20",
            "rangeL" => "30",
        	"attackType" => "both",
        	"strDmg" => "yes"
        ),

        array(
            "name" => "Whip",
            "size" => "M",
            "damageType" => "n/a",
            "speed" => 8,
            "damageSM" => "1d2",
            "damageL" => "1",
            "rof" => "n/a",
            "rangeS" => "n/a",
            "rangeM" => "n/a",
            "rangeL" => "n/a",
        	"attackType" => "melee",
        	"strDmg" => "yes"
        ),

    ];

    return $weaponsArray;
}

?>
