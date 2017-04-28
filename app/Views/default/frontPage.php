<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	
		  <div class="container-fluid">
    <div id="frontPage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9">
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
    </div>

    <div class="col-lg-3">
      <div class="sidebar-panel" style="min-height: 1181px;">
        <div>
            <h4>Les dix dernier Messages ->nb message <span class="badge badge-info pull-right">16</span></h4>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="<?= $this->assetUrl('img/course.gif') ?>">
                </a>
                <div class="media-body">
                    message poste
                    <br>
                    <small class="text-muted">heure h:m.s</small>
                </div>
            </div>
        </div>
      <div class="theme-config">
        <div class="theme-config-box">
          <div class="spin-icon">
              <i class="fa fa-envelope fa-spin"></i>
          </div>
        <div class="skin-settings">
          <div class="title">Configuration <br>
          <small style="text-transform: none;font-weight: 400">Config box designed for demo purpose. All options available via code.</small>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.row -->
  <div class="home">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h2>Balade du jour</h2>

<div class="well well-small badge-partial">
	<div class="center">
		<a href="/balade-moto/ballade-du-13-juin-2015-week-end-normandie-3">
			<img src="/uploads/trip/trip-3357.png" alt="">
		</a>
	</div>
	<h3>
		<a href="/balade-moto/ballade-du-13-juin-2015-week-end-normandie-3" title="Ballade du 13 juin 2015 ( week end normandie 3 )">Ballade du 13 juin 20...</a>
	</h3>
	<table class="table table-bordered table-condensed">
		<tbody><tr>
			<td class="strong">Distance</td>
			<td><i class="icon-road"></i> <b>87.92</b> km</td>
		</tr>
		<tr>
			<td colspan="2">
				<i class="icon-heart"></i> <b>0</b> vote			</td>
		</tr>
		<tr>
			<td colspan="2">
				<i class="icon-eye-open"></i> <b>706</b> vues			</td>
		</tr>
        <tr>
            <td class="strong">Créée par</td>
            <td>
                <a href="/profil/dom94">dom94</a>
            </td>
        </tr>
	</tbody></table>
</div>

<a href="/balade-moto" class="btn btn-small pull-right"><span class="icon-road"></span> Voir toutes les balades</a>
<div class="clear"></div>			</div>
			<div class="span3">
				<h2>Prochaine sortie</h2>

<div class="well well-small badge-partial">
	<div class="center">
		<a href="/sortie-moto/sortie-gourmande-2-jours">
			<img src="/uploads/trip/trip-7734.png" alt="">
		</a>
	</div>
	<h3>
		<a href="/sortie-moto/sortie-gourmande-2-jours" title="Sortie gourmande (2 jours)">Sortie gourmande (2 jours)</a>
	</h3>
	<table class="table table-bordered table-condensed">
		<tbody><tr>
			<td class="strong">Distance</td>
			<td><i class="icon-road"></i> <b>635.00</b> km</td>
		</tr>
		<tr>
			<td class="strong">Organisateur</td>
			<td>
				<a href="/profil/extraterrestre">extraterrestre</a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<i class="icon-user"></i> <b>1</b> participant			</td>
		</tr>
	</tbody></table>
</div>
										<a href="/sortie-moto" class="btn btn-small pull-right"><span class="icon-bullhorn"></span> Voir toutes les sorties</a>
								<div class="clear"></div>
			</div>
			<div class="span6">
				<h2>Photo du jour</h2>
<div class="thumbnail well well-small">
	<img src="/uploads/photo/homepage/fe2874bcfd29c8ba3c1c6c9cf9417db7d5dd4b53.jpg" height="340" alt="">
	<h3><a href="/balade-moto/ajaccio-porto-vico-ajaccio">Calanche de Piana</a></h3>
	<p>Par <a href="/profil/morann">MORANN</a></p>
</div>			</div>
		</div>

		<h2 class="margin-top-10px">Top contributeurs</h2>
		<div class="row">
			<div class="span3">
			<div class="well well-small">
	<div class="row-fluid">
		<div class="span4 center">
			<a href="/profil/jaldo83"><img src="/uploads/avatar/thumbnail/565a374a413b19a274c23e068a918b3deb66c9fa.jpg" alt=""></a>
		</div>
		<div class="span8">
			<p class="lead no-margin">
				<a href="/profil/jaldo83">jaldo83</a>
			</p>
			<p><span class="badge badge-success">340 200</span> points</p>
						<p><span class="badge badge-info">43</span> balades</p>
		</div>
	</div>
</div>
		</div>
			<div class="span3">
			<div class="well well-small">
	<div class="row-fluid">
		<div class="span4 center">
			<a href="/profil/marmotte33"><img src="/uploads/avatar/thumbnail/c338456bb2fd077fac258cfcb61c219dca4785d6.gif" alt=""></a>
		</div>
		<div class="span8">
			<p class="lead no-margin">
				<a href="/profil/marmotte33">marmotte33</a>
			</p>
			<p><span class="badge badge-success">282 150</span> points</p>
						<p><span class="badge badge-info">43</span> balades</p>
		</div>
	</div>
</div>
		</div>
			<div class="span3">
			<div class="well well-small">
	<div class="row-fluid">
		<div class="span4 center">
			<a href="/profil/martinopdebeeck"><img src="/uploads/avatar/thumbnail/ece90ab05a5545765b975e96590bedf1bca83365.jpg" alt=""></a>
		</div>
		<div class="span8">
			<p class="lead no-margin">
				<a href="/profil/martinopdebeeck">MartinOpdebeeck</a>
			</p>
			<p><span class="badge badge-success">222 550</span> points</p>
						<p><span class="badge badge-info">22</span> balades</p>
		</div>
	</div>
</div>
		</div>
			<div class="span3">
			<div class="well well-small">
	<div class="row-fluid">
		<div class="span4 center">
			<a href="/profil/xjr-tito"><img src="/uploads/avatar/thumbnail/74c8f83126701deed0a2329cbd88a8f12fc41977.jpg" alt=""></a>
		</div>
		<div class="span8">
			<p class="lead no-margin">
				<a href="/profil/xjr-tito">XJR Tito</a>
			</p>
			<p><span class="badge badge-success">215 700</span> points</p>
						<p><span class="badge badge-info">149</span> balades</p>
		</div>
	</div>
</div>
		</div>
	</div>	</div>
</div>
  </div><!-- /.container-fluid -->
</div><!-- /#frontPage -->

<?php $this->stop('main_content') ?>
