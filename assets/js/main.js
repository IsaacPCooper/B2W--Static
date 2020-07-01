$(function () {
  // cache the window object
  var $window = $(window);

  //parrallax
  $('section[data-type="background"]').each(function () {
    var $bgobj = $(this); // assigning the object

    $(window).scroll(function () {
      //scroll the background at var speed
      // the ypos is negative

      var yPos = -($window.scrollTop() / $bgobj.data("speed"));
      //put together our background pos
      var coords = "50% " + yPos + "px";

      //move the background
      $bgobj.css({ backgroundPosition: coords });
    }); //end
  });
});
