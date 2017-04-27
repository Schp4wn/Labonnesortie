
window.onload = function () {

  var ville = null;
  // on cache toutes les villes
  hideVilles();

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

      $('.ville.'  nom).show();

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
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www')  '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();


  // TCHAT FRONTPAGE //

  $('#addMessage').submit(function(event) {
   // Ecrase le comportement par défaut lors de l'envoi du formulaire
   event.preventDefault();

  $.ajax({

   // Récupére l'url passsé dans l'attribut action du formulaire (ici addProduct.php)
   url: $(this).attr('action'),
   type: 'POST',

   // Force le type de données reçues à être du json
   dataType: 'json',

   // Récupére le contenu de addProduct.php car l'url passé précédemment vaut l'attribut action du formulaire
   data: $(this).serialize()

  })

  // data vient de la ligne 18
  .done(function(data) {
   console.log(data);

   // la variable product vaut data
   // message = data;
   // $('body').append('<h1>'  message.name  '</h1>')

  })
  .fail(function() {
   console.log("error");
  })

  }); // $('#addMessage').submit(function(event)
} // window.onload
