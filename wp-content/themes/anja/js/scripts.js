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
        $("#design").hide();
    });
    $("#des").click(function () {
        $("#performing-arts").hide();
        $("#design").show();
        
    });
   
    

});

