<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


		<div class="demo-header">
				<div class="demo-header-content">
						<div class="container">
								<h1>Bienvenu sur LaBonneSortie !</h1>
								<hr class="colored">
								<p>Nous recensons toutes les sorties organiser dans le Nord est le Pas de Calais de la france !</p>
								<ul class="list-inline cta-list">
										<li class="list-inline-item">
												<a href="<?= $this->url('default_frontPage') ?>" class="btn btn-primary page-scroll-demo">Voir nos évènement !</a>
										</li>
										<li class="list-inline-item">
												<a href="docs/index.html" class="btn btn-primary page-scroll-demo">Plus d'infos</a>
										</li>
								</ul>
								<div class="container pt-2 col-md-12" id="previews">
										<div class="row">
						            <table>
						              <tbody><tr>
						                <td >&nbsp;</td>
						                <td> Cliquez sur une des villes pour rechercher une sortie</td>
						              </tr>
						           		</tbody></table><br/>
						            <table width="100%" border="0" cellspacing="0" cellpadding="0">
						              <tbody><tr>
						                <td align="center">
						                  <img name="" src="<?= $this->assetUrl('img/reg17.gif')?>" width="545" height="353" border="0" usemap="#m_reg17">
														</td>
						              </tr>
						            </tbody></table>
														</div>
												</div>
						</div>
				</div>
		</div>


		<!-- Core Scripts -->


		<!-- Plugin Scripts -->

		<!-- Vitality Theme Scripts -->

<?php $this->stop('main_content') ?>
