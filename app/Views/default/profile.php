<?php $this->layout('layout', ['title' => 'Mon profil']) ?>

<?php $this->start('main_content') ?>
  <div class="container-fluid profil_index">
    <div class="row">
      <div class="col-md-3 ">
          <div class="list-group ">
            <ul class="list-unstyled">
              <li><a href="<?= $this->url('event_create'); ?>" class="list-group-item first">Ajouter un évènement ?</a></li>
              <br/>
              <li><a href="<?= $this->url('default_profile'); ?>" class="list-group-item ">Mes événements <span class="badge badge-default"><?php echo $count_events['events'] ?></span></a></li>
              <li><a href="#" class="list-group-item">Km parcourus <span class="badge badge-default"><?php echo $km['SUM(distance)'] ?></span></a></li>
              <li><a href="<?= $this->url('security_changeInfos'); ?>" class="list-group-item">Information</a></li>
              <li><a href="<?= $this->url('security_logout'); ?>" class="list-group-item">Déconnexion</a></li>
            </ul>
            <br/>
          </div><!--list-group-->
      </div><!--col-md-3-->

      <div class="col-md-6 ">
        <h1>Profil : <?= $w_user['firstname'];?>  <?= $w_user['lastname']; ?></h1>
          <?php if(!empty($profil_event)) : ?>
            <?php foreach( $profil_event as $event) : ?>

              <div class="img well">
                <img src="<?= $event['image']; ?>" alt="Event img">
                <h1><?= $event['title']; ?></h1>
                <p><?php echo $event['event']; ?></p>
                <p> Evénement posté le  <?php $datetime = new DateTime($event['post']);
                  $intl = new IntlDateFormatter(
                  'fr_FR',
                  IntlDateFormatter::FULL,
                  IntlDateFormatter::MEDIUM
                  );
                  echo $intl->format($datetime); ?></p>
                <div class="btn-group" role="group" aria-label="...">
                  <a class="btn btn-default" href="<?= $this->url('event_update' , ['id' => $event['id'] ] ) ?>?redirect=default_profile"><i class="fa fa-scissors"></i> Modifier</a>
                  <a class="btn btn-default" href="<?= $this->url('event_delete', ['id' => $event['id'] ] )?>"><i class="fa fa-trash-o"></i> Suprimer</a>
                  <a class="btn btn-default" href="<?= $this->url('event_view', ['id' => $event['id'] ] )?>"><i class="fa fa-search-plus"></i> Consulter l'évènement</a>
                </div>
              </div><!--.img well-->
              <hr>
            <?php endforeach; ?>
          <?php else: ?>
              <h2>Vous n'avez pas ajouté d'événement.</h2>
              <p>Cliquez <a href="<?= $this->url('event_create')?>">ici</a> pour rajouter votre premier événement.</p>
          <?php endif; ?>
        </div><!--col-md-6-->
    </div>  <!-- row -->
  </div> <!-- container-fluid -->

<?php $this->stop('main_content'); ?>
