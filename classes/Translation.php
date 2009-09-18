<?php

/* Create a new instance for translation */
$t = new Translation();

/* Aktuell ausgewählte Sprache soll der URL-Parameter 'lang' (...?lang=de) sein */
$t->setCurrentLanguage($_GET['lang']);

/* Define the default language */
$t->setDefaultLanguage("en");

/* Create an array for each language */
// German -----------------------------------------------------------------------------------------------------------------------
$german = array(
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

	// Buttons-------------------------------------------------------
	"save"=>"Speichern",
	"ok"=>"OK",
	"cancel"=>"Abbrechen",
	"close"=>"Schließen",
	"load"=>"Laden",
	"edit"=>"Bearbeiten",
	"move"=>"Verschieben",
	"delete"=>"Löschen",
	"login"=>"Anmelden",
	"logout"=>"Abmelden",
	"help"=>"Hilfe",

	// Editor--------------------------------------------------------
	"add"=>"Hinzufügen",
	"data"=>"Daten",
	"unknown"=>"Unbekannt",
	"comment"=>"Kommentar",
	"logged_in"=>"Sie sind angemeldet",
	"logged_out"=>"Sie müssen amgemeldet sein um die Karte bearbeiten zu können.",
	"logged_out_save"=>"Sie müssen amgemeldet sein um die Daten zu speichern.",
	"enterComment"=>"Sie müssen einen Kommentar eingeben!",
	"positionSeamark"=>"Position des Seezeichens",
	"userName"=>"Benutzername",
	"password"=>"Passwort",
	"dataLoad"=>"Daten werden geladen.",
	"dataSave"=>"Daten werden gespeichert.",
	"changesetCreate"=>"Changeset wird erzeugt.",
	"changesetClose"=>"Changeset wird geschlossen.",
	"seamarkAdd"=>"Seezeichen hinzufügen",
	"seamarkEdit"=>"Seezeichen bearbeiten",
	"seamarkDelete"=>"Seezeichen löschen",
	"seamarkMove"=>"Seezeichen verschieben",
	"seamarkSave"=>"Seezeichen speichern",
	"seamarkCategory"=>"Art des Zeichens",
	"seamarkType"=>"Bauart des Zeichens",
	"seamarkName"=>"Name des Zeichens",
	"comboUnknown"=>"Unbekannt- - - - - - - - - - - - - -",
	"comboSafeWater"=>"Ansteuerung",
	"comboPort"=>"Backbord",
	"comboStarboard"=>"Steuerbord",
	"comboPrefPort"=>"Abzweigung Backbord",
	"comboPrefStarboard"=>"Abzweigung Steuerbord",
	"comboNorth"=>"Gefahr Nord",
	"comboEast"=>"Gefahr Ost",
	"comboSouth"=>"Gefahr Süd",
	"comboWest"=>"Gefahr West",
	"comboIsolatedDanger"=>"Einzelgefahrenzeichen",
	"comboSpecialPurpose"=>"Sonderzeichen",
	"sphere"=>"Kugeltonne",
	"conical"=>"Spitztonne",
	"can"=>"Stumpftonne",
	"barrel"=>"Fasstonne",
	"pillar"=>"Bakentonne",
	"spar"=>"Spierentonne",
	"beacon"=>"Spiere",
	"topmark"=>"Topzeichen",
	"radar"=>"Radarreflektor",
	"lighted"=>"Befeuert",
	"fogsignal"=>"Nebelhorn",
	"miscItems"=>"Weitere<br/>Eigenschaften",
	"colour"=>"Farbe",
	"red"=>"Rot",
	"yellow"=>"Gelb",
	"character"=>"Kennung",
	"period"=>"Wiederkehr",
	
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
$english = array(
	"langCode"=>"en",
	"pageDoesNotExist"=>"Page not found.",

	"dieFreieSeekarte"=>"The free nautical chart",

	// Menu ---------------------------------------------------------
	"Seekarte"=>"Nautical Chart",
	"Vollbild"=>"Fullscreen",
	"VollbildAnzeigen"=>"Show Fullscreen",
	"SeaChart"=>"Nautical Chart (Fullscreen)",
	"ÜberOpenSeaMap"=>"About OpenSeaMap",
	"Impressum"=>"Legal",
	"Startseite"=>"Main Page",
	"ÄhnlicheProjekte"=>"Similar Projects",
	"SomeRights"=>"This work is licensed under the Creative Commons Attribution-ShareAlike 2.0 License",

	// Buttons-------------------------------------------------------
	"save"=>"Save",
	"ok"=>"OK",
	"cancel"=>"Cancel",
	"close"=>"Close",
	"load"=>"Load",
	"edit"=>"Edit",
	"move"=>"Move",
	"delete"=>"Delete",
	"login"=>"Login",
	"logout"=>"Logout",
	"help"=>"Help",

	// Editor--------------------------------------------------------
	"add"=>"Add",
	"data"=>"Data",
	"unknown"=>"Unknown",
	"comment"=>"Comment",
	"logged_in"=>"You are logged in",
	"logged_out"=>"(en)Sie müssen amgemeldet sein um die Karte bearbeiten zu können.",
	"logged_out_save"=>"(en)Sie müssen amgemeldet sein um die Daten zu speichern.",
	"enterComment"=>"Please enter a comment!",
	"positionSeamark"=>"(en)Position des Seezeichens",
	"userName"=>"Username",
	"password"=>"Password",
	"dataLoad"=>"Loading Data.",
	"dataSave"=>"Saving Data.",
	"changesetCreate"=>"Creating Changeset.",
	"changesetClose"=>"Closing Changeset.",
	"seamarkAdd"=>"Add sea mark",
	"seamarkEdit"=>"Edit sea mark",
	"seamarkDelete"=>"Delete sea mark",
	"seamarkMove"=>"Move sea mark",
	"seamarkSave"=>"Save sea mark",
	"seamarkCategory"=>"Sea mark category",
	"seamarkType"=>"Sea mark shape",
	"seamarkName"=>"Sea mark name",
	"comboUnknown"=>"Unknown- - - - - - - - - - - - - -",
	"comboSafeWater"=>"Safe water",
	"comboPort"=>"Port",
	"comboStarboard"=>"Starboard",
	"comboPrefPort"=>"Preferred: port",
	"comboPrefStarboard"=>"Preferred: starboard",
	"comboNorth"=>"Cardinal north",
	"comboEast"=>"Cardinal east",
	"comboSouth"=>"Cardinal south",
	"comboWest"=>"Cardinal west",
	"comboIsolatedDanger"=>"Isolated danger",
	"comboSpecialPurpose"=>"Special purpose",
	"sphere"=>"Sphere",
	"conical"=>"Conical",
	"can"=>"Can",
	"barrel"=>"Barrel",
	"pillar"=>"Pillar",
	"spar"=>"Spar",
	"beacon"=>"Beacon",
	"topmark"=>"Topmark",
	"radar"=>"Radar reflector",
	"lighted"=>"Lighted",
	"fogsignal"=>"Fogsignal",
	"miscItems"=>"(en)Weitere<br/>Eigenschaften",
	"colour"=>"Colour",
	"red"=>"red",
	"yellow"=>"yellow",
	"character"=>"Character",
	"period"=>"Period",

	// Urls ---------------------------------------------------------
	"UrlOSM"=>"http://openstreetmap.org",
	"UrlOSMWiki_Hauptseite"=>"http://wiki.openstreetmap.org/wiki/Main_Page",
	"UrlOSMWiki_OpenSeaMap"=>"http://wiki.openstreetmap.org/wiki/OpenSeaMap",

	// Legende ------------------------------------------------------
	"Legende"=>"Map Key",
	"Hafen"=>"Harbour",
	"Seezeichen"=>"Sea Marks",
	"Leuchtfeuer"=>"Lights",
	"BrückenSchleusen"=>"Bridges/Locks",
	//Harbour
	"breakwater"=>"Breakwater",
	"pier"=>"Pier",
	"crane"=>"Crane",
	"slipway"=>"Slipway",
	"harbour_master"=>"Harbour Master",
	"waste_disposal"=>"Waste Disposal",
	//Seamarks
	"safe_water"=>"Safe water",
	"lateral_port"=>"Port mark",
	"lateral_starboard"=>"Starboard mark",
	"lateral_pref_port"=>"Preferred channel: port",
	"lateral_pref_starboard"=>"Preferred channel: starboard",
	"cardinal_north"=>"North cardinal mark",
	"cardinal_east"=>"East cardinal mark",
	"cardinal_south"=>"South cardinal mark",
	"cardinal_west"=>"West cardinal mark",
	"isolated_danger"=>"Isolated danger mark",
	"special_purpose"=>"Special mark",
	//Lights
	"lighthouse"=>"Lighthouse",
	"beacon_green"=>"Green beacon",
	"beacon_red"=>"Red beacon",
	"beacon_white"=>"White beacon",
	//Locks
	"lock_gate"=>"Lock gate",
	"lock"=>"Lock",
	"wier_small"=>"Wier (small)",
	"wier_big"=>"Wier (big)",
);

// French -----------------------------------------------------------------------------------------------------------------------
$french = array(
	"langCode"=>"fr",
	"pageDoesNotExist"=>"Page non trouvée.",

	"dieFreieSeekarte"=>"La cartographie nautique libre",

	// Menu ---------------------------------------------------------
	"Seekarte"=>"Cartographie nautique",
	"Vollbild"=>"Plein écran",
	"VollbildAnzeigen"=>"Voir en plein écran",
	"SeaChart"=>"Cartographie nautique (plein écran)",
	"ÜberOpenSeaMap"=>"A propos d'OpenSeaMap",
	"Impressum"=>"Droits",
	"Startseite"=>"Page principale",
	"ÄhnlicheProjekte"=>"Projets similaires",
	"SomeRights"=>"Ce travail est sous licence Creative Commons Attribution-ShareAlike 2.0",

	// Urls ---------------------------------------------------------
	"UrlOSM"=>"http://openstreetmap.fr",
	"UrlOSMWiki_Hauptseite"=>"http://wiki.openstreetmap.org/wiki/Page_Principale",
	"UrlOSMWiki_OpenSeaMap"=>"http://wiki.openstreetmap.org/wiki/FR:OpenSeaMap",

	// Legende ------------------------------------------------------
	"Legende"=>"Légende",
	"Hafen"=>"Port",
	"Seezeichen"=>"Marques nautiques",
	"Leuchtfeuer"=>"Feux",
	"BrückenSchleusen"=>"Ponts/Ecluses",
	//Harbour
	"breakwater"=>"Brise-lames",
	"pier"=>"Jetée",
	"crane"=>"Grue",
	"slipway"=>"Cale, Slip",
	"harbour_master"=>"Capitaine de port",
	"waste_disposal"=>"Déchetterie",
	//Seamarks
	"safe_water"=>"Eaux sécurisées",
	"lateral_port"=>"Marque bâbord",
	"lateral_starboard"=>"Marque tribord",
	"lateral_pref_port"=>"Chenal préféré : bâbord",
	"lateral_pref_starboard"=>"Chenal préféré : tribord",
	"cardinal_north"=>"Marque cardinale Nord",
	"cardinal_east"=>"Marque cardinale Est",
	"cardinal_south"=>"Marque cardinale Sud",
	"cardinal_west"=>"Marque cardinale Ouest",
	"isolated_danger"=>"Marque de danger isolé",
	"special_purpose"=>"Marque spéciale",
	//Lights
	"lighthouse"=>"Phare",
	"beacon_green"=>"Balise verte",
	"beacon_red"=>"Balise rouge",
	"beacon_white"=>"Balise blanche",
	//Locks
	"lock_gate"=>"Port de l'écluse",
	"lock"=>"Ecluse",
	"wier_small"=>"Défense (petite)",
	"wier_big"=>"Défense (grosse)",
);

// Italian -----------------------------------------------------------------------------------------------------------------------
$italian = array(
	"langCode"=>"it",
	"pageDoesNotExist"=>"Pagina non trovata.",

	"dieFreieSeekarte"=>"La carta nautica libera",

	// Menu ---------------------------------------------------------
	"Seekarte"=>"Carta nautica",
	"Vollbild"=>"Schermo intero",
	"VollbildAnzeigen"=>"Visualizza a schermo intero",
	"SeaChart"=>"Carta nautica<br/>(schermo intero)",
	"ÜberOpenSeaMap"=>"Informazioni su OpenSeaMap",
	"Impressum"=>"Note legali",
	"Startseite"=>"Pagina principale",
	"ÄhnlicheProjekte"=>"Progetti simili",
	"SomeRights"=>"Questo lavoro è rilasciato sotto la licenza Creative Commons Attribution-ShareAlike 2.0",

	// Urls ---------------------------------------------------------
	"UrlOSM"=>"http://openstreetmap.it",
	"UrlOSMWiki_Hauptseite"=>"http://wiki.openstreetmap.org/wiki/IT:Pagina_Principale",
	"UrlOSMWiki_OpenSeaMap"=>"http://wiki.openstreetmap.org/wiki/IT:OpenSeaMap",

	// Legende ------------------------------------------------------
	"Legende"=>"Legenda",
	"Hafen"=>"Porto",
	"Seezeichen"=>"Segnali marittimi",
	"Leuchtfeuer"=>"Luci",
	"BrückenSchleusen"=>"Ponti/Sbarramenti",
	//Harbour
	"breakwater"=>"Frangiflutti",
	"pier"=>"Molo",
	"crane"=>"Gru",
	"slipway"=>"Rampa",
	"harbour_master"=>"Capitaneria di portor",
	"waste_disposal"=>"Smaltimento rifiuti",
	//Seamarks
	"safe_water"=>"Acqua potabiler",
	"lateral_port"=>"Segnale di babordo",
	"lateral_starboard"=>"Segnale di tribordo",
	"lateral_pref_port"=>"Canale preferito: babordo",
	"lateral_pref_starboard"=>"Canale preferito: tribordo",
	"cardinal_north"=>"Marcatore cardinale Nord",
	"cardinal_east"=>"Marcatore cardinale Est",
	"cardinal_south"=>"Marcatore cardinale Sud",
	"cardinal_west"=>"Marcatore cardinale Ovest",
	"isolated_danger"=>"Segnale di pericolo isolato",
	"special_purpose"=>"Segnale speciale",
	//Lights
	"lighthouse"=>"Faro",
	"beacon_green"=>"Segnale verde",
	"beacon_red"=>"Segnale rosso",
	"beacon_white"=>"Segnale bianco",
	//Locks
	"lock_gate"=>"Cancello di chiusa",
	"lock"=>"Chiusa",
	"wier_small"=>"Briglia (piccola)",
	"wier_big"=>"Briglia (grande)",
);


//Add languages
$t->addLanguage("de",$german,"Deutsch");
$t->addLanguage("en",$english,"English");
$t->addLanguage("fr",$french,"Francais");
$t->addLanguage("it",$italian,"Italiano");


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
