<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>
  <div class="container-fluid">
    <h1>Profil : <?= $w_user['firstname'];?>  <?= $w_user['lastname']; ?></h1>

    <div class="row">
      <div class="col-md-6 col-md-push-3">
        <?php if(isset($profil_event)) {  ?>
        <?php foreach( $profil_event as $event) { ?>

        <h1> <?= $event['title']; ?> </h1>
        <p> <?php echo $event['event']; ?> </p>
        <div>
          <img src="<?= $event['image']; ?>" alt="Event img">
        </div>
        <p> Evenement posté le  <?php $datetime = new DateTime($event['post']);

        // La class IntlDateFormatter est disponible dans l'extension php_intl. Il faut donc vérifier qu'elle soit bien installée dans le php.ini (extension=php_intl.dll)
        // http://benjamin.leveque.me/formater-une-date-avec-php-5-3-l10n-partie-2.html
        $intl = new IntlDateFormatter(
        'fr_FR',
        IntlDateFormatter::FULL,
        IntlDateFormatter::MEDIUM
        );
        echo $intl->format($datetime);
        ?> </p>
        <a class="btn btn-primary" href="<?= $this->url('event_update' , ['id' => $event['id'] ] ) ?>?redirect=default_profile">Modifier</a>
        <a class="btn btn-danger"  href="<?= $this->url('event_delete', ['id' => $event['id'] ] )?>">Suprimer</a>
        <?php } ?>

        <?php }
        else {
          echo '<div><h1>Vous n\'avez pas ajouté d\'évènement.</h1></div>';
        } ?>
      </div>  <!-- col-md-6 col-md-push-3 -->

      <div class="col-md-3  col-md-push-3">
        <div class="list-group">
          <a href="<?= $this->url('default_profile'); ?>" class="list-group-item">Mes événements</a>
          <a href="#" class="list-group-item">Mes trajets</a>
          <a href="<?= $this->url('security_changeInfos'); ?>" class="list-group-item">Changer mes informations</a>
          <a href="<?= $this->url('security_logout'); ?>" class="list-group-item">Déconnexion</a>
        </div>
      </div>
    </div>  <!-- row -->
  </div> <!-- container-fluid -->


  <?php var_dump($w_user['role']); ?>
  <?php var_dump( $profil_event );?>

<?php $this->stop('main_content'); ?>
