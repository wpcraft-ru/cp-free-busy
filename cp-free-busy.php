<?php
/*
Plugin Name: cp-free-busy
Version: 1.0.0
Author: Vlad
*/
    
 
function btn_color_script(){
	
	$script = "
		<div class='btn-group '>
		  <button class='btn btn-default btn-sm dropdown-toggle ' type='button' data-toggle='dropdown' >
			Small button <span class='caret'></span>
		
    
		  </button>
      			<ul class='dropdown-menu' role='menu' aria-expanded='false'>
        			<li ><a class='btn btn-danger'>Red</a></li>
        			<li ><a class='btn btn-warning'>Yellow</a></li>
        			<li ><a class='btn btn-success'>Green</a></li>
       
      			</ul>
    		</div>
		<script type='text/javascript'>
			
			jQuery(document).ready(function($){
				
				var buttonClass = jQuery('button.btn').attr('class');
				$('li a').on('click', function(){
					var liClass = jQuery(this).attr('class');
				jQuery('div.btn-group button').removeAttr('class');
				jQuery('div.btn-group button').addClass(buttonClass+' '+liClass);
				});
			
				
			
			});
		</script>	
		";
	return $script;
	wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'btn_color_script');
add_shortcode('cp-free-busy', 'btn_color_script');

?>
