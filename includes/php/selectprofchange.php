<?php
include "config.php";
session_start();

$getId = $_GET['id'];
$getnewprof = $_GET['newprof'];

refactprof($getId,$getnewprof);

function refactprof($getId,$getnewprof)
{
	 if(isset($_SESSION['select'][$getId]))
 {
 	$_SESSION['select'][$getId]['qty'] = $getnewprof;
    return  $_SESSION['select'];  
 }
}