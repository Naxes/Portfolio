/*
  TOGGLE WELCOME CONTENT & CHANGE LINK TEXT
*/
$(".welcomeBottom a").on("click", function() {
  var el = $(this);
  if (el.text() == el.data("text-swap")) {
    el.text(el.data("text-original"));
  } else {
    el.data("text-original", el.text());
    el.text(el.data("text-swap"));
  }
  
  $('.arrTransitionLeft').toggleClass('arrActiveLeft');
  $('.arrTransitionRight').toggleClass('arrActiveRight');
  $('.moreTitleTransform').toggleClass('moreTitleActive');
  $('.hobbiesTransition').toggleClass('hobbiesActive');
  $('.web-designTransition').toggleClass('web-designActive');
  $('.methodologyTransition').toggleClass('methodologyActive');
});

/*
  CALCULATE LENGTH TEXT
*/
var el = document.getElementsByTagName('text')[0]; //Change as Needed
console.log(el.getComputedTextLength());