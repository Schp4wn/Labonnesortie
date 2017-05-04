<?php $this->layout('layout', ['title' => 'Evénements de votre ville']) ?>

<?php $this->start('main_content') ?>
<!-- Balade du jour -->

<div class="container">

<div class="container search_page max_width">
  <h2 class="text-center">Toutes Nos Sorties</h2>
<div class="col-md-12 center-block" style="border-top:2px solid #036e7f;">

  <div class="row" id="searching">

    <?php foreach ($result as  $value) :?>
    <div class="col-md-4">
      <br/>
        <div class="well">
          <div class="center">
            <img class="img-responsive auto-marg base-size" src="<?= $value['image']; ?>" alt="Event img">
          </div>
          <h3 class="text-center">
            <a href="<?= $this->url('event_view', ['id' => $value['event_id'] ] );?>" title=""><?= $value['title']; ?></a>
          </h3>
            <table class="table table-bordered table-condensed">
              <tbody>
                <tr>
                  <td class="strong">Départ</td>
                  <td><i class="icon-road"></i> <b><?= $value['depart']; ?></b></td>
                </tr>
                <tr>
                  <td class="strong">Arrivée</td>
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
                  <td><?= $value['username']; ?></td>
                </tr>
            </tbody>
          </table>
        </div><!--well-->
    </div>
        <?php endforeach; ?>
      <div class="clear"></div>
    </div>

  </div>
  <h3>
    <a href="<?= $this->url('event_index') ?>" class="control-form text-center col-lg-12 col-md-12 center-block">Pour plus d'événements</a>

  </h3>

</div>

<?php $this->stop('main_content') ?>
