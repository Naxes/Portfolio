/*
  _____                 _           _    _                 _     __  __      
 |_   _|__   __ _  __ _| | ___     / \  | |__   ___  _   _| |_  |  \/  | ___ 
   | |/ _ \ / _` |/ _` | |/ _ \   / _ \ | '_ \ / _ \| | | | __| | |\/| |/ _ \
   | | (_) | (_| | (_| | |  __/  / ___ \| |_) | (_) | |_| | |_  | |  | |  __/
   |_|\___/ \__, |\__, |_|\___| /_/   \_\_.__/ \___/ \__,_|\__| |_|  |_|\___|
            |___/ |___/                                                      

*/
$(".welcome p:nth-child(5) button").on("click", function() {
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

$(".changelog button").on("click", function(){
  $('.changelog').hide();
})

/*
   ____      _            _       _         _____         _     _                     _   _     
  / ___|__ _| | ___ _   _| | __ _| |_ ___  |_   _|____  _| |_  | |    ___ _ __   __ _| |_| |__  
 | |   / _` | |/ __| | | | |/ _` | __/ _ \   | |/ _ \ \/ / __| | |   / _ \ '_ \ / _` | __| '_ \ 
 | |__| (_| | | (__| |_| | | (_| | ||  __/   | |  __/>  <| |_  | |__|  __/ | | | (_| | |_| | | |
  \____\__,_|_|\___|\__,_|_|\__,_|\__\___|   |_|\___/_/\_\\__| |_____\___|_| |_|\__, |\__|_| |_|
                                                                                |___/           

*/
/* var el = document.getElementsByTagName('text')[2]; //Change as Needed
console.log(el.getComputedTextLength()); */
