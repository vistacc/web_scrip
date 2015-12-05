$(document).ready(function(){
    $(".main-nav").find("a").mouseenter(function(){
        $(this).stop().animate({"padding-left":'20px'});
    });
    $(".main-nav").find("a").mouseleave(function(){
        $(this).stop().animate({"padding-left":'10px'});
    });
});
