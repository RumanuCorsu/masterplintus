<?php
include "config.php";
session_start();

	$goods_id = $_GET['id3'];
	$prof = $_GET['prof'];
 	getprof($prof, $goods_id);
 	
  function getprof($prof, $goods_id)
        {
            if(isset($_SESSION['select'][$goods_id]))
            {
                $_SESSION['spisok'][$goods_id]['qty'] = $prof;
                return $_SESSION['spisok'];
            }
            if(!isset($_SESSION['spisok'][$goods_id]))
            {
                $_SESSION['spisok'][$goods_id]['qty'] = $prof;
                return $_SESSION['spisok'];
            }
        }
