<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?= $this->start('sidebar') ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
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
