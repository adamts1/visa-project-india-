// Hide\Show the three part sections
(function($){

    jQuery(document).ready(function(){
        $("#section2").hide();
        $("#section3").hide();

        jQuery('#part2button').on('click', function(event) {  
            // $("#section1").hide();      
            // $("#section3").hide();      
             jQuery('#section2').toggle('show');
             $('html, body').animate({
                scrollTop: $("#section2").offset().top
              }, 1000)
        });
        jQuery('#part3button').on('click', function(event) {  
            // $("#section2").hide();      
            // $("#section1").hide();      
    
            jQuery('#section3').toggle('show');
            $('html, body').animate({
                scrollTop: $("#section3").offset().top
              }, 1000)  
       });
    });
})(jQuery); // end of jQuery name space


