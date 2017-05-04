<?php $this->layout('layout', ['title' => 'Profil de l\'administrateur']) ?>

<?php $this->start('main_content') ?>
<div id="profileAdmin">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-sm-3 panel-admin">
        <img src="<?= $this->assetUrl('img/casque-panel.jpg')?>" class="img-responsive center-block" alt="Casque">
        <h3 class="text-center">Bonjour <?= $user['firstname']; ?></h3 >
        <div class="list-group">
          <ul class="list-unstyled" id="admin">
            <li>
              <a href="<?= $this->url('default_profile_admin'); ?> " class="list-group-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Evénements<span class="badge"><?= $count_events['events']; ?></span></a>
            </li>
            <li>
              <a href="<?= $this->url('default_userslist'); ?>" class="list-group-item"><i class="fa fa-user-circle" aria-hidden="true"></i> Utilisateurs<span class="badge"><?= $count_users['users']; ?></span></a>
            </li>
          </ul>
        </div>
        <hr>
        <div class="list-group">
          <a href="<?= $this->url('security_logout'); ?>" class="list-group-item">Deconnexion</a>
        </div>
      </div>
      <div class="col-md-10 col-sm-9">
        <h2 class="text-center">Toutes Nos Sorties</h2>
        <div class="container" style="border-top:2px solid #036e7f;"></br>
        <a class="btn btn-success" href="<?= $this->url('event_create')?>">Ajouter un evenement</a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Titre</th>
              <th>Evenement</th>
              <th>Date</th>
              <th>Modifications</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($events as $event) : ?><!--ici on a recuperer $articles grace a $this->show('article/index' , ['articles' => $articles]); -->
            <tr>
              <td><?php echo $event['id'];       ?></td>
              <td><?php echo $event['title'];    ?></td>
              <td><?php echo $event['event'];    ?></td>
              <td><?php echo $event['date_time'];?></td>
              <td>
                <a href="<?= $this->url('event_update' , ['id' => $event['id'] ] )?>"><i class="fa fa-scissors" aria-hidden="true"></i> Modifier</a>
                <a href="<?= $this->url('event_delete' , ['id' => $event['id'] ] )?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Suprimer</a>
                <a href="<?= $this->url('event_view'   , ['id' => $event['id'] ] )?>"><i class="fa fa-book" aria-hidden="true"></i> Lire</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>  <!-- .row -->
  </div> <!-- .container-fluid -->
</div>  <!-- #profileAdmin -->


<?php $this->stop('main_content'); ?>
