<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
	
		$(function(){
			var buttonClass = $('button.btn').attr('class');
			$('li a').on('click', function(){
				var liClass = $(this).attr('class');
			$('div.btn-group button').removeAttr('class');
			$('div.btn-group button').addClass(buttonClass+' '+liClass);
			})
		}());

</script>
