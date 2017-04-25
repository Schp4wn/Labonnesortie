var ville = null;
$(document).ready(function() {
  // on cache toutes les villes
  hideVilles();

});

function showVille(nom)
{
  // si l'argument n'est pas vide
  if (nom != '') {
    // si une ville est déjà affiché, on la cache
    if (ville != null) {
      hideVilles();
    }

    // on change les paramètres de la carte
    $('.carte').addClass('liste');

    $('.ville.' + nom).show();

    ville = nom;
  }
}

function hideVilles()
{
  // on cache toutes les villes
  $('.ville').hide();
}

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10528250-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
