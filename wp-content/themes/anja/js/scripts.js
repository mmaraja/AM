$(document).ready(function(){
    $('.burger-menu').click(function(){
      $('.dropdown-content').toggleClass('show');
    });
    $(document).click(function(event) { 
        if(!$(event.target).closest('.burger-menu').length) {
            if($('.dropdown-content').is(":visible")) {
                $('.dropdown-content').toggleClass('show');
            }
        }        
    });
    $("#perf-art").click(function () {
        $("#performing-arts").show();
        $("#visual-arts").hide();
        $(".performing-arts").show();
        $(".visual-arts").hide();
        
     
    });
    $("#vis-art").click(function () {
        $("#performing-arts").hide();
        $("#visual-arts").show();
        $(".performing-arts").hide();
        $(".visual-arts").show();
        $("#perf-art").removeClass('underline');
        
        
    });
    
   
    $('.visual-arts').css('display','none');
    $('.performing-arts').css('display');
    $("#perf-art").addClass('underline');
        
});

