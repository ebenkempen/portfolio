$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.fadeIn').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'animation':'ease'});
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });
    
});


//#about_me, #about_hi, .section_headers, #face, .what_i_do_headers, .what_i_do_images #contactForm