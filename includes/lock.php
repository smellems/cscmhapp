<?php
	if (!isset($_SESSION["user"]) OR $_SESSION["user"] != true)
	{
		header("Location: ./login.php");
	}
