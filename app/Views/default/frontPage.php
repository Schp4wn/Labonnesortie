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
        <img src="<?= $this->assetUrl('img/harley.jpg')?>" alt="">
      </div>
          <div class="item">
            <img src="<?= $this->assetUrl('img/styléé.jpg')?>" alt="">
          </div>
      <div class="item">
        <img src="<?= $this->assetUrl('img/moto.jpg')?>" alt="">
      </div>
      <div class="item">
        <img src="<?= $this->assetUrl('img/tjravcmespoto.jpg')?>" alt="">
      </div>
      <div class="item">
        <img src="<?= $this->assetUrl('img/carousel/Perso_BSM_doigt.png')?>" alt="">
        </div>
      <div class="item">
        <img src="<?= $this->assetUrl('img/course.gif')?>" alt="">
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
    </div></div>
  </div><!-- /.row -->

  <!-- Recherche -->
  <div class="container">
    <div class="row">
      <form class="search_bar" action="<?= $this->url('event_search');?>">
        <div class="form-group">
          <label class="text-center" for="search">barre de recherche</label>
          <input type="text" class="form-control class-lg-6 class-md-6" name="search" id="search" placeholder="Entrez le nom de la ville...">
        </div>
        <button type="submit" class="form-control class-lg-4 class-md-4" name="" value="">search</button>
        <?php if (isset($w_flash_message)): ?>
          <?php  $w_flash_message->level; ?>
          <?php echo $w_flash_message->message; ?>

        <?php endif; ?>
      </form>
    </div>
  </div>

    <!-- Balade du jour -->
  <div class="container">
    <div class="row" id="lastevent">
    <div class="col-md-12 center-block">
        <h2 class="text-center">Les derniers événements postés :</h2>
        <div class="container" style="border-top:2px solid #036e7f;">
        <?php foreach ($lastevent as $value) :?>
        <div class="col-md-4 col-sm-6">
          <br/>
            <div class="well">
              <div class="center">
                <img src="<?= $value['image']; ?>" alt="Event img">
              </div>
              <h3>
                <a href="<?= $this->url('event_view', ['id' => $value['id_event'] ] );?>" title=""><?= $value['title']; ?></a>
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
                  <td class="strong">Créé par</td>
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
  </div><!-- /.container-fluid -->
</div><!-- /#frontPage -->

<?php $this->stop('main_content') ?>
<?php $this->start('script') ?>
<script type="text/javascript">

var route_search = '<?= $this->url('event_search');?>';
      var $input = $('#search');

      $input
          .typeahead({
              source: function (query, process) {
                  return $.get(route_search+query, function (data) {
                      return process(data);
                  });
              },
              afterSelect: function(data){
                  window.location.href = '<?= $this->url('event_search');?>'.concat(data.id);
                  console.log(data);
              }
          });
          </script>
<?php $this->stop('script') ?>
