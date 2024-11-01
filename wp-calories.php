<?php
/*
Plugin Name: WP Calories
Version: 1.0
Plugin URI: http://www.ism-soft.com/tool/wp-calories-plugin
Description: WP Calories shows a beautiful food photo whith calories description on Your sidebar.
Author: ISM
Author URI: http://www.ism-soft.com/
*/

function wp_get_calories($before_title="",$after_title="") {

	$wp_calories_start = '
<style>

 #wp_calories_image_in{padding: 0px 0px 0px 0px; width: 100%; text-align: center;}
 #img_wp_calories{ display: block; margin: 2px auto;
		width: 190px; height: 173px; 
		background: url(\''.get_option('home')  .'/wp-content/plugins/wp-calories/images/bg.png\');}
 #url_wp_calories{width: 190px; margin: 1px 10px 1px 155px; display: block; text-align: left; height: 10px;}
 .wp_calories_img{ width: 150px; height:136px; margin: 20px 12px; border: 0px;}
 #desc_wp_calories{ margin: 0px; height: 10px;}
 #wp_calories_kcal_txt{color:green;
font-size:40px;
font-weight:bold;
margin:-35px 20px 25px 0;
text-align:right;	}
#wp_calories_kcal_txt_s{ font-size: 12px; }
</style>
		<div id="wp_calories_image_in">
		<div id="img_wp_calories">
	
			';
	
	$wp_calories_center ='
		
		<div id="desc_wp_calories">
		
		';
	
	$wp_calories_end ="
		</div>
		<div id='url_wp_calories' style='font-size: 8px;'>
			by <a href='http://www.herbalyes.eu' title='WP Calories Plugin sponsored by Herbalyes' >Noni</a> 
		</div>
		</div>
		</div>
	";

$wp_calories = array(
	1 => array( "img_name" => "apple.jpg",
				"kcal" => "50",  
				"name" => "Apple",  
				"url" => "http://en.wikipedia.org/wiki/Apple",
				 ),
 
	2 => array( "img_name" => "orange.jpg",
				"kcal" => "45",  
				"name" => "Orange",  
				"url" => "http://en.wikipedia.org/wiki/Orange_%28fruit%29",
				),
	3 => array( "img_name" => "ananas.jpg",
				"kcal" => "33",  
				"name" => "Ananas",  
				"url" => "http://en.wikipedia.org/wiki/Ananas",
				),
	4 => array( "img_name" => "watermelon.jpg",
				"kcal" => "23",  
				"name" => "Watermelon",  
				"url" => "http://en.wikipedia.org/wiki/Watermelon",
				),			
				
	5 => array( "img_name" => "banana.jpg",
				"kcal" => "73",  
				"name" => "Banana",  
				"url" => "http://en.wikipedia.org/wiki/Banana",
				),	
				
				
	6 => array( "img_name" => "peach.jpg",
				"kcal" => "60",  
				"name" => "Peach",  
				"url" => "http://en.wikipedia.org/wiki/Peach",
				),	
				
	7 => array( "img_name" => "lemon.jpg",
				"kcal" => "30",  
				"name" => "Lemon",  
				"url" => "http://en.wikipedia.org/wiki/Lemon",
				),	
	8 => array( "img_name" => "grapefruit.jpg",
				"kcal" => "48",  
				"name" => "Grapefruit",  
				"url" => "http://en.wikipedia.org/wiki/Grapefruit",
				),	
	9 => array( "img_name" => "pear.jpg",
				"kcal" => "55",  
				"name" => "Pear",  
				"url" => "http://en.wikipedia.org/wiki/Pear",
				),	
	10 => array( "img_name" => "kiwi.jpg",
				"kcal" => "53",  
				"name" => "Kiwi",  
				"url" => "http://en.wikipedia.org/wiki/Kiwifruit",
				),	
	11 => array( "img_name" => "mango.jpg",
				"kcal" => "63",  
				"name" => "Mango",  
				"url" => "http://en.wikipedia.org/wiki/Mango",
				),	
				
	12 => array( "img_name" => "common_walnut.jpg",
				"kcal" => "650",  
				"name" => "Common walnut",  
				"url" => "http://en.wikipedia.org/wiki/Juglans_regia",
				),	
	13 => array( "img_name" => "papaya.jpg",
				"kcal" => "39",  
				"name" => "Papaya",  
				"url" => "http://en.wikipedia.org/wiki/Carica_papaya",
				),
	14 => array( "img_name" => "raisin.jpg",
				"kcal" => "295",  
				"name" => "Raisin",  
				"url" => "http://en.wikipedia.org/wiki/Raisin",
				),
	15 => array( "img_name" => "plum.jpg",
				"kcal" => "70",  
				"name" => "Plum",  
				"url" => "http://en.wikipedia.org/wiki/Plum",
				),
	16 => array( "img_name" => "prune.jpg",
				"kcal" => "310",  
				"name" => "Prune",  
				"url" => "http://en.wikipedia.org/wiki/Prune",
				),
	17 => array( "img_name" => "strawberry.jpg",
				"kcal" => "31",  
				"name" => "Strawberry",  
				"url" => "http://en.wikipedia.org/wiki/Garden_strawberry",
				),
	18 => array( "img_name" => "grape.jpg",
				"kcal" => "65",  
				"name" => "Grape",  
				"url" => "http://en.wikipedia.org/wiki/Grape",
				),
	19 => array( "img_name" => "cherry.jpg",
				"kcal" => "60",  
				"name" => "Cherry",  
				"url" => "http://en.wikipedia.org/wiki/Cherry",
				),
	20 => array( "img_name" => "hazelnuts.jpg",
				"kcal" => "650",  
				"name" => "Hazelnuts",  
				"url" => "http://en.wikipedia.org/wiki/Corylus_avellana",
				),
	21 => array( "img_name" => "fig.jpg",
				"kcal" => "68",  
				"name" => "Fig",  
				"url" => "http://en.wikipedia.org/wiki/Common_fig",
				),
	22 => array( "img_name" => "kumquat.jpg",
				"kcal" => "61",  
				"name" => "Kumquat",  
				"url" => "http://en.wikipedia.org/wiki/Kumquat",
				),
	23 => array( "img_name" => "avocado.jpg",
				"kcal" => "160",  
				"name" => "Avocado",  
				"url" => "http://en.wikipedia.org/wiki/Avocado",
				),
	24 => array( "img_name" => "raspberry.jpg",
				"kcal" => "30",  
				"name" => "Raspberry",  
				"url" => "http://en.wikipedia.org/wiki/Raspberry",
				),
	25 => array( "img_name" => "apricot.jpg",
				"kcal" => "40",  
				"name" => "Apricot",  
				"url" => "http://en.wikipedia.org/wiki/Apricot",
				),
);

	$min = 1 ; $max = count($wp_calories);
	$output = $wp_calories[rand($min,$max)];

	$output_fin = '<ul class="wp_calories">' . $wp_calories_start . '<a rel="nofallow" title="'.$output["name"].'" href="'. $output["url"] .'"><img class="wp_calories_img" src="'. get_option('home')  .'/wp-content/plugins/wp-calories/images/' 
	. $output["img_name"]. '" alt="'.  $output["name"] .' - '. $output["kcal"] .' kcal in 100g"  title="'.  $output["name"] .' - '. $output["kcal"] .' kcal in 100g" ></a>'
	. '<div id="wp_calories_kcal_txt">'. $output["kcal"] .'<span id="wp_calories_kcal_txt_s">kcal</span></div>'
	. $wp_calories_center . $output["name"] .' - '. $output["kcal"] .' kcal in 100g' . $wp_calories_end . '</ul>';
	
	return $output_fin;
}

function wp_calories(){
	
	$output = wp_get_calories() ;

	echo $output;
}



add_action('plugins_loaded', 'widget_sidebar_wp_calories');
function widget_sidebar_wp_calories() {
	function widget_wp_calories($args) {
	    extract($args);
		
		echo $before_widget;
		
		$output = wp_get_calories($before_title,$after_title);
		echo $output;
		echo $after_widget;
	}
	register_sidebar_widget('WP Calories', 'widget_wp_calories');
}



