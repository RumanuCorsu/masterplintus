<?php
session_start();
require "config.php";

$getId = $_GET['id2'];

deletetovar1($getId);

function deletetovar1($getId)
{

if(isset($_SESSION['cart'][$getId]))
 {
  $_SESSION['cart'][$getId]['qty'] = 0;
     
 }
 foreach ($_SESSION['cart_list'] as $key => $value) {
 	if($value['Id'] == $getId)
 	{
 		unset($_SESSION['cart_list'][$key]);
 	}
 }
}
