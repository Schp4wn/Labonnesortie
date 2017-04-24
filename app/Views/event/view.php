<?php $this->layout('layout', ['title' => 'Un évènement']); ?>

<?php $this->start('main_content'); ?>

	<div class="container">
		 <h1>Ici la vue d'un Article</h1>
			<p><?php echo $event['event'] ?></p>
            <p>le <?php
					$datetime = new DateTime($event['date_time']);
					// La class IntlDateFormatter est disponible dans l'extension php_intl. Il faut donc vérifier qu'elle soit bien installée dans le php.ini (extension=php_intl.dll)
					// http://benjamin.leveque.me/formater-une-date-avec-php-5-3-l10n-partie-2.html
					$intl = new IntlDateFormatter(
							'fr_FR',
							IntlDateFormatter::FULL,
							IntlDateFormatter::MEDIUM
					);
					echo $intl->format($datetime);
				?>
			</p>
	</div>
  

<?php $this->stop('main_content'); ?>
