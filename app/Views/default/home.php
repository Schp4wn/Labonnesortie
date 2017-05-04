<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
		<div class="demo-header">
				<div class="demo-header-content">
						<div class="container">
								<h1>Bienvenue sur LaBonneSortie !</h1>
								<hr class="colored">
								<p>Nous recensons toutes les sorties organiser dans le Nord est le Pas de Calais de la france !</p>
								<ul class="list-inline cta-list">
										<li class="list-inline-item">
												<a href="<?= $this->url('default_frontPage')?>" class="btn skip" id="puce">
											  <span class="hover-bg reset">
											    <span class="hover-text reset"><img src="<?= $this->assetUrl('img/moto.gif')?>" alt="" id="moto"></span>
											  </span>Acceder au Site -></a>
										</li>
									</ul>
								<div class="container pt-2 col-md-12" id="previews">
										<div class="row">
						            <table width="100%" border="0" cellspacing="0" cellpadding="0">
						              <tbody><br/>
														<div id="page">
													      <div class="contenu article">
													        <div class="conteneur-carte-coordonnees">
													          <div class="carte"><img src="<?= $this->assetUrl('img/carte-npdc-Recovered.png')?>" width="400" height="258" border="0">
													            <p class="dunkerque"><a href="<?= $this->url('default_frontPage')?>" title="Sortie à Dunkerque">Dunkerque</a></p>
													            <p class="lille"><a href="<?= $this->url('default_frontPage')?>" title="Sortie à Lille">Lille</a></p>
													            <p class="maubeuge"><a href="<?= $this->url('default_frontPage')?>" title="Sortie à Maubeuge">Maubeuge</a></p>
													            <p class="valenciennes"><a href="<?= $this->url('default_frontPage')?>" title="Sortie à Valenciennes">Valenciennes</a></p>
																			<p class="bethune"><a href="<?= $this->url('default_frontPage')?>" title="Sortie à Béthune">Béthune</a></p>
																			<p class="arras"><a href="<?= $this->url('default_frontPage')?>" title="Sortie à Arras">Arras</a></p>
													            <p class="boulogne"><a href="<?= $this->url('default_frontPage')?>" title="Sortie à Boulogne sur mer">Boulogne sur mer</a></p>
													          </div>
													        </div>
													      </div><br/><br/>
													<tr>
													<td> Cliquez sur une des villes pour rechercher une sortie</td>
												</tr>
						            </tbody></table>
														</div>
												</div>
						</div>
				</div>
		</div>
	</div>


		<!-- Core Scripts -->


		<!-- Plugin Scripts -->

		<!-- Vitality Theme Scripts -->

<?php $this->stop('main_content') ?>
