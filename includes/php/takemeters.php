<?php
session_start();
require "config.php";
require_once "functions.php";

if(isset($_GET['id']))
{
	$selected_product = get_tovar_by_id($_GET['id']);
	
	echo $selected_product[0];
	
}

