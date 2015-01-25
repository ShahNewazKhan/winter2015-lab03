<?php

function capitalize()
{
	$CI =& get_instance();

	//Take all the HTML and put into array $buffer
	$buffer = $CI->output->get_output();
	
	//Take the HTML from $buffer and put each delimited by a whitespace into an array
	$htmlArray = explode(" ", htmlspecialchars( $buffer,ENT_QUOTES ) );

	//When true, this will enable us to search for capitalized words inside the array
	//elements being searched
	$edit = false;
	
	//Loop through each element in $htmlArray and search for tag with class="lead"
	for ($i = 0; $i < count($htmlArray); $i++ ) 
	{		
		$current = $htmlArray[$i];

		//Set edit mode to if class = "lead" found
		if ( preg_match('/class=/', $current) && preg_match('/lead/', $current) )
			$edit = true;

		//While we are not at the end of the </p> tags
		if ( $edit && !preg_match('/\/p/', $current) )
		{
			//Search for capitalized word
			if(preg_match('/\b([A-Z"]+)\b/', $current) )
			{
				//If whole word is capitalized then enclose in strong tags
				$htmlArray[$i] = "<strong>" . $htmlArray[$i] . "</strong>"; 
			}
		}
		//If we a capitalized word in part of the </p> array element enclose in strong tangs
		//and end edit mode
		else if ( $edit && preg_match('/\/p/', $current) && 
			      preg_match('/\b([A-Z"]+)\b/', $current))
		{
			$htmlArray[$i] = "<strong>" . $htmlArray[$i] . "</strong>";
			$edit = false;
		}
		else
		{
			//Reached </p> tag with not capitalized word in the </p> array element
			$edit = false;
		}
	}

	//Put a white space between each array element
	$bufferImploded = implode(" ",$htmlArray);

	//Decode html tags
	$buffer = htmlspecialchars_decode($bufferImploded);

	$CI->output->set_output($buffer);
	$CI->output->_display();

}