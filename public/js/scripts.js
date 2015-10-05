// toggle menu
$(document).ready(function(){
    $('.toggle-menu').on('click',function(){
        $(this).next('.toggle-item').toggle(500);
    });
});