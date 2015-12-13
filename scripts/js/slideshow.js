/* Slideshow par e-STe, maison, avec les moyens du bord !
Mélange gracieusement jQuery et JavaScript <3
Permet de faire fonctionner un slideshow à 3 pages.*/

var slide = 1;

function slideshow() {
  if(slide == 1) {
    setTimeout(function(){
      $("#slide1").hide();
      $("#slide2").show();
    }, 500);
    $("#slide1").animate({
      opacity: 0
    }, 600);

    $("#slide2").animate({
      opacity: 1
    }, 1600);
    slide++;
  } else if(slide == 2) {
    setTimeout(function(){
      $("#slide2").hide();
      $("#slide3").show();
    }, 500);
    $("#slide2").animate({
      opacity: 0
    }, 600);
    $("#slide3").animate({
      opacity: 1
    }, 1600);
    slide++;
  } else if(slide == 3) {
    setTimeout(function(){
      $("#slide3").hide();
      $("#slide1").show();
    }, 500);
    $("#slide3").animate({
      opacity: 0
    }, 600);
    $("#slide1").animate({
      opacity: 1
    }, 1600);
    slide = 1;
  }
  setTimeout(slideshow, 6000);
}
