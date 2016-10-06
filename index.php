<?php
	// Database connections and user check
	require_once(dirname(__FILE__) . "/includes/database.php");
	require_once(dirname(__FILE__) . "/includes/lock.php");

	// Check language
	require_once(dirname(__FILE__) . "/includes/lang.php");

	// Include texts and header
	require_once(dirname(__FILE__) . "/includes/text/" . $lang . ".php");

	$pageTitle = $arrTxt['title'];
	require_once(dirname(__FILE__) . "/includes/header.php");

	// Content Start
?>
	<a href="symptoms.php" class="btn btn-primary btn-lg btn-block" role="button"><?php print($arrTxt["selfevaluation"]); ?></a>
	<a href="habits.php" class="btn btn-default btn-lg btn-block" role="button"><?php print($arrTxt["habitstracking"]); ?></a>

<br/>
	<section class="alert alert-info">
		<h3>Pour rencontrer un agent d'orientation du PAE ou, communiquer directement avec les Services d'aide aux employés (SAE)</h3>
		<p><a href="tel:+1-800-268-7708">1-800-268-7708</a><br/> (<a href="tel:+1-800-567-5803">800-567-5803</a> pour les personnes ayant une déficience auditive)</p>
	
		<p><strong>24 heures par jour / 7 jours par semaine de partout au pays.<strong></p>
		<p>Service confidentiel et gratuit.</p>
	</section>
<?php
	// Content end

	// Include footer
	$lastmod = getlastmod();
	require_once(dirname(__FILE__) . "/includes/footer.php");

	mysqli_close($conn);
