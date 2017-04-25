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
												<a href="#previews" class="btn btn-primary page-scroll-demo">Nos Sorties</a>
										</li>
										<li class="list-inline-item">
												<a href="#previews" class="btn btn-primary page-scroll-demo">Plus d'infos</a>
										</li>
								</ul>
								<ul>
								<li class="list-inline-item">
										<a href="#previews" class="btn btn-primary page-scroll-demo">je ne sais plus !</a>
								</li>
							</ul>
								<div class="container pt-2 col-md-12" id="previews">
										<div class="row">
						            <table width="100%" border="0" cellspacing="0" cellpadding="0">
						              <tbody><tr>
						                <td align="center">
						                  <img name="" src="<?= $this->assetUrl('img/carte.png')?>" width="545" height="353" border="0" usemap="#m_reg17">
														</td>
						              </tr>
													<tr>
													<td> Cliquez sur une des villes pour rechercher une sortie</td>
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
