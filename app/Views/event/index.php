<?php $this->layout('layout', ['title' => 'Tous les évènement']); ?>

<?php $this->start('main_content'); ?>
  <div id="allEventsUser" class="container">
    <h2 class="text-center">Toutes Nos Sorties</h2>
    <div class="container" style="border-top:2px solid #036e7f;">
<?php if(isset($count_events)): ?>
   <a class="btn btn-success" href="<?= $this->url('event_create')?>">Ajouter un evenement</a><br />
<?php endif; ?>
    <div class="container-fluid">
      <div class="row">
          <?php foreach( $events as $event) : ?>
              <div class="well">
                  <div class="col-md-6">
                    <img class="img-responsive" src="<?= $event['image']; ?>" alt="Event img">
                  </div>
                  <div class="col-md-6 col-md-pull-3">
                    <h1><?= $event['title']; ?></h1>

                    <p><?php echo $event['event']; ?></p>
                    <p> Evénement posté le  <?php $datetime = new DateTime($event['post']);

                      $intl = new IntlDateFormatter( 'fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::MEDIUM); echo $intl->format($datetime); ?></p>
                      <h4>depart : <?= $event['depart']; ?></h4>
                      <h4>Arriée : <?= $event['arrivee']; ?></h4>
                  </div>
                      <a class="btn btn-default" href="<?= $this->url('event_view', ['id' => $event['id_events'] ] )?>"><i class="fa fa-search-plus"></i> Consulter l'évènement</a>
                </div><!--.img well-->
          <?php endforeach; ?>
      </div>
    <div class="row">
   <ul class="pagination col-md-4 col-md-push-4">
			<?php if ($page > 1): ?>
				<li><a href="<?= $this->url('event_index' , ['page' => $page - 1]); ?>"><<</a></li>
			<?php endif; ?>

			<?php for ($i=1; $i <= $max_pages ; $i++) { ?>
				<li><a href="<?= $this->url('event_index', ['page' => $i ] );  ?>"><?php echo $i; ?></a></li>
			<?php } ?>

			<?php if ($max_pages > $page ): ?>
				<li><a href="<?= $this->url('event_index' , ['page' => $page + 1]); ?>">>></a></li>
			<?php endif; ?>
		</ul>
</div>
<?php $this->stop('main_content'); ?>
