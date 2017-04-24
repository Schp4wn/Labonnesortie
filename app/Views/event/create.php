<?php $this->layout('layout', ['title' => 'Ajouté un evenelent']) ?>

<?php $this->start('main_content') ?>

    <?php 
     //   foreach($message as $mess){
     //     echo '<div>' . $mess . '</div>';
     //   }
    ?>

  <h1>Ajouter un evenement</h1>

  <form class="col-lg-7" method="POST">

    <div class="form-group">
      <label for="title">Titre :</label>
      <input type="text" class="form-control" name="title" value="">
    </div>

    <div class="form-group">
      <label for="content">contenu :</label>
      <textarea type="text" class="form-control" name="event" value=""></textarea>
    </div>

    <div class="form-group">
      <label for="date">Date de l'evenement :</label>
      <input type="text" class="form-control" name="date"  placeholder="xx/xx/xxxx">
    </div>

    <button id="publie" type="submit" class="btn btn-default">Publier larticle</button>

  </form>

<?php $this->stop('main_content') ?>