<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
    <div class="container">
        <div class="row">
        <div class="col-lg-8">
            <h2>Site réalisé par les 4 fantastiqes de la Madelaine</h2>
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde deleniti doloribus hic ex, facere id mo</h1>    
        <div>
            <img class="img-responsive" src="http://www.dailymars.net/wp-content/uploads/2015/08/Les-4-Fantastiques.jpeg" alt="">
        </div>
        
        <h1>Laissez nous un mail !</h1>
        <label for="mail">Mail :</label>
        <input type="mail" class="form-control">

        <h1>ou laisez nous un message</h1>
        <div class="form-group">
            <input type="text" class="form-control">
            <br />
            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        
        
    </div>
<?php $this->stop('main_content'); ?>
