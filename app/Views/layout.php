<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<!-- CSS FILES  -->
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/default.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/profil_index.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/view.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/frontp.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/nav.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/main.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/eventUser.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/default.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/security.css') ?>">

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

	<!-- FAVICON -->
	<link rel="icon" type="img/png" href="<?= $this->assetUrl('img/fav.png') ?>" />


</head>
<body>
	<?php if ($w_current_route != 'default_home'): ?>
		<header>
			<div class="parent2">
				<?php if($w_user) : ?>
					<?php if($w_user['role'] === 'user') : ?>
						<div class="test1" >
							<a href="<?php echo $this->url('default_profile'); ?>" title="Afficher mon profil"><i class="fa fa-user fa-2x"></i></a>
						</div>
					<?php elseif($w_user['role'] === 'admin'): ?>
						<div class="test1">
							<a href="<?php echo $this->url('default_profile_admin'); ?>" title="Afficher mon profil"><i class="fa fa-user-secret fa-2x"></i></a>
						</div>
					<?php  endif; ?>
				<?php  else: ?> <!-- if($w_user) -->
						<div class="test1" >
							<a href="#" title="Me connecter"><i class="fa fa-user-plus fa-2x" data-toggle="modal" data-target="#modalLogin"></i></a>
						</div>
				<?php  endif; ?>
				<div class="test2">
					<a href="<?php echo $this->url('event_index'); ?>" title="Afficher les événements"><i class="fa fa-motorcycle fa-2x"></i></a>
				</div>
				<div class="test3">
					<a href="<?php echo $this->url('default_contact'); ?>" title="Nous contacter"><i class="fa fa-envelope-o fa-2x"></i></a>
				</div>
				<div class="test4">
					<a href="<?php echo $this->url('default_frontPage'); ?>" title="Retour à l'accueil"><i class="fa fa-home fa-2x"></i></a>
				</div>
				<div class="mask2">
					<i class="fa fa-bars fa-3x"></i>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="modalLoginLabel">Se connecter</h4>
					</div>
						<div class="modal-body">
							<ul>
								<form id="login-form" class="" method="post">
									<div class="row">
										<div class="col-md-6 col-md-push-3">
											<div class="form-group">
												<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" required>
											</div><!-- /input-group -->
										</div><!-- /.col-lg-6 -->
									</div><!-- /.row -->
									<div class="row">
										<div class="col-md-6 col-md-push-3">
											<div class="form-group">
												<input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
											</div><!-- /input-group -->
										</div><!-- /.col-lg-6 -->
									</div><!-- /.row -->
									<div class="row">
										<div class="col-md-6 col-md-push-4">
											<div class="input-group">
												<button id="button-login" class="btn" type="submit" name="button-login">Se connecter</button>
											</div><!-- /input-group -->
										</div><!-- /.col-lg-6 -->
									</div><!-- /.row -->
								</form>
								<li><a href="<?php echo $this->url('security_register'); ?>">Pas encore de compte ?</a></li>
								<li><a href="<?php echo $this->url('security_forget'); ?>">Mot de passe oublié</a></li>
							</ul>
						</div><!-- /.modal-body -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</ul>
		<?php else: ?><!-- $w_current_route != 'default_home' -->
						<?php endif; ?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</header>
		<section>
			<?= $this->section('main_content') ?>
		</section>

			<?php if ($w_current_route != 'default_home'): ?>
				<footer>
					<div class="container">
						<div class="row">
							<h4 class="text-center">Aussi sur :</h4>
							<ul class="list-inline text-center">
								<li><a href="#"><i class="fa fa-2x fa-facebook"></i> Facebook</a></li>
								<li><a href="#"><i class="fa fa-2x fa-twitter"></i> Twitter</a></li>
								<li><a href="#"><i class="fa fa-2x fa-youtube"></i> Youtube</a></li>
							</ul>
						<div id="sub-floor">
							<p class="text-center">Copyright LaBonneSortie © 2017</p>
						</div> <!-- #sub-floor -->
					</div> <!-- .row -->
				</div> <!-- .container -->

			<?php endif; ?>
			<script src="<?= $this->assetUrl('js/jquery-3.2.1.min.js') ?>" charset="utf-8"></script>
			<script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>" charset="utf-8"></script>
			<script src="<?= $this->assetUrl('js/nav.js') ?>" charset="utf-8"></script>
			<script src="<?= $this->assetUrl('js/script.js') ?>" charset="utf-8"></script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw-gYmqJqQ-8RYU_8LZoTNFyQ51_yWYCY&callback=initMap" type="text/javascript"></script>
			<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDw-gYmqJqQ-8RYU_8LZoTNFyQ51_yWYCY" type="text/javascript"></script>
			<script src="<?= $this->assetUrl('js/autocomplete.js') ?>" charset="utf-8"></script>
			<script src="<?= $this->assetUrl('js/jquery.validate.min.js') ?>" charset="utf-8"></script>
			<script src="<?= $this->assetUrl('js/additional-methods.min.js') ?>" charset="utf-8"></script>
			<script src="<?= $this->assetUrl('js/script.js') ?>" charset="utf-8"></script>
			<?= $this->section('javascript') ?> <!--AIzaSyDw-gYmqJqQ-8RYU_8LZoTNFyQ51_yWYCY-->
		</footer>

	</div>
</body>
</html>
