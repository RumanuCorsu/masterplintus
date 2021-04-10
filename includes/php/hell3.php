<?php 
session_start();
require "config.php";

	$goods_id = $_GET['id3'];
	
 	getprof($selector, $goods_id);
 	
  function getprof($selector, $goods_id)
        {
            if(isset($_SESSION['select'][$goods_id]))
            {
                $_SESSION['select'][$goods_id]['qty'] = $selector;
                return $_SESSION['select'];
            }
            if(!isset($_SESSION['select'][$goods_id]))
            {
                $_SESSION['select'][$goods_id]['qty'] = $selector;
                return $_SESSION['select'];
            }
        }