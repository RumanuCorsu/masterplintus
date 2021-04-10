<?php
session_start();
require "config.php";

$getId = $_GET['id'];
$select_count = $_GET['count'];

changetovar($getId, $select_count);

function changetovar($getId, $select_count)
{

 if(isset($_SESSION['cart'][$getId]))
 {
 	$_SESSION['cart'][$getId]['qty'] = $select_count;
    return  $_SESSION['cart'];  
 }
 
}