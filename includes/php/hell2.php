<?php 
session_start();
require "config.php";
            
              $goods_id = $_GET['id3'];
		      $select_count = $_GET['counts2'];
             
		          addtocart($goods_id,$select_count);
                  
		function addtocart($goods_id,$qty)
        {
                    if(isset($_SESSION['cart2'][$goods_id]))
                    {

                     foreach ($_SESSION['cart2'][$goods_id] as $key ) 
                        {   

                            $_SESSION['cart2'][$goods_id]['qty'] += $qty;
                           
                                return $_SESSION['cart2'];
                        }
                    }

                if(!isset($_SESSION['cart2'][$goods_id]))
                {      
                        
                        $_SESSION['cart2'][$goods_id]['qty'] = $qty;
                       
                         return  $_SESSION['cart2'];
                }
       
        }
       




	
	