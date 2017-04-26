<?php $this->layout('layout', ['title' => 'Changer mes informations']) ?>

<?= $this->start('sidebar') ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-md-push-5">
      <div class="list-group">
        <a href="#" class="list-group-item">Mes événements</a>
        <a href="#" class="list-group-item">Mes trajets</a>
        <a href="<?= $this->url('security_changeInfos'); ?>" class="list-group-item">Changer mes informations</a>
        <a href="<?= $this->url('security_logout'); ?>" class="list-group-item">Déconnexion</a>
      </div>
    </div>
  </div>
</div>

<?= $this->stop('sidebar') ?>

<?php $this->start('main_content') ?>

<!-- <?php var_dump($user); ?> -->

  <div class="col-md-3 col-md-push-3">
    <div class="form-group">
      <label for="">Adresse email actuelle :</label>
      <input class="form-control" type="text" name="known_email" value="remi" disabled="">
    </div>
    <form class="" action="" method="post">
      <div class="form-group">
        <label for="email">Email :</label>
        <input id="email" type="text" class="form-control" placeholder="Email">
      </div>
      <button class="btn btn-success" type="submit" name="button">Changer mon adresse email</button>
    </form>
  </div>


<?php $this->stop('main_content') ?>
