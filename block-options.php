<?php
	// THIS PHP CODE IS TO CONFIGURE THE INPUT FIELDS AND TABS IN THE GRID EDITOR


    class HeadwayTemplateBlockOptions extends HeadwayBlockOptionsAPI { // The class used here must match the class used in the block.php file
		
	/*
		This section is to configure the tabs on the left hand side in the grid editor
	*/
		public $tabs = array(
		'content-tab' => 'Content' // creates a content tab which is labelled as Content on the backend
	);

	/*
		This section determines what input options are available to the end user and which tab they display in
	*/
	public $inputs = array(
		/*
			Everything in here gets displayed in the content tab
		*/
		
		'content-tab' => array(
			'content-types-text' => array(
					'type' => 'notice',
					'name' => 'content-types-text',
					'notice' => 'Enjoy my template plugin, if you have any questions email me at support@carassiusproductions.com.au.'
				),
		)
		
		/* example content 
		'content-tab' => array( // this array is what adds the repeater (the + sign on the right
				'type' => 'repeater',
				'name' => 'content',
				'label' => 'Content',
				'inputs' => array(
					array( // defines the tab
					'type' => 'text', // what sort of input field is displayed, in this case a simple text box
					'name' => 'sample_input_value', // this is the name refered to with $sample_input_value in the block.php
					'label' => 'Your Random Text', // the label of the field
					'default' => 'Example Text', // the default setting
					'tooltip' => 'Hint and tip on what should go here', // this is what gets displayed when hovering over the question mark
					),
			)
		)
		*/
	);
}