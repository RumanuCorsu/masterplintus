<?php 
session_start();
require "config.php";
            
              $goods_id = $_GET['id2'];
		      $select_count = $_GET['counts'];
		          addtocart($goods_id,$select_count);
		function addtocart($goods_id,$qty)
        {
                    if(isset($_SESSION['cart'][$goods_id]))
                    {

                     foreach ($_SESSION['cart'][$goods_id] as $key ) 
                        {   

                            $_SESSION['cart'][$goods_id]['qty'] += $qty;
                                return $_SESSION['cart'];
                        }
                    }

                if(!isset($_SESSION['cart'][$goods_id]))
                {      
                        
                        $_SESSION['cart'][$goods_id]['qty'] = $qty;
                         return  $_SESSION['cart'];
                }
       
        }




	
	