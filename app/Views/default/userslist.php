<?php $this->layout('layout', ['title' => 'Liste des utilisateurs']) ?>

<?php $this->start('main_content') ?>
<div id="userslist">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-sm-3 panel-admin">
        <img src="<?= $this->assetUrl('img/casque-panel.jpg')?>" class="img-responsive center-block" alt="Casque">
        <h3 class="text-center">Bonjour <?= $user['firstname']; ?></h3 >
        <div class="list-group">
          <a href="<?= $this->url('default_profile_admin'); ?>" class="list-group-item">Evénements<span class="badge"><?= $count_events['events']; ?></span></a>
          <a href="<?= $this->url('default_userslist'); ?>" class="list-group-item">Utilisateurs<span class="badge"><?= $count_users['users']; ?></span></a>
        </div>
        <hr>
        <div class="list-group">
          <a href="<?= $this->url('security_logout'); ?>" class="list-group-item">Deconnexion</a>
        </div>
      </div>
      <div class="col-md-10 col-sm-9">
        <h2 class="text-center">Utilisateurs</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Nom d'utilisateur</th>
              <th>Email</th>
              <th>Role</th>
              <th>Modifications</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) : ?>
            <tr>
              <td><?= $user['id']; ?></td>
              <td><?= $user['lastname']; ?></td>
              <td><?= $user['firstname']; ?></td>
              <td><?= $user['username']; ?></td>
              <td><?= $user['email']; ?></td>
              <td><?= $user['role']; ?></td>
              <td>
              <form class="" action="" method="post">
                <select class="" name="role">
                  <option class="" value="admin">Administrateur</option>
                  <option class="" value="user">Utilisateur</option>
                </select>
                <button type="submit" name="button-<?= $user['id']; ?>">Changer le role</button>
              </form>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>  <!-- .row -->
  </div> <!-- .container-fluid -->
</div> <!-- #userslist -->

<?php $this->stop('main_content'); ?>
