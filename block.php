<?php 
// Change the Class to match the register_register_block on line 27 in the main php file
class HeadwayYourBlock extends HeadwayBlockAPI {

    public $id = 'your-block';
    
    public $name = 'Your Block'; // This is what your block will be labelled within Headway

    public $options_class = 'HeadwayYourBlockOptions';
    
			
function setup_elements() {

}

function content($block) {

}

}
