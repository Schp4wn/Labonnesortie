<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

  <div id="frontPage">
    <h3 class="text-center">Vous cherchez les événements autour de Lille</h3>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-push-3 event">
          <h4 class="text-center">Evénement à venir</h4>
          <div class="col-lg-12 adress-event">
            <div class="col-lg-6">
              <h4>Moto show</h4>
              <ul class="list-unstyled">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <li>104 avenue de la République</li>
                <li>59110</li>
                <li>La Madeleine</li>
              </ul>
              <p><i class="fa fa-calendar-o" aria-hidden="true"></i> Samedi 08 avril 2017</p>
            </div>
            <div class="col-lg-6">
              <img class="img-responsive center-block" src="<?= $this->assetUrl('img/tampon_evenement.png')?>" alt="event">
            </div>
            <p class="text-center">Description de l'événement</p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- id="frontPage" -->

  <iframe name="InlineFrame1" id="InlineFrame1" style="width:860px;height:235px;" src="http://www.mathieuweb.fr/calendrier/calendrier-des-semaines.php?nb_mois=1&nb_mois_ligne=5&mois=0&an=0&langue=fr&texte_color=B9CBDD&week_color=DAE9F8&week_end_color=C7DAED&police_color=453413&sel=true" scrolling="no" frameborder="0" allowtransparency="true"></iframe>

<?php $this->stop('main_content') ?>
