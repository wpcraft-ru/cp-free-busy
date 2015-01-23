<?php
/*
Plugin Name: cp-free-busy
Version: 1.0.0
Author: Vlad

*/

 
function show_busy_button(){
 $data='<div class="btn-group ">
		<button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown" >
			Small button <span class="caret"></span>
		
    
		</button>
      <ul class="dropdown-menu" role="menu" aria-expanded="false">
        <li ><a class="btn btn-danger">Red</a></li>
        <li ><a class="btn btn-warning">Yellow</a></li>
        <li ><a class="btn btn-success">Green</a></li>
       
      </ul>
    </div>';
return $data;
 
}
add_shortcode('cp-free-busy', 'show_busy_button');

function button_color_script(){
	wp_register_script('buttonColor', get_template_directory_uri(). 'foo.js' , array('jquery'));
	wp_enqueue_script('buttonColor');

}

add_action('wp_enqueue_scripts', 'button_color_script');

?>
