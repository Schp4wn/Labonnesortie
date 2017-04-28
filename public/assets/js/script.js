
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10528250-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  });

var hoverSpan = $('.btn span');

$( ".btn" ).mouseenter(function() {
    //add class enter on hover

    $(hoverSpan).removeClass('reset').addClass('enter');

  })
  .mouseleave(function() {
    //remove class enter
    //add class leave and reset on complete

    $(hoverSpan).removeClass('enter').addClass('leave');

    setTimeout(function() {
      $(hoverSpan).removeClass('leave').addClass('reset');
    }, 500);

  });
