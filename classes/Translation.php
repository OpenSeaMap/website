<?php

/* Create a new instance for translation */
$t = new Translation();

/* Aktuell ausgewählte Sprache soll der URL-Parameter 'lang' (...?lang=de) sein */
$t->setCurrentLanguage($_GET['lang']);

/* Define the default language */
$t->setDefaultLanguage("en");

/* Create an array for each language */
// German -----------------------------------------------------------------------------------------------------------------------
$deutsch = array(
	"langCode"=>"de",
	"pageDoesNotExist"=>"Seite nicht gefunden.",

	"dieFreieSeekarte"=>"die freie Seekarte",

	// Menu ---------------------------------------------------------
	"Seekarte"=>"Seekarte",
	"Vollbild"=>"Vollbild",
	"VollbildAnzeigen"=>"Karte im Vollbild anzeigen",
	"SeaChart"=>"Seekarte (Vollbild)",
	"ÜberOpenSeaMap"=>"Über OpenSeaMap",
	"Impressum"=>"Impressum",
	"Startseite"=>"Startseite",
	"ÄhnlicheProjekte"=>"Ähnliche Projekte",
	"SomeRights"=>"Diese Seite ist unter der Lizenz Creative Commons Attribution-ShareAlike 2.0 verfügbar.",

	// Urls ---------------------------------------------------------
	"UrlOSM"=>"http://openstreetmap.de",
	"UrlOSMWiki_Hauptseite"=>"http://wiki.openstreetmap.org/wiki/Hauptseite",
	"UrlOSMWiki_OpenSeaMap"=>"http://wiki.openstreetmap.org/wiki/DE:OpenSeaMap",

	// Legende ------------------------------------------------------
	"Legende"=>"Legende",
	"Hafen"=>"Hafen",
	"Seezeichen"=>"Seezeichen",
	"Leuchtfeuer"=>"Leuchtfeuer",
	"BrückenSchleusen"=>"Brücken/Schleusen",
	//Harbour
	"breakwater"=>"Wellenbrecher",
	"pier"=>"Steg, Schwimmsteg, Seebrücke",
	"crane"=>"Kran",
	"slipway"=>"Bootsrampe, Slipanlage",
	"harbour_master"=>"Hafenmeister",
	"waste_disposal"=>"Fäkalienentsorgung",
	//Seamarks
	"safe_water"=>"Sicheres Fahrwasser, Ansteuerung",
	"lateral_port"=>"Fahrwassertonne Backbord",
	"lateral_starboard"=>"Fahrwassertonne Steuerbord",
	"lateral_pref_port"=>"Durchgehendes Fahrwasser: Backbord",
	"lateral_pref_starboard"=>"Durchgehendes Fahrwasser: Steuerbord",
	"cardinal_north"=>"Seezeichen nördlich der Gefahrenstelle",
	"cardinal_east"=>"Seezeichen östlich der Gefahrenstelle",
	"cardinal_south"=>"Seezeichen südlich der Gefahrenstelle",
	"cardinal_west"=>"Seezeichen westlich der Gefahrenstelle",
	"isolated_danger"=>"Einzelgefahrenzeichen",
	"special_purpose"=>"Kennzeichnung besonderer Gebiete",
	//Lights
	"lighthouse"=>"Leuchtturm",
	"beacon_green"=>"Molenfeuer grünes Licht",
	"beacon_red"=>"Molenfeuer rotes Licht",
	"beacon_white"=>"Molenfeuer weißes Licht",
	//Locks
	"lock_gate"=>"Schleusentor",
	"lock"=>"Schleuse",
	"wier_small"=>"Wehr (klein)",
	"wier_big"=>"Wehr (groß)",
);

// English ---------------------------------------------------------------------------------------------------------------------
$englisch = array(
	"langCode"=>"en",
	"pageDoesNotExist"=>"Page not found.",

	"dieFreieSeekarte"=>"the free nautical chart",

	// Menu ---------------------------------------------------------
	"Seekarte"=>"Seamap",
	"Vollbild"=>"Fullscreen",
	"VollbildAnzeigen"=>"Show Fullscreen",
	"SeaChart"=>"Nautical Chart (Fullscreen)",
	"ÜberOpenSeaMap"=>"About OpenSeaMap",
	"Impressum"=>"Legal",
	"Startseite"=>"Main Page",
	"ÄhnlicheProjekte"=>"Similiar Projects",
	"SomeRights"=>"This work is licensed under the Creative Commons Attribution-ShareAlike 2.0 License",

	// Urls ---------------------------------------------------------
	"UrlOSM"=>"http://openstreetmap.org",
	"UrlOSMWiki_Hauptseite"=>"http://wiki.openstreetmap.org/wiki/Main_Page",
	"UrlOSMWiki_OpenSeaMap"=>"http://wiki.openstreetmap.org/wiki/OpenSeaMap",

	// Legende ------------------------------------------------------
	"Legende"=>"Map Key",
	"Hafen"=>"Harbour",
	"Seezeichen"=>"Seamarks",
	"Leuchtfeuer"=>"Lights",
	"BrückenSchleusen"=>"Bridges/Locks",
	//Harbour
	"breakwater"=>"Breakwater",
	"pier"=>"Pier",
	"crane"=>"Crane",
	"slipway"=>"Slipway",
	"harbour_master"=>"Harbour Master",
	"waste_disposal"=>"Waste Dispodal",
	//Seamarks
	"safe_water"=>"Safe water",
	"lateral_port"=>"Lateral mark port",
	"lateral_starboard"=>"Lateral mark starboard",
	"lateral_pref_port"=>"Preferred channel: port",
	"lateral_pref_starboard"=>"Preferred channel: starboard",
	"cardinal_north"=>"Cardinal mark north",
	"cardinal_east"=>"Cardinal mark east",
	"cardinal_south"=>"Cardinal mark south",
	"cardinal_west"=>"Cardinal mark west",
	"isolated_danger"=>"Isolated danger mark",
	"special_purpose"=>"Special mark",
	//Lights
	"lighthouse"=>"Lighthouse",
	"beacon_green"=>"Beacon green light",
	"beacon_red"=>"Beacon red light",
	"beacon_white"=>"Beacon white light",
	//Locks
	"lock_gate"=>"Lock gate",
	"lock"=>"Lock",
	"wier_small"=>"Wier (small)",
	"wier_big"=>"Wier (big)",
);

