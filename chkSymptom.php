<?php
	// Database connections and user check
	require_once(dirname(__FILE__) . "/includes/database.php");
	require_once(dirname(__FILE__) . "/includes/lock.php");

	if (isset($_POST["sid"]) && isset($_POST["checked"]) && isset($_POST["score"]) && isset($_POST["current_score"]))
	{
		if ($_POST["checked"] == 1) {
			$checked = 1;
		} else {
			$checked = 0;
		}

		$sql = "UPDATE users_symptoms
			SET symptom_score = " . $_POST["score"] . ",
			current_score = " . $_POST["current_score"] . ",
			checked=$checked, modified=NOW()
			WHERE users_id = " . $_SESSION["userid"] . "
			AND symptoms_id = " . $_POST["sid"] . "
			AND modified >= DATE(NOW())";
		$result = mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn) == 0) {			
			$sql = "INSERT INTO users_symptoms (users_id, symptoms_id, symptom_score, current_score, checked, created, modified)
				VALUES (" . $_SESSION["userid"] . ", " . $_POST["sid"] . ", " . $_POST["score"] . ", " . $_POST["current_score"] . ", $checked, NOW(), NOW())";
				$result = mysqli_query($conn, $sql);
		}
	}
