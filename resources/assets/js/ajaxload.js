function bindaClicks() {
    $('main').on('click', '[data-type="page-transition"]', function(event){
        event.preventDefault();
        //detect which page has been selected
        var newPage = $(this).attr('href');

        //if the page is not animating - trigger animation
        if( !isAnimating ) changePage(newPage, true);
    });
};
bindaClicks();
function changePage(url, bool) {
    isAnimating = true;
    // trigger page animation
    $('main').addClass('transparente');

    loadNewContent(url, bool);
}

function loadNewContent(url, bool) {
    var newSectionName = 'cd-'+url.replace('/', ''),
    	section = $('<div class="cd-main-content '+newSectionName+'"></div>');

    section.load(url+' main', function(event){
        // load new content and replace <main> content with the new one
        var content = $(event).filter('main');
        	window.setTimeout(function () {
                $('main').html(content);
                $('main').removeClass('transparente');
                isAnimating = false;

            },300);


    	if(url != window.location){
        	//add the new page to the window.history
        	window.history.pushState({path: url},'',url);
    	}
    });
}
var isAnimating = false;
$(window).on('popstate', function() {
    /*
    var newPageArray = location.pathname.split('/'),
        //this is the url of the page to be loaded
        newPage = newPageArray[newPageArray.length - 1];
    if( !isAnimating ) changePage(newPage);
    */
});
