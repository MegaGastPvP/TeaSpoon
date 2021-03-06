<?php

/**
 *
 * MMP""MM""YMM               .M"""bgd
 * P'   MM   `7              ,MI    "Y
 *      MM  .gP"Ya   ,6"Yb.  `MMb.   `7MMpdMAo.  ,pW"Wq.   ,pW"Wq.`7MMpMMMb.
 *      MM ,M'   Yb 8)   MM    `YMMNq. MM   `Wb 6W'   `Wb 6W'   `Wb MM    MM
 *      MM 8M""""""  ,pm9MM  .     `MM MM    M8 8M     M8 8M     M8 MM    MM
 *      MM YM.    , 8M   MM  Mb     dM MM   ,AP YA.   ,A9 YA.   ,A9 MM    MM
 *    .JMML.`Mbmmd' `Moo9^Yo.P"Ybmmd"  MMbmmd'   `Ybmd9'   `Ybmd9'.JMML  JMML.
 *                                     MM
 *                                   .JMML.
 * This file is part of TeaSpoon.
 *
 * TeaSpoon is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * TeaSpoon is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with TeaSpoon.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author CortexPE
 * @link https://CortexPE.xyz
 *
 */

declare(strict_types = 1);

namespace CortexPE;

class Splash {

	// tbh, I just added splashes for fun... never thought I would be making a completely different class just for splash texts xD

	// THE RANDOM SPLASH Generator!!!!!!

	// A lot of the Nouns and Verbs are from: http://nonsense.x2d.org/script.js
	// Some are removed due to how long they are, and some have vulgar / NSFW word(s).
	// But still, Thanks to the author of the script for most of the random splashes...

	private static $RANDOM_NOUN = [
		"The sky",
		"Everything and more",
		"The clear star that is yesterday",
		"Tomorrow",
		"An old apple",
		"Camouflage paint",
		"A sound you heard",
		"A setback of the heart",
		"The body of mind",
		"A classical composition",
		"Another day",
		"Chair number eleven",
		"Nihilism",
		"Tranquility",
		"Wondrous awe",
		"That memory we used to share",
		"Nothing of importance",
		"Clear water",
		"Gasoline",
		"Sixty-four",
		"Nothingness",
		"The flow of quizzes",
		"An enigma",
		"Stupidity",
		"Love",
		"An idea",
		"The last sentence you saw",
		"The person you were before",
		"A flailing monkey",
		"Organisational culture",
		"Trickery",
		"A caring mother",
		"A sickingly prodigous profile",
		"A fly",
		"Two-finger John",
		"Sevenworm",
		"Pinocchio",
		"Lucky number slevin",
		"A shooting star",
		"Whiskey on the table",
		"A cranky old lady",
		"Stew and rum",
		"Spam",
		"Lonely Henry",
		"Style",
		"Fashion",
		"A principal idea",
		"Too long a stick",
		"A glittering gem",
		"That way",
		"Significant understanding",
		"Passion or serendipity",
		"A late night",
		"A stumbling first step",
		"That stolen figurine",
		"A token of gratitude",
		"A small mercy",
		"Utter nonsense",
		"Colorful clay",
		"Insignificance",
		"The light at the end of the tunnel",
		"The other side",
		"Abstraction",
		"Rock music",
		"A passionate evening",
		"A great silence",
		"A river a thousand paces wide",
		"The legend of the raven's roar",
		"Enqoyism",
		"The Audacity",
	];

