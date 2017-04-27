<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<div class="container">

  <form class="col-lg-7" method="POST">

    <div class="form-group <?= (isset($message['lastname'])) ? 'has-error' : ''?>">
      <label class="control-label" for="lastname">Nom :</label>
      <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $lastname  ?>">
      <?= (isset($message['lastname'])) ? '<span class="help-block">'.$message['lastname'].' .</span>'  : '' ?>
    </div>

    <div class="form-group <?= (isset($message['firstname'])) ? 'has-error' : ''?>">
      <label class="control-label" for="firstname">Prenom :</label>
      <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $firstname  ?>">
      <?= (isset($message['firstname'])) ? '<span class="help-block">'.$message['firstname'].' .</span>'  : '' ?>
    </div>

    <div class="form-group <?= (isset($message['username'])) ? 'has-error' : ''?>">
      <label class="control-label" for="username">Pseudo :</label>
      <input type="text" class="form-control" id="username" name="username" value="<?= $username  ?>">
      <?= (isset($message['username'])) ? '<span class="help-block">'.$message['username'].' .</span>'  : '' ?>
    </div>

    <div class="form-group<?= (isset($message['email'])) ? 'has-error' : ''?> ">
      <label for="email">Email :</label>
      <input type="text" class="form-control" id="email" name="email" value="<?= $email ?>">
      <?= (isset($message['email']) ) ? '<span class="help-block">'.$message['email'].' .</span>'  : '' ?>
    </div>

    <div class="form-group">
      <label for="password">Mot de passe  :</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
      <label for="cfpassword">Confirmation du Mot de passe  :</label>
      <input type="password" class="form-control" id="cfpassword" name="cfpassword">
    </div>

    <input type="submit" class="btn btn-submit" value="Valider">

  </form>
</div>

<?php //var_dump($message); ?>

  <?php
       if ( $message['success'] ) 
       {
          echo '<h1 class="text-success">' . $mess . '</h1>'; 
       }
   ?>

<?php $this->stop('main_content') ?>