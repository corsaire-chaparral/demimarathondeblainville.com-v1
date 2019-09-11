$(document).ready(function(){
    
    //MOBILE NAV
    $('nav a.mobileNav').click(function(){
        $('#mobile').fadeIn();
        return false;
    });
    
    $('nav#mobile a.close').click(function(){
        $('#mobile').fadeOut();
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
    
//    $('.photoGallery').magnificPopup({
//        delegate: 'a',
//        type: 'image',
//        gallery:{
//            enabled:true
//        }
//    });

  $('#photo-search-form').on('submit', function (ev) {
//    if (!hasSubmitted) {
//      ev.preventDefault()
//    }
    ev.preventDefault();
//    var currentAction = $(this).attr('action');
    var value = $('#photo-search-number').val();
    $('#photo-search-number').attr('type', 'text').val('tag:' + value)
    $(this).unbind('submit').submit();
  });
    
    $('#videos').magnificPopup({
        delegate: '.video a',
        type: 'iframe'
    });
	
});