<?php $this->layout('layout', ['title' => 'Search']) ?>

<?php $this->start('main_content') ?>
<!-- Balade du jour -->
<div class="container">
<div class="col-md-12 center-block">
  <div class="row" id="searching">
    <?php foreach ($result as  $value) :?>
    <div class="col-md-4">
      <br/>
        <div class="well">
          <div class="center">
            <img src="<?= $value['image']; ?>" alt="Event img">
          </div>
          <h3>
            <a href="<?= $this->url('event_view', ['id' => $value['id'] ] );?>" title=""><?= $value['title']; ?></a>
          </h3>
          <table class="table table-bordered table-condensed">
            <tbody>
              <tr>
                <td class="strong">Départ</td>
                <td><i class="icon-road"></i> <b><?= $value['depart']; ?></b></td>
              </tr>
              <tr>
                <td class="strong">Arrivé</td>
                <td><i class="icon-road"></i> <b><?= $value['arrivee']; ?></b></td>
              </tr>
            <tr>
              <td class="strong">Distance</td>
              <td><i class="icon-road"></i><b><?= $value['distance']; ?></b></td>
            </tr>
            <tr>
              <td class="strong">Temps</td>
              <td><i class="icon-road"></i> <b><?= $value['temps_dist']; ?></b></td>
            </tr>
           <tr>
              <td class="strong">Créée par</td>
              <td>
                  <?= $value['username']; ?>
              </td>
           </tr>
          </tbody>
        </table>
        </div><!--well-->
        </div>
        <?php endforeach; ?>
      <div class="clear"></div>
    </div>
  </div>
</div>

<?php $this->stop('main_content') ?>
