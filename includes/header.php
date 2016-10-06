<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php print($lang); ?>" dir="ltr">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
wet-boew.github.io/wet-boew/License-en.html / wet-boew.github.io/wet-boew/Licence-fr.html -->
<title><?php print($arrTxt['title']); ?></title>
<meta content="width=device-width,initial-scale=1" name="viewport">
<!-- Meta data -->
<meta name="description" content="<?php print($arrTxt['metadescription']); ?>">
<!-- Meta data-->
<!--[if gte IE 9 | !IE ]><!-->
<link href="./wet-boew/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./wet-boew/css/theme.min.css">
<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./wet-boew/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./wet-boew/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->
<noscript><link rel="stylesheet" href="../wet-boew/css/noscript.min.css" /></noscript>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
</head>
<body vocab="http://schema.org/" typeof="WebPage">
<ul id="wb-tphp">
<li class="wb-slc">
<a class="wb-sl" href="#wb-cont"><?php print($arrTxt['skiptomain']); ?></a>
</li>
<li class="wb-slc visible-sm visible-md visible-lg">
<a class="wb-sl" href="#wb-info"><?php print($arrTxt['skiptoabout']); ?></a>
</li>
</ul>
<header role="banner">
<div id="wb-bnr">
<div id="wb-bar">
<div class="container">
<div class="row">
<object id="gcwu-sig" type="image/svg+xml" tabindex="-1" role="img" data="./wet-boew/assets/sig-blk-en.svg" aria-label="<?php print($arrTxt['governmentofcanada']); ?>"></object>
<section id="wb-lng"><h2><?php print($arrTxt['languageselection']); ?></h2>
<ul class="list-inline">
<?php
	print("<li>");
	if ($lang == "en")
	{
		print("<a lang=\"fr\" href=\"?l=fr\">");
	} else {
		print("<a lang=\"en\" href=\"?l=en\">");
	}
	print($arrTxt['otherlang'] . "</a>");
	print("</li>");
?>
</ul>
</section>
<section class="wb-mb-links col-xs-12 visible-sm visible-xs" id="wb-glb-mn">
<h2><?php print($arrTxt['searchandmenus']); ?></h2>
<ul class="pnl-btn list-inline text-right">
<li><a href="#mb-pnl" title="Search and menus" aria-controls="mb-pnl" class="overlay-lnk btn btn-sm btn-default" role="button"><span class="glyphicon glyphicon-search"><span class="glyphicon glyphicon-th-list"><span class="wb-inv"><?php print($arrTxt['searchandmenus']); ?></span></span></span></a></li>
</ul>
<div id="mb-pnl"></div>
</section>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div id="wb-sttl" class="col-md-12">
<a href="index.php"><span><?php print($arrTxt['title']); ?></span></a>
<object id="wmms" type="image/svg+xml" tabindex="-1" role="img" data="./wet-boew/assets/wmms-intra.svg" aria-label="<?php print($arrTxt['governmentofcanadasymbol']); ?>"></object>
</div>

<!-- Search -->
<section id="wb-srch" class="visible-md visible-lg">
<h2><?php print($arrTxt['search']); ?></h2>
<form action="https://google.ca/search" method="get" role="search" class="form-inline">
<div class="form-group">
<label for="wb-srch-q"><?php print($arrTxt['searchwhere']); ?></label>
<input id="wb-srch-q" class="form-control" name="q" type="search" value="" size="27" maxlength="150">
<input type="hidden" name="q" value="site:cmha.ca OR site:mentalhealthcommission.ca OR site:aqps.info OR site:cahm.ca OR site:suicideprevention.ca">
</div>
<button type="submit" id="wb-srch-sub" class="btn btn-default"><?php print($arrTxt['search']); ?></button>
</form>
</section>

</div>
</div>
</div>

<!-- Search -->
<nav role="navigation" id="wb-sm" data-trgt="mb-pnl" class="wb-menu visible-md visible-lg" typeof="SiteNavigationElement">
<div class="container nvbar">
<h2><?php print($arrTxt['topicsmenu']); ?></h2>
<div class="row">
<ul class="list-inline menu">
<li><a href="index.php"><?php print($arrTxt["home"]); ?></a></li>
<li><a href="symptoms.php"><?php print($arrTxt["selfevaluation"]); ?></a></li>
<li><a href="habits.php"><?php print($arrTxt["habitstracking"]); ?></a></li>
<li><a href="links.php"><?php print($arrTxt["usefullinks"]); ?></a></li>
<?php
	if ($_SESSION["user"] == true)
	{
		print("<li><a href=\"logout.php\">" . $arrTxt["logout"] . "</a></li>");
	}
?>
</ul>
</div>
</div>
</nav>

<!-- Breadcrums
<nav role="navigation" id="wb-bc" property="breadcrumb">
<h2><?php print($arrTxt['youarehere']); ?></h2>
<div class="container">
<div class="row">
<ol class="breadcrumb">
<li>
<a href="http://wet-boew.github.io/v4.0-ci/index-en.html">Home</a>
</li>
<li>Working examples</li>
</ol>
</div>
</div>
</nav>
-->
</header>
<main role="main" property="mainContentOfPage" class="container">
<h1 id="wb-cont" property="name"><?php print($pageTitle); ?></h1>
