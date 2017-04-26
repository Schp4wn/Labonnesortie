<?php $this->layout('layout', ['title' => 'Ajouté un evenelent']) ?>

<?php $this->start('main_content') ?>

  <h1>Ajouter un evenement</h1>

  <form class="col-lg-7" method="POST">

    <div class="form-group <?= (isset($message['title'])) ? 'has-error' : ''?>">
      <label for="title">Titre :</label>
      <input type="text" class="form-control" name="title" value="">
      <?= (isset($message['title'])) ? '<span class="help-block">'.$message['title'].' .</span>'  : '' ?>
    </div>

    <div class="form-group <?= (isset($message['event'])) ? 'has-error' : ''?>">
      <label for="event">contenu :</label>
      <textarea type="text" class="form-control" name="event" value=""></textarea>
      <?= (isset($message['event'])) ? '<span class="help-block">'.$message['event'].' .</span>'  : '' ?>
    </div>

    <div class="form-group <?= (isset($message['date'])) ? 'has-error' : ''?>">
      <label for="date">Date de l'evenement :</label>
      <input type="text" class="form-control" name="date"  placeholder="xx/xx/xxxx  Heure:Min">
      <?= (isset($message['date'])) ? '<span class="help-block">'.$message['date'].' .</span>'  : '' ?>
    </div>

    <div class="form-group <?= (isset($message['image'])) ? 'has-error' : ''?>">
      <label for="image">Image  :</label>
      <input type="text" class="form-control" name="image"  placeholder="Url ...">
      <?= (isset($message['image'])) ? '<span class="help-block">'.$message['image'].' .</span>'  : '' ?>
    </div>
    <hr>
    <div class="form-group">
      <label for="depart">Départ :</label>
      <input type='text' name='depart' class="form-control" placeholder="Entrez une addresse de départ" />
    </div>
    <div class="form-group">
      <label for="arrivee">Arrivée :</label>
      <input type='text' name='arrivee' class="form-control" placeholder="Entrez une addresse de d\'arrive" />
    </div>

    <button id="publie" type="submit" class="btn btn-default">Publier larticle</button>

  </form>
  <?php
       if ( $message ){
            foreach ($message as $mess) {
                echo '<h1 class="text-success">' . $mess . '</h1>';
            }
        }
   ?>

<?php $this->stop('main_content') ?>
