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
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) : ?><!--ici on a recuperer $articles grace a $this->show('article/index' , ['articles' => $articles]); -->
            <tr>
              <td><?php echo $user['id'];       ?></td>
              <td><?php echo $user['lastname'];    ?></td>
              <td><?php echo $user['firstname'];    ?></td>
              <td><?php echo $user['username'];?></td>
              <td><?php echo $user['email'];?></td>
              <td>
                <select class="" name="">
                  <option class="" value="Administrateur">Administrateur</option>
                  <option class="" value="Utilisateur">Utilisateur</option>
                </select>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>  <!-- row -->
  </div> <!-- container-fluid -->

<?php $this->stop('main_content'); ?>
