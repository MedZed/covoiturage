var doc = {
  w: $(window).width(),
  wC: $(window).width()/2
};
var mouseX = 0;

$(window).resize(function(){
  doc = {
    w: $(window).width(),
    wC: $(window).width()/2
  }
});

$(window).mousemove(function(e){
  mouseX = ((e.pageX  - doc.w + doc.wC) / (doc.wC / 20)) - 50;

  $('.sign').css('transform', 'translateX('+mouseX+'%) rotateZ(-45deg)');
  $('.refill').css('transform', 'translateX('+ mouseX /10 + '%)');
  $('.car').css('transform', 'translateX('+ mouseX /5 + '%)');
});