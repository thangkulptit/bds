$(document).ready(function() {
    
    $("#arrow_right").on("click", function(){
        $('#slide-news-0').css({'display' : 'none'}).fadeOut(1000);
        $('#slide-news-1').css({'display' : 'none'}).fadeOut(1000);
        $('#slide-news-2').css({'display' : 'none'}).fadeOut(1000);
        $('#slide-news-3').css({'display' : 'none'}).fadeOut(1000);

        $('#slide-news-4').css({'display' : 'block'}).fadeIn(1000);
        $('#slide-news-5').css({'display' : 'block'}).fadeIn(1000);
        $('#slide-news-6').css({'display' : 'block'}).fadeIn(1000);
        $('#slide-news-7').css({'display' : 'block'}).fadeIn(1000);
        $(this).hide();
        $('#arrow_left').show();
    });
    $("#arrow_left").on("click", function(){
        $('#slide-news-0').css({'display' : 'block'}).fadeIn(500);
        $('#slide-news-1').css({'display' : 'block'}).fadeIn(500);
        $('#slide-news-2').css({'display' : 'block'}).fadeIn(500);
        $('#slide-news-3').css({'display' : 'block'}).fadeIn(500);

        $('#slide-news-4').css({'display' : 'none'}).fadeIn(1000);
        $('#slide-news-5').css({'display' : 'none'}).fadeIn(1000);
        $('#slide-news-6').css({'display' : 'none'}).fadeIn(1000);
        $('#slide-news-7').css({'display' : 'none'}).fadeIn(1000);
        $(this).hide();
        $('#arrow_right').show();
    });
});