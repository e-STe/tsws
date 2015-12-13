var opened = false;
var antirafale = false;
var focused = false;
var already_r = false;
$(document).ready(function() {
    $('#menu img').click(function() {
        if(!opened && !antirafale) {
            antirafale = true;
            $('#menu img').attr('src', '/images/icones/menu/trait.gif');
            setTimeout(function(){$('#menu img').attr('src', '/images/icones/menu/croix.png');}, 800);
            $('#menu li').css('display', 'block');
            $('#menu').animate({height: '+=450px'}, 1000, "", function(){antirafale = false;});
            opened = true;
        } else if(opened && !antirafale) {
            $('#menu img').attr('src', '/images/icones/menu/croix.gif');
            setTimeout(function(){$('#menu img').attr('src', '/images/icones/menu/trait.png');}, 800);
            antirafale = true;
            $('#menu').animate({height: '-=450px'}, 1000, "", function(){antirafale = false; $('#menu li').css('display', 'none');});
            opened = false;
        }
    });
    $('#comments textarea').focus(function() {
        $('#comments textarea').animate({width: '90%', height: '400px', fontSize: '1.2em'}, 1000);
    });
    
    $('#comments textarea').blur(function() {
        $('#comments textarea').animate({width: '60%', height: '50px', fontSize: '1em'}, 1000);
    });
    
    $(window).resize(function(){
        var width = $(window).width();
        if(width >= 820) {
            $('#menu li').css('display', 'inline-block');
            $('#menu').css('height', 'auto');
        } else if(!opened) {
            $('#menu').css('height', '70px');
        }
    });
});