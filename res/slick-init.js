

$(document).ready(function(){
  $("#daysInAWeek").slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    speed: 0,
  });
})


var slideButton = $("a[dataSlide]");

slideButton.click(function(e) {
  e.preventDefault();
  slideButton.removeClass("active");
  $(this).addClass("active");
  var slideno = $(this).attr("dataSlide");
  $('#daysInAWeek').slick('slickGoTo', slideno - 1);
  console.log(slideno);
});
