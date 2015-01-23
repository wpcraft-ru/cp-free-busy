(function($){
            var buttonClass = $('button.btn').attr('class');
            $('li a').on('click', function(){
                var liClass = $(this).attr('class');
            $('div.btn-group button').removeAttr('class');
            $('div.btn-group button').addClass(buttonClass+' '+liClass);
            })
        })(jQuery);
