<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/slider.css') ?>">

</head>
<body>
	<?php if ($w_current_route != 'default_home'): ?>
		<header>
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo $this->url('default_frontPage'); ?>">La bonne sortie</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php if ($w_user): ?>
							<ul class="nav navbar-nav navbar-right to-profile">
								<li><a href="<?php echo $this->url('default_profile'); ?>">Profil</a></li>
							</ul>
						<?php else: ?>
							<ul class="nav navbar-nav form">
								<form class="" method="post">
									<div class="row">
										<div class="col-lg-4">
											<div class="form-group">
												<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
											</div><!-- /input-group -->
										</div><!-- /.col-lg-6 -->
										<div class="col-lg-4">
											<div class="form-group">
												<input type="password" class="form-control" name="password" placeholder="Mot de passe">
											</div><!-- /input-group -->
										</div><!-- /.col-lg-6 -->
										<div class="col-lg-4">
											<div class="input-group">
												<button class="btn" type="submit" name="button">Se connecter</button>
											</div><!-- /input-group -->
										</div><!-- /.col-lg-6 -->
									</div><!-- /.row -->
								</form>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo $this->url('security_register'); ?>">Pas encore de compte ?</a></li>
								<li><a href="<?php echo $this->url('security_forget'); ?>">Mot de passe oublié</a></li>
							</ul>
						<?php endif; ?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
	<?php endif; ?>

		<section>
			<?= $this->section('main_content') ?>
			<?= $this->section('sidebar') ?>
		</section>

		<footer>
			<script src="<?= $this->assetUrl('js/jquery-3.2.1.min.js') ?>" charset="utf-8"></script>
			<script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>" charset="utf-8"></script>
			<script src="<?= $this->assetUrl('js/jssor.slider-23.1.5.mini.js') ?>" charset="utf-8"></script>
			<script src="<?= $this->assetUrl('js/slider.js') ?>" charset="utf-8"></script>
			<script src="<?= $this->assetUrl('js/script.js') ?>" charset="utf-8"></script>
		</footer>
</body>
</html>
