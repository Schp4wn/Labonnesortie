<?php $this->layout('layout', ['title' => 'event_update']); ?>

<?php $this->start('main_content'); ?>

    <h1>Modifier un evenement</h1>

    <div class="container">
        <div>
            <?php if($w_user) : ?>
                <a href="<?php echo $this->url('event_index') ?>">< Revenir à la liste des articles</a>
            <?php else : ?>

            <?php endif; ?>

        </div>
<?php var_dump($w_user);?>
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
                <input type="date" class="form-control" name="date" value="<?= $event['date_time']; ?>"  placeholder="xx/xx/xxxx ">
              </div>

              <div class="form-group <?= (isset($message['hour'])) ? 'has-error' : ''?>">
                <label for="hour">Heure :</label>
                <input type="time"  class="form-control" value="<?= $event['hour']; ?>" name="hour" placeholder="Heure:Min">
            <?= (isset($message['hour'])) ? '<span class="help-block">'.$message['hour'].' .</span>'  : '' ?>
            </div>

            <div class="form-group <?= (isset($message['image'])) ? 'has-error' : ''?>">
                <label for="image">Image :</label>
                <input type="text" class="form-control" name="image" value="<?= $event['image']; ?>"  placeholder="xx/xx/xxxx  Heure:Min">
            <?= (isset($message['image'])) ? '<span class="help-block">'.$message['image'].' .</span>'  : '' ?>
            </div>


             <hr>
            <div class="form-group">
              <label for="">Départ :</label>
              <input type='text' name='depart' class="form-control" value="<?= $event['depart']; ?>"  placeholder="Entrez une addresse de départ" />
              <?= (isset($message['depart'])) ? '<span class="help-block">'.$message['depart'].' .</span>'  : '' ?>
            </div>

            <div class="form-group">
              <label for="">Arrivée :</label>
              <input type='text' name='arrivee' class="form-control" value="<?= $event['arrivee']; ?>" placeholder="Entrez une addresse de d\'arrive" />
              <?= (isset($message['arrivee'])) ? '<span class="help-block">'.$message['arrivee'].' .</span>'  : '' ?>
            </div>
            <button class="btn btn-submit">Editer l'article</button>
        </form>

        <?php
            var_dump($event);
        ?>

        <?php
            if (isset($message['success'])) {
                    echo '<h1 class="text-success">' . $mess . '</h1>';
            }
        ?>
    </div>
<?php $this->stop('main_content'); ?>