/* Add languages*/

$t->addLanguage("de",$deutsch,"deutsch");
$t->addLanguage("en",$englisch,"english");



class Translation {

	var $languages = array();
	var $defaultLanguage;
	var $currentLanguage;
	var $preferredLanguage;
	var $languageNames = array();

	function Translation() {

	}
	/*
	 * $name - Die Id mit der die Sprache angesprochen wird (z.B. im URL-Parameter)
	 * $table - Das Array mit den eigentlichen Übersetzungen
	 * $fullname (optional) - Ausgeschriebener Name der Sprache (z.B. für die Anzeige)
	 */
	function addLanguage($name,$table,$fullname = "") {
		$this->languages[$name] = $table;
		$this->languageNames[$name] = $fullname == "" ? $name : $fullname;
	}
	function setDefaultLanguage($name) {
		$this->defaultLanguage = $name;
	}
	function tr($entry,$language = "") {
		// Wenn language nicht gesetzt ist, die aktuell gesetzte Sprache benutzen
		if ($language == "")
			$language = $this->getCurrentLanguage();
		$text = $this->languages[$language][$entry];
		// Wenn kein Text gefunden wurde, als Fallback die Standardsprache probieren
		if (!isset($text) && $language != $this->defaultLanguage) {
			$text = $this->languages[$this->defaultLanguage][$entry];
		}
		return $text;
	}
	function pr($entry,$language = "") {
		echo $this->tr($entry,$language);
	}
	// Aktuelle genutzte Sprache
	function setCurrentLanguage($name) {
		$this->currentLanguage = $name;
	}
	function getCurrentLanguage() {
		// Aktuelle Sprache ist entweder die manuell gesetzte oder die als bevorzugt gesetzte
		return $this->currentLanguage != "" ? $this->currentLanguage : $this->getPreferredLanguage();
	}
	// Bevorzugte Sprache
	function setPreferredLanguage($name) {
		$this->preferredLanguage = $name;
	}
	function getPreferredLanguage() {
		if ($this->preferredLanguage == "") {
			return $this->getHttpPreferredLanguage();
		}
		return $this->preferredLanguage;
	}
	/* 
	 * Erstellt eine ungeordnete Liste der Sprachlinks
	 */
	function makeLanguageLinks($link) {
		$text = '<ul>'."\n";
		foreach ($this->languageNames as $key => $value) {
			$text .= '<li><a href="'.$link.'lang='.$key.'" '.($this->getCurrentLanguage() == $key ? "class=\"currentLanguage\"" : "").'>'.$value.'</a></li>'."\n";
		}
		$text .= '</ul>'."\n";
		return $text;
	}
	/*
	 * Parsed die vom Browser gesendeten bevorzugten Sprachen und gibt sie als Array mit Gewichtigkeit zurück
	 */
	function getHttpPreferredLanguages() {
		$list = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$preferredLanguages = array();
		$array = explode(",",$list);
		foreach ($array as $key => $value) {
			$split = explode(";",$value);
			$langcode = $split[0];
			$temp = explode("=",$split[1]);
			$quality = $temp[1] != "" ? $temp[1] : 1;

			$langcodeArray = explode("-",$langcode);
			$langcodeLanguage = $langcodeArray[0];
			$langcodeCountry = $langcodeArray[1];
			$preferredLanguages[] = array(
				"language"=>$langcodeLanguage,
				"country"=>$langcodeCountry,
				"quality"=>(float)$quality
			);

		}
		return $preferredLanguages;
	}
	/*
	 * Gibt die letzte bevorzugte Sprache mit der höchsten Gewichtigkeit zurück
	 */
	function getHttpPreferredLanguage() {
		$languages = $this->getHttpPreferredLanguages();
		$quality = 0;
		$code = "";
		foreach ($languages as $key => $value) {
			if ($value['quality'] > $quality) {
				$quality = $value['quality'];
				$code = $value['language'];
			}
		}
		return $code;
	}
}



?>
