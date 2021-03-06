<?php $this->layout('layout', ['title' => 'Ajouter un événement']) ?>

<?php $this->start('main_content') ?>
<div id="register">
    <div class="container register">
      <h1 class="text-center">Ajouter un événement :</h1>

      <form class="col-lg-8 col-lg-push-2" method="POST">
        <div class="form-group <?= (isset($message['title'])) ? 'has-error' : ''?>">
          <label for="title">Titre :</label>
          <input type="text" class="form-control" name="title" value="">
          <?= (isset($message['title'])) ? '<span class="help-block">'.$message['title'].' </span>'  : '' ?>
        </div>

        <div class="form-group <?= (isset($message['event'])) ? 'has-error' : ''?>">
          <label for="event">Contenu :</label>
          <textarea type="text" class="form-control" name="event" value=""></textarea>
          <?= (isset($message['event'])) ? '<span class="help-block">'.$message['event'].' </span>'  : '' ?>
        </div>

        <div class="form-group <?= (isset($message['date'])) ? 'has-error' : ''?>">
          <label for="date">Date de l'événement :</label>
          <input type="date" class="form-control" name="date" placeholder="xx/xx/xxxx">
          <?= (isset($message['date'])) ? '<span class="help-block">'.$message['date'].' </span>'  : '' ?>

          <label for="hour">Heure :</label>
          <input type="time"  class="form-control" name="hour" placeholder="heure:minutes">
          <?= (isset($message['date'])) ? '<span class="help-block">'.$message['date'].' </span>'  : '' ?>
        </div>

        <div class="form-group <?= (isset($message['image'])) ? 'has-error' : ''?>">
          <label for="image">Image  :</label>
          <input type="text" class="form-control" name="image"  placeholder="Url ...">
          <?= (isset($message['image'])) ? '<span class="help-block">'.$message['image'].' </span>'  : '' ?>
        </div>
        <hr>
        <div class="form-group">
          <label for="depart">Départ :</label>
          <input type='text' name="depart" id="user_input_autocomplete_address" class="form-control" placeholder="Entrez une adresse de départ" />
        </div>
        <div class="form-group">
          <label for="arrivee">Arrivée :</label>
          <input type='text' name='arrivee'  class="form-control" placeholder="Entrez une adresse d'arrivée" />
        </div>

        <button id="publie" type="submit" class="btn btn-default">Publier l'évènement</button>

      </form>
    </div>
</div>
<?php $this->stop('main_content') ?>
