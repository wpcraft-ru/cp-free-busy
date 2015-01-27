<?php
/*
Plugin Name: cp-free-busy
Version: 1.0.0
Author: Vlad
*/
 
function show_busy_button(){?>
	<div class="btn-group ">
		<button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown" >
			Small button <span class="caret"></span>
		
    
		</button>
      <ul class="dropdown-menu" role="menu" aria-expanded="false">
        <li ><a class="btn btn-danger">Red</a></li>
        <li ><a class="btn btn-warning">Yellow</a></li>
        <li ><a class="btn btn-success">Green</a></li>
       
      </ul>
    </div>
<?php }  
add_shortcode('cp-free-busy', 'show_busy_button');

function btn_color_script(){
	$script = "
		<script type='text/javascript'>
			jQuery(document).ready(function(jQuery){
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
	
}
add_action('wp_enqueue_scripts', 'btn_color_script');
function my_scripts_method() {
    //wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}    
 
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
?>
