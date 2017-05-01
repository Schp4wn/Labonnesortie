<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

    <div id="frontPage">
  <div class="container-fluid">
      <div class="col-md-12" id="carousel" >
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?= $this->assetUrl('img/moto.jpg')?>" alt="">
      </div>

      <div class="item">
        <img src="<?= $this->assetUrl('img/plan.jpg')?>" alt="">
      </div>

      <div class="item">
        <img src="<?= $this->assetUrl('img/course.gif')?>" alt="">
      </div>
      <div class="item">
        <img src="<?= $this->assetUrl('img/carte.png')?>" alt="">
      </div>
      <div class="item">
        <img src="<?= $this->assetUrl('img/carousel/Perso_BSM_doigt.png')?>" alt="">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
  </div><!-- /.row -->
		<div class="row" id="lastevent">
      <?php foreach ($lastevent as  $value) :?>
      <div class="col-md-4">
        <br/>
          <div class="well">
            <div class="center">
              <img style="" src="<?= $value['image']; ?>" alt="Event img">
            </div>
            <h3>
              <a href="#" title=""><?= $value['title']; ?></a>
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
                    <a href="/profil/dom94"><?= $value['username']; ?></a>
                </td>
             </tr>
            </tbody></table>
          </div><!--well-->
          </div>
          <?php endforeach; ?>
        <div class="clear"></div>
      </div>
  </div><!-- /.container-fluid -->
</div><!-- /#frontPage -->

<?php $this->stop('main_content') ?>
