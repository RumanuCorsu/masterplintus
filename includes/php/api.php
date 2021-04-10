<?php
session_start();
require "config.php";
require_once "functions.php";

if(isset($_GET['id']))
{
	$current_added_product = get_tovar_by_id2($_GET['id']);
	
	$current_cart_value = 0;

	if(!isset($_SESSION['cart_list'])){
		$_SESSION['cart_list'][] = $current_added_product;
		
		$current_cart_value = count($_SESSION['cart_list']);
		}

	$product_check = false;
	if(isset($_SESSION['cart_list'])){
		foreach ($_SESSION['cart_list'] as $art ) {
			if ( $art['Id'] == $current_added_product['Id'] )
			{
				$product_check = true;
			}
		}
	}

	if(!$product_check){
		$_SESSION['cart_list'][] = $current_added_product;
		
		$current_cart_value = count($_SESSION['cart_list']);
	}
	echo $current_cart_value;
}