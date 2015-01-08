<?php

// THIS PHP CODE IS TO CONFIGURE THE OUTPUT ON TO THE FRONT PAGE AND THE VISUAL EDITOR

/* This class must be included in another file and included later so we don't get an error about HeadwayBlockAPI class not existing. */


class HeadwayTemplateBlock extends HeadwayBlockAPI { // change the class to match your plugin name

    

    
    public $id = 'template-block'; // change the id to match your plugin name
    public $name = 'Template'; // This is what the block title is when displayed in Headway Grid Editor
    public $options_class = 'HeadwayTemplateBlockOptions'; // change the class to match your plugin name

/*
	This is where you get any CSS and JS/jQuery scripts/stylesheets to load
*/		
public static function enqueue_action($block_id, $block, $original_block = null) {
	wp_enqueue_script('jquery'); //ensures jQuery is loaded
	/* Example script loading
	wp_enqueue_script('jquery-example', plugins_url('/js/jquery.example.js' , __FILE__),'','',false);
    */
	
	/* Example stylesheet loading
	wp_enqueue_style('stylesheet-example', plugins_url('/css/style.css' , __FILE__),'','',false);
	*/
	
	/* Example on loading a script based on a selection by the end user
	if ($userselection == true)	{ //$userselection is taken from a field name in the block-options file
		wp_enqueue_script('jquery-example', plugins_url('/js/examplescript.js' , __FILE__),'','',false);
	}
	*/
}	
	
/*
	This is where you can enter your dynamic jQuery and Javascript
*/			
public static function dynamic_js($block, $block_id) {
	$js = null; // this must stay as it starts the JS section
			

			$js .= ' // must start each section
						
			
			jQuery(function ($) {  
			
			$(document).ready(function() {//begin docready
			
			
			
			});//end docready  
			
			'; // closes each section
			
			$js .= '
			
			
			$(window).load(function() {//begin windowload

			
			
			
		

			});//end windowload
			
			});//end of $ block 

			';
				
				
				
				

				
				return $js; // this must stay as it ends the JS section
}

/*
	This is where you can enter your dynamic CSS
*/			
public static function dynamic_css($block, $block_id) {
		
		
		$css = null; // this must stay as it starts the CSS section
		
		
		
	
		$css .= ' // must start each section
		
			
		
		'; // must end each section
	

		
		
		return $css; // this must stay as it ends the CSS section
		
		
} 
/* 
	This is where you can configure fields for the Visual Editor
*/

function setup_elements() {
	
		/* Example configuration 
		$this->register_block_element(array(
			'id' => 'hyperlinks',
			'name' => 'Hyperlinks',
			'selector' => '.entry-content a',
			'properties' => array('fonts'),
			'states' => array(
				'Hover' => '.entry-content a:hover', 
				'Clicked' => '.entry-content a:active'
			)
		));
		*/
		
}

/* 
	This is where you can configure how things get displayed on the page
*/
function content($block) {
		/* Example content code
		$sample_input_value = parent::get_setting($block, 'sample-input', null); // This pulls the content out of the user selection and assigns it to the variable $sample_input_value
		if ( $sample_input_value == null ) {
			echo '<p>The sample input has nothing in it yet!</p>';
		} else {
			echo '<p>Here\'s what the sample input has for a value: ' . $sample_input_value . '</p>'; // This displays the content that has been assigned the variable $sample_input_value
		}
		*/
}
			  			
				
}
		