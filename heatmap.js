$(document ).ready(function() {

        $.fn.saveClicks = function() { 
            $(this).bind('mousedown', function(evt) { 
                    var value = {
                        'x_cordinate': evt.pageX,
                        'y_cordinate': evt.pageY,
                        'page':escape(document.location.pathname) 
                    };
                    $.ajax({
                        url: "http://dev.click.com/heatmap.php",
                        type: 'POST',
                        data: value,
                    });
            }); 
        }; 
         
        $.fn.stopSaveClicks = function() { 
             $(this).unbind('mousedown'); 
        }; 

        $.displayClicks = function(settings) { 
                    $('<div id="heatmap-overlay"></div>').appendTo('body'); 
                    var value = {
                        'page':escape(document.location.pathname) 
                    };
                    $.ajax({
                            url: "http://dev.click.com/heatmap.php",
                            type: 'GET',
                            data: value,
                            dataType: "text",
                            cache: false,
                            success: function(response) {
                                $(response).appendTo('body');     
                            }
                    }); 
        }; 
});