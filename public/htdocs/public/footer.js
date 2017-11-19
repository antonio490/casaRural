var bumpIt = function() {
      $('body').css('margin-bottom', $('.footer').height());
    },
    didResize = false;

bumpIt();

$(window).resize(function() {
  didResize = true;
});
setInterval(function() {
  if(didResize) {
    didResize = false;
    bumpIt();
  }
}, 250);

$('button').click(function() {
  $(this).parent().append('<p>Another paragraph</p>');
  bumpIt();
});