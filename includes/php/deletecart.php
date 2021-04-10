<?php
session_start();
require "config.php";

$getId = $_GET['id'];

deletetovar($getId);

function deletetovar($getId)
{

if(isset($_SESSION['cart2'][$getId]))
 {
  $_SESSION['cart2'][$getId]['qty'] = 0;
  
 }
 foreach ($_SESSION['cart_list2'] as $key => $value) {
 	if($value['Id'] == $getId)
 	{
 		unset($_SESSION['cart_list2'][$key]);
 	}
 }
}
