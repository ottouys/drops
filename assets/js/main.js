(function($)
{

    var resizeId;

    // Done Resizing
    function doneResizing(){
    }    

    // Window load
    $(window).on('load', function(){
    });

    // Document ready
    $(function(){        
      $("a[href*=\\#]").click(function(e) {   
        e.preventDefault();   
        
        if($(e.target).hasClass('contact-us-href')){
          $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
        } else{
          var dest = $(this).attr('href');   
          console.log(dest);   
          $('html,body').animate({ scrollTop: $(dest).offset().top }, 'slow'); 
        }
        
      });

      // $('a.contact-us-href').on('click', function(e){
      //   
      // });
    });

    $(document).ajaxStart(function() {
    });

    $(document).ajaxSend(function() {
    });

    $(document).ajaxComplete(function(event, request, settings) {
    });

    $(window).on('resize', function(){
        clearTimeout(resizeId);
        resizeId = setTimeout(doneResizing, 500);
    });

    $(window).scroll(function () {

    });


})(jQuery);
