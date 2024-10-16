// Add scroll event listener
window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar");

  // Add 'scrolled' class when scroll is greater than 50px
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

$(document).ready(function() {
  $("#news-sliderr").owlCarousel({
      items : 5,
      itemsDesktop:[1199,3],
      itemsDesktopSmall:[980,2],
      itemsMobile : [600,2],
      navigation:true,
      navigationText:["",""],
      pagination:true,
      autoPlay:true,
  });
});

$(document).ready(function() {
  $("#news-sliderrr").owlCarousel({
      items : 5,
      itemsDesktop:[1199,5],
      itemsDesktopSmall:[980,2],
      itemsMobile : [600,2],
      navigation:true,
      navigationText:["",""],
      pagination:true,
      autoPlay:true,
  });
});