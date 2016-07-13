/*
  TOGGLE WELCOME CONTENT & CHANGE LINK TEXT
*/
$(".welcome p:nth-child(3) button").on("click", function() {
  var el = $(this);
  if (el.text() == el.data("text-swap")) {
    el.text(el.data("text-original"));
  } else {
    el.data("text-original", el.text());
    el.text(el.data("text-swap"));
  }
  
  $('.arrTransitionLeft').toggleClass('arrActiveLeft');
  $('.arrTransitionRight').toggleClass('arrActiveRight');
  $('.more-link-transform').toggleClass('more-link-active');
  $('.right-content-transition').toggleClass('right-content-active');

});

/*
  CALCULATE LENGTH TEXT
*/
var el = document.getElementsByTagName('text')[1]; //Change as Needed
console.log(el.getComputedTextLength());
