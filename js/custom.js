$(document).ready(function(){
    
    //MOBILE NAV
    $('nav a.mobileNav').click(function(){
        $('nav#mobile').fadeIn();
        return false;
    });
    
    $('nav#mobile a.close').click(function(){
        $('nav#mobile').fadeOut();
        return false;
    });
    
	//TABS
	$('.tabs a').click(function(){
        var next = $(this).attr('href');
        
        $('.tabs a').removeClass('active');
        $(this).addClass('active');
        
        $('.tabContent').hide();
        $(next).fadeIn();
        
        return false;
    });
    
    //MAGNIFIC POPUP
    $('.mfp-image').magnificPopup({
        type: 'image'
    });
    
    $('.photoGallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{
            enabled:true
        }
    });
    
    $('#videos').magnificPopup({
        delegate: '.video a',
        type: 'iframe'
    });
	
});