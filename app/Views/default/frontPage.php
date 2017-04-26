<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div id="frontPage">
  <div class="container-fluid">
    <div class="row">
      <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
          <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
          <div style="position:absolute;display:block;background:url('<?= $this->assetUrl('img/slider/loading.gif') ?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
          <div>
            <!-- First slider -->
            <img data-u="image" src="<?= $this->assetUrl('img/slider/create-event.jpg') ?>" />
            <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">CREEZ VOS EVENEMENTS</div>
            <div style="position:absolute;top:300px;right:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">Vous avez la possibilité de créez vos événements ainsi que de retrouver tous ceux auxquels vous participez</div>
          </div>
            <div>
              <!-- Second slider -->
              <img data-u="image" src="<?= $this->assetUrl('img/slider/googlemap.png') ?>" />
              <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:rgb(113, 113, 113);line-height:60px;">PARTAGEZ VOS TRAJETS</div>
              <div style="position:absolute;top:300px;right:30px;width:480px;height:120px;z-index:0;font-size:30px;color:rgb(113, 113, 113);line-height:38px;">Vous connaissez un parcours qui mérite d'être connu, venez le partager et découvrez un tas d'autres parcours</div>
            </div>
            <div>
              <!-- Third slider -->
              <img data-u="image" src="<?= $this->assetUrl('img/slider/blue.jpg') ?>" />
              <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">CONSULTEZ LA METEO</div>
              <div style="position:absolute;top:300px;right:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">Pour ne plus être surpris par le temps capricieux de notre région, consultez la météo de chaque jour</div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
          <!-- bullet navigator item prototype -->
          <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
      <!-- Arrow Navigator -->
      <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
      <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#frontPage -->

<?php $this->stop('main_content') ?>
