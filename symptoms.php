<?php
	// Database connections and user check
	require_once(dirname(__FILE__) . "/includes/database.php");
	require_once(dirname(__FILE__) . "/includes/lock.php");

	// Check language
	require_once(dirname(__FILE__) . "/includes/lang.php");

	// Include texts and header
	require_once(dirname(__FILE__) . "/includes/text/" . $lang . ".php");

	$pageTitle = $arrTxt["symptoms"];
	require_once(dirname(__FILE__) . "/includes/header.php");

	// Content Start
	// Symptom Types
	$sql = "SELECT DISTINCT st.id, st.name_" . $lang . " as name, st.desc_" . $lang . " as descr
			FROM symptom_types st, symptoms s
			WHERE s.symptom_types_id = st.id AND s.score < 0
			ORDER BY name;";

	$result = mysqli_query($conn, $sql);

	print("<ul class=\"list-unstyled\">");
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			print("<li><details><summary><strong>" . $row["name"] . "</strong></summary>");

				// Symptoms
				$sql2 = "SELECT DISTINCT s.id, s.name_" . $lang . " as name, s.desc_" . $lang . " as descr, s.score
						FROM symptoms s
						WHERE s.symptom_types_id = " . $row["id"] . " AND s.score < 0
						ORDER BY name;";

				$result2 = mysqli_query($conn, $sql2);
		
				if (mysqli_num_rows($result2) > 0) {
					while($row2 = mysqli_fetch_assoc($result2)) {
						$checked = "";
						$sql3 = "SELECT us.id FROM users_symptoms us WHERE us.users_id = " . $_SESSION["userid"] . " AND us.symptoms_id = " . $row2["id"] . " AND checked = 1
							AND YEAR(created) = YEAR(NOW()) AND MONTH(created) = MONTH(NOW()) AND  DAY(created) = DAY(NOW())";
						$result3 = mysqli_query($conn, $sql3);	
						if (mysqli_num_rows($result3) > 0) {
							$checked = " checked=\"checked\"";
						}
						print("<div class=\"checkbox\"><label class=\"lead\"><input type=\"checkbox\"" . $checked . " id=\"s_" . $row2["id"] . "_" . $row2["score"]  . "\" value=\"s_" . $row2["name"] . "\" />" . $row2["name"] . "</label></div>");
					}
				}				

			print("</details></li>");
		}
	}
	print("</ul>");
	// Content end
?>
	<script>
		var last_alert = 0;
		$("[type=checkbox]").change(function() {
			var current_score = 0;
			$("[type=checkbox]:checked").each(function () {
				var res = this.id.split("_");
				current_score = current_score + parseInt(res[2]);
			});

			var checked = 0;
			if (this.checked) {
				checked = 1;
			}

			var res = this.id.split("_");
			$.post("chkSymptom.php",
			{
				sid: res[1],
				checked: checked,
				score: res[2],
				current_score: current_score
			},
			function(data,status){
				// alert("Data: " + data + "\nStatus: " + status);
			});

			if ((-current_score) - (-last_alert) >= 5)
			{
				last_alert = current_score;
				(function( $, wb ) {
				"use strict";

				var $document = wb.doc;

				$document.trigger("open.wb-lbx", [
					[
						{
							src: "#inline_content_modal",
							type: "inline"
						}
					],
					true
				]);

				})( jQuery, wb );
			}
		});
	</script>
		<section id="inline_content_modal" class="mfp-hide modal-dialog modal-content overlay-def"">
			<header class="modal-header">
				<h2 class="modal-title">Cherchez de l'aide!</h2>
			</header>
			<div class="modal-body">
				<section class="alert alert-danger">
					<h3>Rencontrer un agent d'orientation du PAE ou, communiquer directement avec les Services d'aide aux employés (SAE)</h3>
					<p><a href="tel:+1-800-268-7708">1-800-268-7708</a><br/> (<a href="tel:+1-800-567-5803">800-567-5803</a> pour les personnes ayant une déficience auditive)</p>
				</section>
				<p><strong>24 heures par jour / 7 jours par semaine de partout au pays.<strong></p>
				<p>Service confidentiel et gratuit.</p>

				<button class="btn btn-primary popup-modal-dismiss" type="button">Close</button>
			</div>
		</section>
<?php

	// Include footer
	$lastmod = getlastmod();
	require_once(dirname(__FILE__) . "/includes/footer.php");

	mysqli_close($conn);
