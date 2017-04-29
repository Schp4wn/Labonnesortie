<?php $this->layout('layout', ['title' => 'Tous les évènement']); ?>

<?php $this->start('main_content'); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 description-event">
        <div class="col-lg-6">
          <h4>Evenement à venir</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

      <div class="col-lg-6 adress-event">
        <div class="col-lg-6">
          <h4>Moto show</h4>
          <ul class="list-unstyled">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <li>104 avenue de la République</li>
            <li>59110</li>
            <li>La Madeleine</li>
          </ul>
          <p><i class="fa fa-calendar-o" aria-hidden="true"></i> Samedi 08 avril 2017</p>
        </div>
        <div class="col-lg-6">
          <img class="img-responsive" src="<?= $this->assetUrl('img/tampon_evenement.png') ?>" alt="event">
        </div>
      </div>
    </div>
  </div><!-- /.row -->
</div><!-- /.container-fluid -->

<?php $this->stop('main_content'); ?>
