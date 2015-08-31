<?php 

function dd ($variable)
{
	echo "<pre>";
	var_dump($variable);
	echo "</pre>";
	die;
}

ob_start(); // Added to avoid a common error of 'header already sent' (not discussed in the tutorial)

//session
require_once 'classes/session.php';

require_once 'connect/database.php';
require_once 'classes/custommedoo.php';
require_once 'classes/users.php';
require_once 'classes/security.php';

$session 	= new Session();
$users 		= new Users($db);
$general 	= new General($session);

$errors = array();


//escapeovanje wild cards-a
function like($s, $e) {
    return str_replace(array($e, '_', '%'), array($e.$e, $e.'_', $e.'%'), $s);
}