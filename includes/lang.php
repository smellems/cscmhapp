<?php
	if (isset($_GET["l"]) && in_array($_GET["l"], ["en", "fr"]))
	{
		$lang = $_GET["l"];
		$_SESSION["l"] = $lang;
	}
	else if (isset($_SESSION["l"]) && in_array($_SESSION["l"], ["en", "fr"]))
	{
		$lang = $_SESSION["l"];
	}
	else
	{
		$lang = "fr";
		$_SESSION["l"] = $lang;
	}
