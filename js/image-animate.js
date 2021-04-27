$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('nav').addClass('color');
        $('#image').attr('src', './img/logo-dark.png');
        
    }else{
        $('nav').removeClass('color');
		$('#image').attr('src', './img/logo-white.png');
    }
})

$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('.nav-menu-icon').addClass('color-bar');
        $('#bar-mobile').attr('style', 'color: #000');
        
    }else{
        $('.nav-menu-icon').removeClass('color-bar');
		$('#bar-mobile').attr('style', 'color: #fff');
    }
})