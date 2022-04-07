$(document).ready(function(){
    
})

function scrollToSection(ele, speed=300)
{
    let targetLink = ele.hash;

    if(targetLink != '#' && targetLink != '')
    {
        let targetElement   = $(ele.hash);
        let navHeight       = $('#sticky-nav').outerHeight();
        
        $('html, body').animate({
            scrollTop: targetElement.offset().top - navHeight - 10
        }, speed);
    }
}