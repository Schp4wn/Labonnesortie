<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
		<link rel="stylesheet" href="<?= $this->assetUrl('css/frontp.css') ?>">
		  <div class="container-fluid">
    <div id="frontPage">
  <div class="container-fluid">
    <div class="row">
      <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:900px;height:500px;overflow:hidden;visibility:hidden;">
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
    <div class="sidebar-panel" style="min-height: 1181px;">
                    <div>
                        <h4>Les dix dernier Messages ->nb message <span class="badge badge-info pull-right">16</span></h4>
                        <div class="feed-element">
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="img/course.gif">
                            </a>
                            <div class="media-body">
                                message poste
                                <br>
                                <small class="text-muted">heure h:m.s</small>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-md">
                        <h4>Information Sortie</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <div class="row m-t-sm">
                            <div class="col-md-6">
                                <span class="bar" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><rect fill="#1ab394" x="0" y="7.111111111111111" width="2.3" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="3.3" y="10.666666666666668" width="2.3" height="5.333333333333333"></rect><rect fill="#1ab394" x="6.6" y="0" width="2.3" height="16"></rect><rect fill="#d7d7d7" x="9.899999999999999" y="5.333333333333334" width="2.3" height="10.666666666666666"></rect><rect fill="#1ab394" x="13.2" y="7.111111111111111" width="2.3" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="16.5" y="0" width="2.3" height="16"></rect><rect fill="#1ab394" x="19.799999999999997" y="3.555555555555557" width="2.3" height="12.444444444444443"></rect><rect fill="#d7d7d7" x="23.099999999999998" y="10.666666666666668" width="2.3" height="5.333333333333333"></rect><rect fill="#1ab394" x="26.4" y="7.111111111111111" width="2.3" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="29.7" y="12.444444444444445" width="2.3" height="3.5555555555555554"></rect></svg>
                                <h5><strong>169</strong> Message Poster</h5>
                            </div>
                            <div class="col-md-6">
                                <span class="line" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><polygon fill="#1ab394" points="0 15 0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666 32 15"></polygon><polyline fill="transparent" points="0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666" stroke="#169c81" stroke-width="1" stroke-linecap="square"></polyline></svg>
                                <h5><strong>28</strong> Information relative au post</h5>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-md">
                        <h4>Discussion</h4>
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge badge-primary">16</span>
                                    sortie moto
                                </li>
                                <li class="list-group-item ">
                                    <span class="badge badge-info">12</span>
                                    Camping
                                </li>
                                <li class="list-group-item">
                                    <span class="badge badge-warning">7</span>
                                    Road trip
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="theme-config">
        <div class="theme-config-box">
            <div class="spin-icon">
                <i class="fa fa-cogs fa-spin"></i>
            </div>
            <div class="skin-settings">
                <div class="title">Configuration <br>
                <small style="text-transform: none;font-weight: 400">
                    Config box designed for demo purpose. All options available via code.
                </small></div>
        </div>
<?php $this->stop('main_content') ?>
