var windWidth=window.innerWidth;
console.log(windWidth," width")
if (windWidth<600) {
    $(".newsletter-html").css("display","none")
    $(".footer-container-newsletter").css("top","auto")
    $(".mobile-notice").css("text-align","center")
}
else{
    $(".footer-container").css("top","5500px");
    $(".mobile-notice").css("display","none")
}