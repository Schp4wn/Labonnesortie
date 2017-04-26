<?php $this->layout('layout', ['title' => 'Un évènement']); ?>

<?php $this->start('main_content'); ?>

    <div class="container">
<?php// var_dump($w_user); ?>
    <h1>Profil : <?= $w_user['firstname'];?>  <?= $w_user['lastname']; ?></h1>
    
            <div class="row">
                <div class="col-lg-6">  
                    <?php if(isset($profil_event)){  ?>
                        <?php foreach( $profil_event as $event) { ?>
                            
                            <h1><?= $event['title']; ?></h1>
                            <p><?php echo $event['event'] ?></p>
                            <div>
                                <img src="<?= $event['image']; ?>" alt="">
                            </div>
                            <p>Evenement posté le  <?php
                                    $datetime = new DateTime($event['post']);
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
                            <a class="btn btn-primary" href="<?= $this->url('event_update' , ['id' => $event['id'] ] ) ?>?redirect=profil_index">Modifier</a>
                            <a class="btn btn-danger"  href="<?= $this->url('event_delete', ['id' => $event['id'] ] )?>">Suprimer</a>
                        <?php } ?>

                    <?php } else { 
                        echo '<div><h1>Vous n\'avez pas ajouté d\'évènement.</h1></div>';
                            }
                    ?>
                </div>
            </div>

            <div class="col-lg-6">
                <h1>TEST</h1>
            </div>
             
        </div>
    </div>
  <?php var_dump($w_user['role']); ?>
  <?php var_dump( $profil_event );?>

<?php $this->stop('main_content'); ?>