	private static $RANDOM_VERB = [
		"runs through everything.",
		"is ever present.",
		"approaches at high velocity!",
		"likes to take a walk in the park.",
		"is still not very coherent.",
		"loves to love.",
		"would die for a grapefruit!",
		"sickens me.",
		"has your skin crawling.",
		"makes people shiver.",
		"is always a pleasure.",
		"slips on a banana peel.",
		"is nothing at all?",
		"doesn't like paying taxes.",
		"is not yet ready to die.",
		"is omni-present, much like candy.",
		"is good for you.",
		"does not make any sense.",
		"would scare any linguist away.",
		"sees the sun.",
		"is running away.",
		"jumps both ways.",
		"can get both high and low.",
		"comes asking for bread.",
		"says hello.",
		"tenderly sees to her child.",
		"wants to go to hell.",
		"is often pregnant.",
		"is often one floor above you.",
		"wants to set things right.",
		"tells the tale of towers.",
		"stole the goods.",
		"woke the prime minister.",
		"shot the sheriff.",
		"lay down on the riverbed.",
		"asked you a question?",
		"sat down once more.",
		"revels in authority.",
		"stands upon somebody else's legs.",
		"visits Japan in the winter.",
		"says goodbye to the shooter.",
		"welcomes spring!",
		"loves a good joke!",
		"is a storyteller without equal.",
		"rains heavily.",
		"is like a summer breeze.",
		"wanted the TRUTH!",
		"set a treehouse on fire.",
		"bathes in sunlight.",
		"ever stuns the onlooker.",
		"brings both pleasure and pain.",
		"takes the world for granted.",
		"is not enough.",
		"was always the second best.",
		"is not all that great.",
		"shakes beliefs widely held.",
		"always strikes for the heart.",
	];

	private static $TEASPOON_SPLASHES = [
		'Low-Calorie blend', // first ever teaspoon splash text... and that's why its in ' not " xd
		"Don't panic! Have a cup of tea",
		"In England, Everything stops for tea",
		"POWERED By Dubstep", "A E S T H E T H I C S",
		"WHO PUT THAT HERE?",
		"#BlameShoghi",
		"ERMAHGERD",
		"Written in PHP!",
		"This is a splash text.",
		"YOUR NAME",
		"ONE LOVE",
		"I KILLED THE SHERIFF... But not the deputy.",
		"Oops.",
		"rip.",
		"Fixed Typo!",
		"Fixed Typo! 2",
		"Fixed Typo! 2 FINAL",
		"Fixed Typo! 2 FINALFINAL",
		"Fixed Typo! 2 FINALFINALFINAL",
		"This splash text is a joke.",
		"How may I help you?",
		"SUPERCALIFRAGILISTICEXPIALIDOCIOUS!",
		"Well this exists.",
		"IE EXISTS TO DOWNLOAD CHROME!",
		"I'm sorry Dave. I'm afraid I can't do that.",
		"I might have killed it.",
		"PUNCHING TREES!",
		"Bug Fix",
		"Bug Fix 2",
		"Bug Fix 2 FINAL",
		"Bug Fix 2 FINALFINAL",
		"Bug Fix 2 FINALFINANFINAL",
		"We have VCS Systems. :P",
		"We have *crappy* VCS Systems. :P",
		":shrug:",
		"Fukkit!",
		"Cortex loves J***** <3",
		"§4R§cA§6I§eN§2B§aO§bW§3 T§1E§9X§dT§5!",
		"@TheAz928 is notorious for HardCoding values!",
	];

	private static $CHRISTMAS_SPLASHES = [
		"Ho Ho Ho...",
		"Merry Christmas",
	];

	public static function getRandomSplash(): string{
		if(self::isChristmastide()){
			return self::$CHRISTMAS_SPLASHES[array_rand(self::$CHRISTMAS_SPLASHES)];
		}
		if(self::isCortexsBirthday()){
			return "Happy birthday Cortex!"; // lolz
		}
		if(mt_rand(0, 100) <= 50){
			get_random: // lol
			$rand = self::getRandomSentence();
			if(strlen($rand) <= 32){ // max length 32
				return $rand;
			}
			goto get_random;
		}

		return self::getRandomTSPSplash();
	}

	private static function isChristmastide(){
		$month = date('n');
		$day = date('j');

		return ($month == 12 && $day >= 25) || ($month == 1 && $day <= 6);
	}

	private static function isCortexsBirthday(){
		$month = date('n');
		$day = date('j');

		return ($month == 10 && $day == 10);
	}

	public static function getRandomSentence(): string{
		return self::getRandomNoun() . " " . self::getRandomVerb();
	}

	public static function getRandomNoun(): string{
		return self::$RANDOM_NOUN[array_rand(self::$RANDOM_NOUN)];
	}

	public static function getRandomVerb(): string{
		return self::$RANDOM_VERB[array_rand(self::$RANDOM_VERB)];
	}

	public static function getRandomTSPSplash(): string{
		return self::$TEASPOON_SPLASHES[array_rand(self::$TEASPOON_SPLASHES)];
	}
}