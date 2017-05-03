<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
    <div class="container-fluid">
        <div class="row">
        <h2 class="text-center">Labonnesortie</h2>
        <div class="container" style="border-top:2px solid #036e7f;">
            <div class="col-md-6">
                <h1>Laissez nous un message</h1>
                <br />
                <?php var_dump($_POST) ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nom" placeholder="Pseudo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mail" placeholder="Mail">
                    </div>
                    <div class="form-group">
                        <textarea name="contenus" id="" cols="30" rows="10" class="form-control" placeholder="Texte message .."></textarea>
                    </div>
                    <div class="col-md-6 col-md-push-3">
                        <input class="form-control btn btn-success" type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Site réalisé par les 4 fantastiqes de la Madelaine</h2>
                <p>Retrouvez-nous :</p>
                <div>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2529.9536265191095!2d3.073247951170044!3d50.64655238099581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c32a7328783e49%3A0x456a8a96b2b14da5!2s105+Avenue+de+la+R%C3%A9publique%2C+59110+La+Madeleine!5e0!3m2!1sfr!2sfr!4v1486024653664" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></p>
            </div>
        </div>
    </div>
    <?php
    $mail = 'labonnesortie@yopmail.com'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = $_POST['mail'];
$message_html = "<html><head></head><body><p>".$_POST['contenus']."</p></body></html>";
//==========
 
//=====Création de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = $_POST['nom'];
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"WeaponsB\"<".$_POST['mail'].">".$passage_ligne;
$header.= "Reply-to: \"WeaponsB\" <labonnesortie@yopmail.com>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
 
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
 
//=====Ajout du message au format HTML.
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
 
//=====On ferme la boundary alternative.
$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
//==========
 
 
 
$message.= $passage_ligne."--".$boundary.$passage_ligne;
 
//=====Ajout de la pièce jointe.
$message.= "Content-Type: image/jpeg; name=\"image.jpg\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: base64".$passage_ligne;
$message.= "Content-Disposition: attachment; filename=\"image.jpg\"".$passage_ligne;
//$message.= $passage_ligne.$attachement.$passage_ligne.$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne; 
//========== 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
?>

<?php $this->stop('main_content'); ?>
