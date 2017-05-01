$(document).on("ready", main);

function main(){
    $("#main-menu a").on("click",irA);

}

function irA(){
    var seccion = $(this).attr("href");
    $("body,html").animate({
        scrollTop: $(seccion).offset().top
    }800);
}

return false
