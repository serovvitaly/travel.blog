

$(function(){
    
    $('.wookmark-item').wookmark({
        offset: 14,
        align: 'center',
        autoResize: true,
        resizeDelay: 50,
        container: $('#wookmark-content')
    });
    
    $('.wookmark-item').click(function(){
        $(this).fadeOut();
    });
    
    $('#wookmark-content').scrollPagination({
        contentPage: '/ajax/blog/list',
        contentData: {
            start: 20
        },
        scrollTarget: $(window),
        'beforeLoad': function(){
            $('#loading').fadeIn();
        },
        'afterLoad': function(elementsLoaded){
             console.log(elementsLoaded);
             $('#scroll-container .loading').fadeOut();
             $('#wookmark-content').trigger('refreshWookmark');
        }
    });
    
});