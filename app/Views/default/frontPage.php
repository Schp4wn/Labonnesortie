<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<!-- Swiper Silder
    ================================================== -->
<!-- Slider main container -->
<div class="swiper-container main-slider" id="myCarousel">
  <div class="swiper-wrapper">
    <div class="swiper-slide slider-bg-position" style="background:url('<?= $this->assetUrl('img/harley.jpg');?>')" data-hash="slide1">
      <h2>Partagez vos balades en moto !</h2>
    </div>
    <div class="swiper-slide slider-bg-position" style="background:url('<?= $this->assetUrl('img/planet.jpg');?>')" data-hash="slide2">
      <h2>Trouvez, Parcourez, Contribuez !</h2>
    </div>
    <div class="swiper-slide slider-bg-position" style="background:url('<?= $this->assetUrl('img/roa.jpg');?>')" data-hash="slide1">
      <h2>Trouvez des trajets touristiques en moto</h2>
    </div>
    <div class="swiper-slide slider-bg-position" style="background:url('<?= $this->assetUrl('img/moto.jpg');?>')" data-hash="slide2">
      <h2>Profitez de votre Carte en ligne</h2>
    </div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Navigation -->
  <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
  <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
</div>

<!-- slider
    ================================================== -->
  <!-- Recherche -->
  <div class="headline" style="background-color:slategrey; height:122px;" >
	<div class="container">
		<div class="center">
			<p class="lead">Découvrez les <span class="headline-distance"><?= $kilo['SUM(distance)'] ?></span> kms de balades à moto dans toute la région</p>		</div>
		<div>
			<meta>
      <form class="search_bar" action="<?= $this->url('event_search');?>">
        <div class="form-group col-md-2">
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="search" id="search" placeholder="Entrez le nom de la ville...">
        </div>
        <div class="form-group col-md-2">
          <button type="submit" class="btn btn-primary btn-large visible-phone hidden-desktop hidden-tablet"><span class="fa fa-search"></span> Rechercher une balade</button>
        </div>
          <?php if (isset($w_flash_message)): ?>
            <?php  $w_flash_message->level; ?>
            <?php echo $w_flash_message->message; ?>
          <?php endif; ?>
        </form>
					</div>
				</div>
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
