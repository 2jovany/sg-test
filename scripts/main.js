function normalize_img(img_wrapper){
    $('.'+img_wrapper+' img').each(function(){
        if ($(this).height() > $(this).parent().height()){
            var jump_top = Math.round(($(this).height() - $(this).parent().height())/2);
            $(this).css('margin-top','-'+jump_top+'px');
            console.log($(this).height()+' || and jump_top = '+jump_top);
        } else {
            var jump_left = Math.round((($(this).width() * $(this).parent().height() / $(this).height() )-$(this).width())/2);
            $(this).css({'margin-left':'-'+jump_left+'px', 'height':'100%', 'width':'auto'});
            console.log($(this).height()+' || and jump_left = '+jump_left);
        }
    })
}
normalize_img('user_image');
