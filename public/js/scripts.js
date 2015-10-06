//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
   
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

});

// funcion para detectar si es un dispositivo mobil
function isMobile(){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        return true;
    }else{
        return false;
    }
}

// eventos para abrir y cerrar menus
$(document).ready(function(){
    
    // eventos para mobiles
    if(isMobile()){
        // menu para dispositivos mobiles
        $(".toggle-menu").click(function(){
            $(this).next('.toggle-item').toggle(500);
        });        
    
    }else{
        $(".toggle-menu").on({
            'mouseenter':function() { 
              $(this).next('.toggle-item').stop(true, true).slideDown(500);
            },
        });

        $('#side-menu').on({
            'mouseleave':function() {
                $('.toggle-item').stop(true, true).slideUp(200);
            }
        });        
    }

});


