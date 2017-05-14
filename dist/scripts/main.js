$(document).ready(function(){
    resize();

    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
        $('#custom_carousel .controls li.active').removeClass('active');
        $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
    });
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