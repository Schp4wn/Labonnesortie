<?php $this->layout('layout', ['title' => 'Tous les évènement']); ?>

<?php $this->start('main_content'); ?>

   <h1>Tous les  Article</h1>
   <a class="btn btn-success" href="<?= $this->url('event_create'   )?>">Ajouter un evenement</a>
   <div class="row">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Titre</th>
              <th>Evenement</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($events as $event) { ?><!--ici on a recuperer $articles grace a $this->show('article/index' , ['articles' => $articles]); -->
                  <tr>
                    <td><?php echo $event['id'];       ?></td>
                    <td><?php echo $event['title'];    ?></td>
                    <td><?php echo $event['event'];    ?></td>
                    <td><?php echo $event['date_time'];?></td>
                    <td>
                        <a class="btn btn-primary" href="<?= $this->url('event_update' , ['id' => $event['id'] ] )?>">Modifier</a>
                        <a class="btn btn-danger"  href="<?= $this->url( 'event_delete', ['id' => $event['id'] ] )?>">Suprimer</a>
                        <a class="btn btn-success" href="<?= $this->url('event_view'   , ['id' => $event['id'] ] )?>">Lire article</a>
                    </td>
                  </tr>
            <?php  } ?>
          </tbody>
        </table>
      </div>

<?php $this->stop('main_content'); ?>
