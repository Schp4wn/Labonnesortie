<?php $this->layout('layout', ['title' => 'event_update']); ?>

<?php $this->start('main_content'); ?>

    <div>
        <a href="<?php echo $this->url('event_index') ?>">< Revenir à la liste des articles</a>
    </div>

    <form method="POST" action="">

        <div class="form-group <?= (isset($message['title'])) ? 'has-error' : ''?>">
          <label for="title">Titre :</label>
          <input type="text" class="form-control" name="title" value="<?php echo  $event['title']; ?>">
          <?= (isset($message['title'])) ? '<span class="help-block">'.$message['title'].' .</span>'  : '' ?>
        </div>

        <div class="form-group <?= (isset($message['event'])) ? 'has-error' : ''?>">
          <label for="event">contenu :</label>
          <textarea type="text" class="form-control" name="event" ><?= $event['event']; ?></textarea>
          <?= (isset($message['event'])) ? '<span class="help-block">'.$message['event'].' .</span>'  : '' ?>
        </div>

        <div class="form-group <?= (isset($message['date_time'])) ? 'has-error' : ''?>">
          <label for="date">Date de l'evenement :</label>
          <input type="text" class="form-control" name="date" value="<?= $event['date_time']; ?>"  placeholder="xx/xx/xxxx  Heure:Min">
          <?= (isset($message['date_time'])) ? '<span class="help-block">'.$message['date_time'].' .</span>'  : '' ?>
        </div>

        <div class="form-group <?= (isset($message['image'])) ? 'has-error' : ''?>">
          <label for="image">Image :</label>
          <input type="text" class="form-control" name="image" value="<?= $event['image']; ?>"  placeholder="xx/xx/xxxx  Heure:Min">
          <?= (isset($message['image'])) ? '<span class="help-block">'.$message['image'].' .</span>'  : '' ?>
        </div>
        <div class="form-group">
            <label for="">Départ :</label>
            <input type="text" class="form-control" name="depart_text">
        </div>
        <div class="form-group">
            <label for="">Arrivée :</label>
            <input type="text" class="form-control" name="arrive_text">
        </div>
        <button class="btn btn-submit">Editer l'article</button>
    </form>

    <?php
        var_dump($event);   
    ?>

    <?php
         if (!empty($message)) {
              foreach ($message as $mess) {
                  echo '<h1 class="text-success">' . $mess . '</h1>';
              }
          }
     ?>

<?php $this->stop('main_content'); ?>
