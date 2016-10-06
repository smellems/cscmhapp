<?php
	// Database connections and user check
	require_once(dirname(__FILE__) . "/includes/database.php");
	require_once(dirname(__FILE__) . "/includes/lock.php");

	// Check language
	require_once(dirname(__FILE__) . "/includes/lang.php");

	// Include texts and header
	require_once(dirname(__FILE__) . "/includes/text/" . $lang . ".php");

	$pageTitle = "Health report";
	require_once(dirname(__FILE__) . "/includes/header.php");

	// Content Start
	// Forces
	$sql = "SELECT us.current_score FROM users_symptoms us WHERE us.users_id = " . $_SESSION["userid"] . "
		AND modified >= SUBDATE(NOW(),7)
		AND us.symptom_score >= 0
		ORDER BY modified DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);

	$current_score_pos = 0;
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$current_score_pos = $row["current_score"];
	}
	$value = $current_score_pos;
	$max = $current_score_pos + 5;

	print("<div class=\"row\">");
	print("<div class=\"col-xs-4 col-md-2\">Forces</div>");
	print("<div class=\"col-xs-8 col-md-6\"><meter id=\"mGood\" min=\"0\" value=\"$value\" max=\"$max\"></meter></div></div>");

	// Faiblesses
	$sql = "SELECT us.current_score FROM users_symptoms us WHERE us.users_id = " . $_SESSION["userid"] . "
		AND modified >= DATE(NOW())
		AND us.symptom_score < 0
		ORDER BY modified DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);

	$current_score_neg = 0;
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$current_score_neg = $row["current_score"];
	}
	$value = -$current_score_neg;
	//$max = $value + $current_score_pos + 5;
	$max = $value + 10;
	print("<div class=\"row\">");
	print("<div class=\"col-xs-4 col-md-2\">Faiblesses</div>");
	print("<div class=\"col-xs-8 col-md-6\"><meter id=\"mBad\" min=\"0\" value=\"$value\" max=\"$max\"></meter> - <a href=\"symptoms.php\">Auto-Évaluation</a></div></div>");

	// Symptom Types
	print("<h2>Bonnes habitudes</h2>");
	$sql = "SELECT DISTINCT st.id, st.name_" . $lang . " as name, st.desc_" . $lang . " as descr
			FROM symptom_types st, symptoms s
			WHERE s.symptom_types_id = st.id AND s.score > 0
			ORDER BY name;";

	$result = mysqli_query($conn, $sql);

	print("<ul class=\"list-unstyled\">");
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			print("<li><details><summary><strong>" . $row["name"] . "</strong></summary>");

				// Symptoms
				$sql2 = "SELECT DISTINCT s.id, s.name_" . $lang . " as name, s.desc_" . $lang . " as descr, s.score
						FROM symptoms s
						WHERE s.symptom_types_id = " . $row["id"] . " AND s.score > 0
						ORDER BY name;";

				$result2 = mysqli_query($conn, $sql2);
		
				if (mysqli_num_rows($result2) > 0) {
					while($row2 = mysqli_fetch_assoc($result2)) {
						$checked = "";
						$sql3 = "SELECT us.id FROM users_symptoms us
							WHERE us.users_id = " . $_SESSION["userid"] . " AND us.symptoms_id = " . $row2["id"] . "
							AND checked = 1	AND modified >= DATE(NOW())";
						$result3 = mysqli_query($conn, $sql3);	
						if (mysqli_num_rows($result3) > 0) {
							$checked = " checked=\"checked\"";
						}
						print("<div class=\"checkbox\"><label class=\"lead\"><input type=\"checkbox\"" . $checked . " id=\"s_" . $row2["id"] . "_" . $row2["score"]  . "\" value=\"s_" . $row2["name"] . "\" />" . $row2["name"] . "</label><br/><small>" . $row2["descr"] . "</small></div>");
					}
				}				

			print("</details></li>");
		}
	}
	print("</ul>");

?>
	<script>
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
				//alert("Data: " + data + "\nStatus: " + status);
			});

			$("#mGood").attr("value", current_score);
			$("#mGood").attr("max", current_score + 5);
			//$("#mBad").attr("max", parseInt($("#mBad").attr("value")) + parseInt(current_score) + 5);
		});
	</script>

<?php

	// Include footer
	$lastmod = getlastmod();
	require_once(dirname(__FILE__) . "/includes/footer.php");

	mysqli_close($conn);
