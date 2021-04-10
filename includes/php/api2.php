<?php
session_start();
require "config.php";
require_once "functions.php";



if(isset($_GET['acsessid']))
{

	$current_added_product = get_tovar_by_id3($_GET['acsessid']);
	
	$current_cart_value = 0;

	if(!isset($_SESSION['cart_list2'])){
		$_SESSION['cart_list2'][] = $current_added_product;
		$current_cart_value = count($_SESSION['cart_list2']);
		}

	$product_check = false;
	if(isset($_SESSION['cart_list2'])){
		foreach ($_SESSION['cart_list2'] as $art ) {
			if ( $art['Id'] == $current_added_product['Id'] )
			{
				$product_check = true;
			}
		}
	}

	if(!$product_check){
		$_SESSION['cart_list2'][] = $current_added_product;
		
		$current_cart_value = count($_SESSION['cart_list2']);
	}
	echo $current_cart_value;
}