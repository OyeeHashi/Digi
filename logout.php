<?php

session_start();

if(isset($_SESSION['user_name']))
{
	unset($_SESSION['user_name']);
	// sesssion_destroy();

}

header("Location: user.php");
die;