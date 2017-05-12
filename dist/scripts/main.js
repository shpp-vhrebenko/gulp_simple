$(document).ready(function(){
    resize();
});

$(window).resize(function(){
    resize();
});


function resize(){
    console.log('resize');
    if($(window).width() < 975)
    {
        console.log("<975");
        $("#social-bar").insertAfter("#contacts");
    }
    else
    {
        console.log(">975");
        $("#social-bar").insertBefore("#site-name");
    }
}