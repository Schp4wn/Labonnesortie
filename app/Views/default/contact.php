<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
  <div id="contact">
    <div class="container">
      <div class="row">
        <h2 class="text-center">Contact</h2>
        <hr>
        <div class="col-md-6 col-md-push-0 col-sm-8 col-sm-push-2">
          <h2 class="let-a-message">Laissez nous un message</h2>
          <br/>
          <form action="" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" name="nom" placeholder="Pseudo">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="mail" placeholder="Mail">
            </div>
            <div class="form-group">
              <textarea name="contenus" id="" cols="30" rows="10" class="form-control" placeholder="Votre message"></textarea>
            </div>
              <input class="btn btn-success center-block" type="submit" value="Envoyer">
          </form>
        </div>
        <div class="col-md-6">
          <!-- <h2 class="text-center">Retrouvez-nous :</h2> -->
          <div class="find-us">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2529.9536265191095!2d3.073247951170044!3d50.64655238099581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c32a7328783e49%3A0x456a8a96b2b14da5!2s105+Avenue+de+la+R%C3%A9publique%2C+59110+La+Madeleine!5e0!3m2!1sfr!2sfr!4v1486024653664" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></p>
          </div>
        </div>
      </div>
      <h3 class="text-center">Réalisé par les 4 fantastiques de la Madeleine</h3>
    </div>
  </div>

<?php $this->stop('main_content'); ?>
