<?php

	// Database connections
	require_once(dirname(__FILE__) . "/includes/database.php");

	if ($_SESSION["user"] == true)
	{
		header("Location: ./index.php");
	}

	if (isset($_POST["email"]) && isset($_POST["password"]))
	{
		//$email = mysqli_real_escape_string(trim($_POST["email"]), $conn);

		$sql = "SELECT id, email, name, password
				FROM users WHERE email = '" . trim($_POST["email"]) . "'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0)
		{
			$row = mysqli_fetch_assoc($result);
			$_SESSION["userid"] = $row["id"];
			$_SESSION["name"] = $row["name"];

			$sql = "UPDATE users SET last_login=NOW() WHERE id = " . $row["id"];
			$result = mysqli_query($conn, $sql);
		}
		else
		{
			$sql = "INSERT INTO users (email, name, password, last_login, created)
					VALUES ('" . $_POST["email"] . "', 'Votre nom', 'motdepasse', NOW(), NOW())";
			$result = mysqli_query($conn, $sql);
			$_SESSION["userid"] = mysqli_insert_id($conn);
			$_SESSION["name"] = "Votre nom";
		}
		$_SESSION["user"] = true;
		header("Location: ./index.php");
	}

	// Check language
	require_once(dirname(__FILE__) . "/includes/lang.php");

	// Include texts and header
	require_once(dirname(__FILE__) . "/includes/text/" . $lang . ".php");

	$pageTitle = $arrTxt["login"];
	require_once(dirname(__FILE__) . "/includes/header.php");

	// Content Start
?>
	<form role="form" method="post" action="login.php">
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Email" />
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" id="password" name="password" placeholder="Password" />
	</div>

	<button type="submit" class="btn btn-default">Submit</button>
	</form>
<?php
	// Content end

	// Include footer
	$lastmod = getlastmod();
	require_once(dirname(__FILE__) . "/includes/footer.php");

	mysqli_close($conn);
