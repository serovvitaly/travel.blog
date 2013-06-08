

$(function(){
    
    $container = $('#wookmark-content'); 
    
    $container.masonry({
        itemSelector : '#wookmark-content .wookmark-item',
        columnWidth : 240
    });
    
    
    /*$('.wookmark-item').wookmark({
        offset: 14,
        align: 'center',
        autoResize: true,
        resizeDelay: 50,
        container: $('#wookmark-content')
    }); */
    
    $('.wookmark-item').click(function(){
        $(this).fadeOut();
    });
    
    $container.scrollPagination({
        contentPage: '/ajax/blog/list',
        contentData: {
            start: 20
        },
        scrollTarget: $(window),
        'beforeLoad': function(){
            $('#scroll-container .loading').fadeIn();
        },
        'afterLoad': function(elementsLoaded){
            
            console.log(elementsLoaded);
            
            //$container.masonry('appended', $(elementsLoaded));
            
            $('#scroll-container .loading').fadeOut();
        }
    });
    
});