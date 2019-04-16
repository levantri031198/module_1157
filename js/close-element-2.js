$(document).ready(function(){
    $("#close-link5").click(function(){
      
        $(".x_panel5").toggle();
    });
    
    $('.panel-text').click(function() {
        $('panel-text').addClass('collapsed');
        $('.collapseContent').removeClass('in').addClass('collapse');
        $(this).remove('collapsed');
    });
    
    $("#hello").click(function(){      
    	
        $("#hello").toggleClass('degree', '');
    });
});


