$(document).ready(function(){
    $(".dropmenu-title").click(function(){
        $(this).siblings(".dropmenu-list").slideToggle("fast");
    });
});