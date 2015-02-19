<?php
/*
Plugin Name: cp-free-busy
Version: 1.0.0
Author: Vlad
*/
function my_scripts_method() {
    
	wp_enqueue_script( 'jquery' );

	}   
add_action('wp_enqueue_scripts', 'my_scripts_method'); 

add_shortcode('cp-free-busy', 'btn_color_script'); 

function btn_color_script(){?>

		<div class='btn-group '>
		  <button class='btn btn-default btn-sm dropdown-toggle ' type='button' data-toggle='dropdown' >
			Small button <span class='caret'></span>
		
    
		  </button>
      			<ul class='dropdown-menu' role='menu' aria-expanded='false'>
        			<li ><a class='btn btn-danger btn-default'>Red</a></li>
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
				
				jQuery('.btn.btn-danger.btn-default').on('click', function(){
				var option = jQuery('li a.btn.btn-danger.btn-default').html();	
				var ajaxurl = '<?php echo admin_url('admin-ajax.php');?>';	
					var data = {action :'btn_ajax', 
								status : option}
					
					$.post(ajaxurl, data, function(data) {
						jQuery('div.btn-group button').text(data).append("<span class='caret'></span>");
					});
				});	
				
				jQuery('.btn.btn-warning').on('click', function(){
				var option = jQuery('li a.btn.btn-warning').text();	
				var ajaxurl = '<?php echo admin_url('admin-ajax.php');?>';	
					var data = {action :'btn_ajax', 
								status : option}
					
					$.post(ajaxurl, data, function(data) {
						jQuery('div.btn-group button').html(data).append("<span class='caret'></span>");
						
					});
				});
				
				jQuery('.btn.btn-success').on('click', function(){
				var option = jQuery('li a.btn.btn-success').text();	
				var ajaxurl = '<?php echo admin_url('admin-ajax.php');?>';	
					var data = {action :'btn_ajax', 
								status : option}
					
					$.post(ajaxurl, data, function(data) {
						jQuery('div.btn-group button').html(data).append("<span class='caret'></span>");
					});
				});
				
			});
			
		</script>	
		
	
<?php }



function btn_action_jscript(){

	if($_POST['status']){
		$rel=$_REQUEST['status'];
		echo $rel;
		die();
	}

}

add_action('wp_ajax_btn_ajax', 'btn_action_jscript');
add_action('wp_ajax_nopriv_btn_ajax', 'btn_action_jscript');


?>
