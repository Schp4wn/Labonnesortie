<?php $this->layout('layout', ['title' => 'Liste des utilisateurs']) ?>

<?php $this->start('main_content') ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <h2> Statistiques </h2>
        <div class="list-group">
          <a href="<?= $this->url('default_profile_admin'); ?>" class="list-group-item">Evénements<span class="badge"><?= $count_events['events']; ?></span></a>
          <a href="<?= $this->url('default_userslist'); ?>" class="list-group-item">Utilisateurs<span class="badge"><?= $count_users['users']; ?></span></a>
        </div>
        <hr>
        <div class="list-group">
          <a href="" class="list-group-item">Deconnexion</a>
        </div>
      </div>
      <div class="col-md-9">
        <h1>Utilisateurs</h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Nom d'utilisateur</th>
              <th>Email</th>
              <th>Role</th>
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
            <?php
            // if (isset($_POST['button-1'])) {
            //   var_dump($_POST['role']);
            // } ?>
          </tbody>
        </table>
      </div>
    </div>  <!-- row -->
  </div> <!-- container-fluid -->

<?php $this->stop('main_content'); ?>
