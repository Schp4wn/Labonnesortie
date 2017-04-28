<?php $this->layout('layout', ['title' => 'Tous les évènement']); ?>

<?php $this->start('main_content'); ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <h1>Evenement</h1>
        <a class="btn btn-success" href="<?= $this->url('event_create'   )?>">Ajouter un evenement</a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Titre</th>
              <th>Evenement</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($events as $event) : ?>
            <tr>
              <td><?php echo $event['id'];       ?></td>
              <td><?php echo $event['title'];    ?></td>
              <td><?php echo $event['event'];    ?></td>
              <td><?php echo $event['date_time'];?></td>
              <td>
                <a href="<?= $this->url('event_update' , ['id' => $event['id'] ] )?>"><i class="fa fa-scissors" aria-hidden="true"></i> Modifier</a>
                <a href="<?= $this->url('event_delete' , ['id' => $event['id'] ] )?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Suprimer</a>
                <a href="<?= $this->url('event_view'   , ['id' => $event['id'] ] )?>"><i class="fa fa-book" aria-hidden="true"></i> Lire article</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div><!-- /.col-md-10 -->

      <div class="col-md-2">
        <div class="list-group">
          <br />
          <?php if (($w_user['role'] === 'user')): ?>
          <a href="<?= $this->url('default_profile'); ?>" class="list-group-item">Evénements</a>
          <a href="#" class="list-group-item">Trajets</a>
          <a href="<?= $this->url('security_changeInfos'); ?>" class="list-group-item">Information</a>
          <a href="<?= $this->url('security_logout'); ?>" class="list-group-item">Déconnexion</a>
          <?php elseif ($w_user['role'] === 'admin'):?>
        </div>
        <h2> Statistiques </h2>
        <div class="list-group">
          <a href="<?= $this->url('event_index'); ?>" class="list-group-item">Evénements<span class="badge"><?= $count_events['events']; ?></span></a>
          <a href="#" class="list-group-item">Utilisateurs<span class="badge"><?= $count_users['users']; ?></span></a>
        </div>
        <hr>
        <div class="list-group">
          <a href="" class="list-group-item">Deconnexion</a>
        </div>
      <?php endif; ?>
    </div><!-- /.col-md-2 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->

<?php $this->stop('main_content'); ?>
