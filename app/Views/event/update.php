<?php $this->layout('layout', ['title' => 'event_update']); ?>

<?php $this->start('main_content'); ?>

    <div>
        <a href="<?php echo $this->url('event_index') ?>">< Revenir à la liste des articles</a>
    </div>

    <form method="POST" action="">

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
        <button class="btn btn-submit">Editer l'article</button>
    </form>

    <?php
         if (!empty($message)) {
              foreach ($message as $mess) {
                  echo '<h1 class="text-success">' . $mess . '</h1>';
              }
          }
     ?>

<?php $this->stop('main_content'); ?>
