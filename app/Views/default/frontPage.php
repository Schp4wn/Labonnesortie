<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


<div id="frontPage">
  <h3 class="text-center">Vous cherchez les événements autour de Lille</h3>
    <div class="row">
      <div class="col-lg-3 col-lg-push-4 event">
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
            <img class="img-responsive center-block" src="<?= $this->assetUrl('img/Fichier_000.jpeg')?>" alt="event">
          </div>
          <p class="text-center">Description de l'événement</p>
        </div>
      </div>

      <div class="col-lg-3 col-lg-pull-2">
        <iframe name="InlineFrame1" id="InlineFrame1" style="width:860px;height:235px;" src="http://www.mathieuweb.fr/calendrier/calendrier-des-semaines.php?nb_mois=1&nb_mois_ligne=5&mois=0&an=0&langue=fr&texte_color=B9CBDD&week_color=DAE9F8&week_end_color=C7DAED&police_color=453413&sel=true" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
      </div>

      <div class="col-lg-3 col-lg-pull-5 meteo">
        <div id="cont_NTkzNTB8NXwxfDJ8MXxCQkUwRkZ8M3xGRkZGRkZ8Y3wx">
          <div id="spa_NTkzNTB8NXwxfDJ8MXxCQkUwRkZ8M3xGRkZGRkZ8Y3wx">
            <a id="a_NTkzNTB8NXwxfDJ8MXxCQkUwRkZ8M3xGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/lille_v59350/" target="_blank" style="color:#333;text-decoration:none;">Météo Lille</a> ©<a href="http://www.meteocity.com">meteocity.com</a></div>
            <script type="text/javascript" src="http://widget.meteocity.com/js/NTkzNTB8NXwxfDJ8MXxCQkUwRkZ8M3xGRkZGRkZ8Y3wx"></script>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 col-md-pull-1 tchat">
        <div class="thumbnail">
          <div class="caption">
            <h3 class="text-center">Postez votre message</h3>
            <hr>
            <ul class="message-from-tchat">
              <li>Message 1</li>
              <li>Message 2</li>
              <li>Message 3</li>
              <li>Message 4</li>
              <li>Message 5</li>
              <li>Message 6</li>
              <li>Message 7</li>
            </ul>
            <form id="addMessage" action="addMessage.php" method="post">
              <div class="input-group">
                <span class="input-group-btn">
                  <textarea name="message" class="form-control"></textarea>
                  <button class="btn btn-primary form-control" type="submit">Envoyer</button>
                </span>
              </div><!-- /input-group -->
            </form>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
</div><!-- /#frontPage -->

<?php $this->stop('main_content') ?>
