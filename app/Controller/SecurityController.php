<?php

namespace Controller;

use Model\UserModel;
use \W\Controller\Controller;

class SecurityController extends Controller
{
    public function register()
    {
        //traitement de notre formulaire ici conexion
        $firstname = null;
        $lastname  = null;
        $username  = null;
        $email     = null;
        $password  = null;
        $message   = null;

        if (!empty($_POST) ) {
            $firstname  = trim($_POST['firstname']);
            $lastname   = trim($_POST['lastname']);
            $username   = trim($_POST['username']);
            $email      = trim($_POST['email']);
            $password   = trim($_POST['password']);
            $cfpassword = trim($_POST['cfpassword']);


            $user_manager = new UserModel();  //on dois crée User model et m'herié de W de base

            $errors = [];
                if (strlen($firstname) < 2 ) {
                    $errors['firstname'] = "Le prenom doit comporter au moins 2 caractères.";
                }
                if (strlen($lastname) < 2 ) {
                    $errors['lastname'] = "Le nom doit comporter au moins 2 caratères.";
                }
                if ( $user_manager->emailExists($email) || $user_manager->usernameExists($username) ) {
                    $errors['exists'] = "Lemail ou l'username existe deja";
                }
                if ( empty($email)) {
                    $errors['email'] = "L'email est vide";
                }
                if ( empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) ){
                    $errors['username'] = "L'email ou l'username sont vide ou invalide";
                }

                if ( $password != $cfpassword ){
                    $errors['password'] = "Les mots de passe ne correspondent pas";
                }

            if(empty($errors)){
                $auth_manager = new \W\Security\AuthentificationModel();
                  //si il n'y a pas d'erreur on inscrit lutilisateur en bdd
                  $user_manager->insert([
                      'firstname'=> $firstname,
                      'lastname' => $lastname,
                      'username' => $username,
                      'email'    => $email ,
                      'role'     => 'admin',
                      'password' => $auth_manager->hashPassword($password) //$auth_manager->hashPassword() pbm avec hashage de mt d passe

                  ]);


                  $message = ["Vous etes bien inscris"];
            }else{

                $message = $errors;
            }

          }
        $this->show('security/register' , ['message' => $message ,'firstname'=>$firstname,'lastname' => $lastname,'username' => $username , 'email' => $email ]);
    }

    /**
     * Permet la connexion d'un utilisateur
    */
    public function login()
    {
        if (!empty($_POST)) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $auth_manager = new \W\Security\AuthentificationModel();

            $user_id = $auth_manager->isValidLoginInfo($username, $password);
            if ($user_id) { // Si le couple username/password est valid
                $user_manager = new UserModel();
                $user = $user_manager->find($user_id); // Récupére toutes les infos de l'utilisateur qui se connecte
                $auth_manager->logUserIn($user); // La connexion se fait
                $this->redirectToRoute('default_home');
            }
        }

        //var_dump($this->getUser());

        $this->show('security/login');
    }

    /**
     * Déconnexion de l'utilisateur
    */
    public function logout()
    {
        $auth_manager = new \W\Security\AuthentificationModel();
        $auth_manager->logUserOut(); // Déconnecte l'utilisateur connecté
        $this->redirectToRoute('default_home');
    }

    /**
    * Permet la connexion d'un utilisateur
    */
    public function forget()
    {
      $user_manager = new UserModel();
      $user_id = new UserModel();
      if (!empty($_POST) && isset($_POST['forgetSend'])) { // On vérifie le 1er formulaire qui doit envoyer le mail avec un lien pour redéfinir le password
        $email = $_POST['email'];
        if ($user = $user_manager->getUserByUsernameOrEmail($email)) {
          // Créer un token_forget et date_forget dans la bdd
          $token_forget = md5(time() . uniqid()); // Le token
          // echo strtotime(date('Y-m-d h:i:s') . ' +1 month');
          $date_forget = date('Y-m-d h:i:s', time() + 3600 * 24); // Date d'expiration du token
          // J'envoie le token et sa date d'expiration dans la bdd pour l'utilisateur
          $user_manager->update([
                 /* Modifie une ligne en fonction d'un identifiant
                 -Le premier argument est un tableau associatif de valeurs à insérer
                  -Le second est l'identifiant de la ligne à modifier
                  -Retourne les données mises à jour
                 -public function update(array $data, $id, $stripTags = true)*/

                  'token_forget' =>$token_forget,
                   'date_forget' =>$date_forget
                                ] , $user['id'] );// l'id est $user
          echo "Voici le lien vous permettant de redéfinir votre mot de passe : <a href='http://localhost/Labonnesortie/public/forget?token=".$token_forget."'>http://localhost/Labonnesortie/public/forget?token=".$token_forget."</a>";
          } else {
            echo 'L\'email n\'existe pas';
          }
        }


        if (!empty($_POST) && isset($_POST['forgetPassword'])) {
          $token = $_GET['token'];
          $password = $_POST['password'];
          $cfpassword = $_POST['cfpassword'];

          if ($user_id->isValidToken($token)) {
            if ($password == $cfpassword) { // Je vérifie que les deux champs mot de passe soit identique
              $user_manager->changeUserPassword( $this->getUser()['id'], $password);   // a la base $user_id['id']
              // Renvoyer un mail
            }
            var_dump($user_manager);
          } else {
            echo "Le token a expiré ou n'existe pas.";
          }
        }
        $this->show('security/forget');
      }
}
