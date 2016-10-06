<?php
	// Database connections and user check
	require_once(dirname(__FILE__) . "/includes/database.php");

	// Check language
	require_once(dirname(__FILE__) . "/includes/lang.php");

	// Include texts and header
	require_once(dirname(__FILE__) . "/includes/text/" . $lang . ".php");

	$pageTitle = $arrTxt['title'];
	require_once(dirname(__FILE__) . "/includes/header.php");

	// Content Start
?>
	<section class="alert alert-info">
		<h3>Pour rencontrer un agent d'orientation du PAE ou, communiquer directement avec les Services d'aide aux employés (SAE)</h3>
		<p><a href="tel:+1-800-268-7708">1-800-268-7708</a><br/> (<a href="tel:+1-800-567-5803">800-567-5803</a> pour les personnes ayant une déficience auditive)</p>
	
		<p><strong>24 heures par jour / 7 jours par semaine de partout au pays.<strong></p>
		<p>Service confidentiel et gratuit.</p>
	</section>

<section class="col-sm-3">
<h3>Usefull links</h3>
<ul class="list-unstyled">
<li><a target="_blank" href="http://www.cmha.ca">Canadian Mental Health Association</a></li>
<li><a target="_blank" href="http://www.mentalhealthcommission.ca">Mental Health Commission of Canada</a></li>
<li><a target="_blank" href="http://www.aqps.info/">Association québécoise de prévention du suicide</a>
	<ul><li><a href="tel:+1-866-277-3553">1-866-APPELLE</a></li></ul>
</li>
<li><a target="_blank" href="http://www.cahm.ca">Centre for Addiction and Mental Health</a>
	<ul><li><a href="tel:+1-800-463-6273">1-800-463-6273</a></li></ul>
</li>
</ul>
</section>

<section class="col-sm-3">
<h3>Canadian Association for Suicide Prevention</h3>
<ul class="list-unstyled">
<li><a target="_blank" href="http://suicideprevention.ca/alberta-crisis-centres/">Alberta</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/british-columbia-crisis-centres/">British Columbia</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/manitoba-crisis-centres/">Manitoba</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/new-brunswick-crisis-centres/">New Brunswick</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/newfoundland-labrador-crisis-centres/">Newfondland & Labrador</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/northwest-territories-crisis-centres/">Northwest Territories</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/nova-scotia-crisis-centres/">Nova Scotia</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/nunavut-crisis-centres/">Nunavut</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/ontario-crisis-centres/">Ontario</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/prince-edward-island-crisis-centres/">Prince Edward Island</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/quebec-suicide-prevention-centres/">Québec</a></li>
<li><a target="_blank" href="http://suicideprevention.ca/saskatchewan-crisis-centres/">Saskatchewan</a></li>
</ul>
</section>

<section class="col-sm-3">
<h3>Contact Régionaux pour le PAE</h3>
<ul class="list-unstyled">
<li></li>
<li><a target="_blank" href="http://infonet/Regions/Quebec/coinpersonnel/pae/home.htm?lang=fr">Québec</a></li>
<li><a target="_blank" href="http://infonet/Regions/Ontario/EAP/Welcome.htm?lang=fr">Ontario</a></li>

<li><a target="_blank" href="http://infonet/Regions/Prairie/OurRegion/Sectors/EAP_CISM/home.htm?lang=fr">Prairies</a></li>
<li><a target="_blank" href="http://infonet-pac/800pac/bilingual_notice.htm?lang=fr">Pacifique</a></li>
<li><a target="_blank" href="http://infonet/Regions/NHQ/EAPCISM/NHQEAP.htm?lang=fr">AC</a></li>
</ul>
</section>

<?php
	// Content end

	// Include footer
	$lastmod = getlastmod();
	require_once(dirname(__FILE__) . "/includes/footer.php");

	mysqli_close($conn);
