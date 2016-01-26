
$(function() {
    
    $('#fullpage').fullpage({
        autoScrolling: false,
        fitToSection: false,
        
    });
});
  

$(function(){
$(window).scroll(function() {
        // check if window scroll for more than 230px. May vary
        // as per the height of your main banner.  
    if($(this).scrollTop() > 230) { 
            $('.navbar-default').addClass('.logo-size2'); // adding the opaque class
    } else {
            $('.navbar-default').removeClass('.logo-size2'); // removing the opaque class
    }
 });
});

//contact form
    var form = $('.contact-form');
    form.submit(function () {
        $this = $(this);
        $.post($(this).attr('action'), $('.contact-form').serialize(), function(data) {
            $this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
        },'json');
        return false;
        
    }); 
// home scroll


$(function() {
    $(".arrowScroll").click(function() {
    $('html, body').animate({
        scrollTop: $("#topper").offset().top - 105
    }, 2000);
});
});
