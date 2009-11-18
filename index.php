<?php

/* Benötigte Klassen einbinden */
include("classes/Translation.php");
include("classes/Pages.php");

/* Seiten, die eingebunden werden sollen */
$p = new Pages($_GET['page']);
$p->addPage("start","Start","start_".$t->tr("langCode").".php","startHeader.php");
$p->addPage("news","News","news_".$t->tr("langCode").".php");
$p->addPage("impressum",$t->tr("Impressum"),"impressum_".$t->tr("langCode").".php");
$p->addPage("faq","FAQ","faq_".$t->tr("langCode").".php");
$p->setDefaultPage("start");
$p->setDefaultPageLink("?lang=".$t->getCurrentLanguage()."&amp;");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>OpenSeaMap - <?=$p->getCurrentPageName()?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta http-equiv="content-language" content="<?= $t->getCurrentLanguage() ?>" />
<link rel="SHORTCUT ICON" href="./resources/icons/OpenSeaMapLogo_32.png"/>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
/* Include JavaScript if needed */
if (($headerFile = $p->makeIncludePageHeader("pages/")) != false) {
	include($headerFile);
}
?>
</head>
<body <?php if ($p->getCurrentPage() == "start") echo 'onload="drawmap();"' ?>>
	<div id="header">
		<h1><a href="?lang=<?=$t->getCurrentLanguage()?>">OpenSeaMap - <?=$t->tr("dieFreieSeekarte")?></a></h1>
		<div id="topmenu">
			<?=$t->makeLanguageLinks("index.php?page=".$p->getCurrentPage()."&amp;")?>
		</div>
	</div>
	<div id="menu">
	<h2><?=$t->tr("SeaChart")?></h2>
	<ul>
		<li><a href="map/?zoom=15&lat=54.18459&lon=12.08575&layers=B0FT&amp;lang=<?=$t->getCurrentLanguage()?>">Warnemünde</a></li>
		<li><a href="map/?zoom=14&lat=54.3914&lon=10.19366&layers=B0FT&amp;lang=<?=$t->getCurrentLanguage()?>">Kieler Förde</a></li>
		<li><a href="map/map_edit.php"><?=$t->tr("edit")?></a></li>
	</ul>
	<h2><?=$t->tr("ÜberOpenSeaMap")?></h2>
	<ul>
		<li><?=$p->makePageLink("news")?></li>
		<li><?=$p->makePageLink("faq")?></li>
		<li><a href="<?=$t->tr("UrlOSMWiki_OpenSeaMap")?>">Wiki</a></li>
		<li><?=$p->makePageLink("impressum")?></li>
	</ul>
	<h2>OpenStreetMap</h2>
	<ul>
		<li><a href="<?=$t->tr("UrlOSM")?>"><?=$t->tr("Startseite")?></a></li>
		<li><a href="<?=$t->tr("UrlOSMWiki_Hauptseite")?>">Wiki</a></li>
	</ul>
	<h2><?=$t->tr("ÄhnlicheProjekte")?></h2>
	<ul>
		<li><a href="http://freietonne.de">FreieTonne</a></li>
	</ul>
	</div>
	<div id="content">
		<?php include($p->makeIncludePage("pages/")); ?>
	</div>
	<div id="rights">
			<img src="resources/icons/somerights20.png" title="<?=$t->tr("SomeRights")?>" onClick="window.open('http://creativecommons.org/licenses/by-sa/2.0')" />
	</div>

</body>
</html>

