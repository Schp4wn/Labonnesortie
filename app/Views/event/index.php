<?php $this->layout('layout', ['title' => 'Tous les évènement']); ?>

<?php $this->start('main_content'); ?>
  <div id="allEventsUser" class="container">
   <h1>Tous les  Article</h1>
   <a class="btn btn-success" href="<?= $this->url('event_create')?>">Ajouter un evenement</a><br />

    <div class="container-fluid">
      <div class="row">
          <?php foreach( $events as $event) : ?>
              <div class="well">  
                  <div class="col-md-6">
                   
                    <img class="img-responsive" src="<?= $event['image']; ?>" alt="Event img">
                  </div>
                  <div class="col-md-6 col-pull-md-2">   
                    <h1><?= $event['title']; ?></h1>
                    
                    <p><?php echo $event['event']; ?></p>

                    <p> Evénement posté le  <?php $datetime = new DateTime($event['post']);

                      $intl = new IntlDateFormatter( 'fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::MEDIUM); echo $intl->format($datetime); ?></p>
                  </div>
                      <a class="btn btn-default" href="<?= $this->url('event_view', ['id' => $event['id'] ] )?>"><i class="fa fa-search-plus"></i> Consulter l'évènement</a>
                </div><!--.img well-->
          <?php endforeach; ?>
      </div>
              
   
      <div class="col-lg-6 adress-event">
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
          <img class="img-responsive" src="<?= $this->assetUrl('img/tampon_evenement.png') ?>" alt="event">
        </div>
      </div>
    </div>
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
<?php //var_dump($lastevents) ?>
<?php $this->stop('main_content'); ?>
