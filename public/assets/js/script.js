
window.onload = function () {

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
    message = data;
    $('body').append('<h1>' + message.name + '</h1>')
  })
  .fail(function() {
    console.log("error");
  })

}); // $('#addMessage').submit(function(event)
} // window.onload
