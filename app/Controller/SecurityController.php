<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UsersModel;

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

        if (!empty($_POST) ) {
            $firstname  = trim($_POST['firstname']);
            $lastname   = trim($_POST['lastname']);
            $username   = trim($_POST['username']);
            $email      = trim($_POST['email']);
            $password   = trim($_POST['password']);
            $cfpassword = trim($_POST['cfpassword']);

            $user_manager = new UserModel();  //on dois crée User model et m'herié de W de base '

            $errors = [];
                if ( $user_manager->emailExists($email) || $user_manager->usernameExists($username) ) {
                    $errors['exists'] = "Lemail ou l'username existe deja";
                }

                if ( empty($username) || !filter_var($email, FILTER_VALIDATE_EMAIL) ){
                $errors['username'] = "L'email ou l'username sont vide ou invalide";
                }

                if ( $password !== $cfpassword ){
                $errors['password'] = "Les mots de passe ne correspondent pas";
                }
            
            if(empty($errors)){
                $auth_manager = new W\Security\AuthentificationModel();

                  //si il nya pas derreur on inscrit lutilisateur en bdd
                  $user_manager->insert([
                      'username' => $username,
                      'email'    => $email ,
                      'password' => $auth_manager->hashPassword($password),
                      'role'     => 'admin'
                  ]);

                  $message = ["Vous etes bien inscris"];
            }else{

                $message = $errors;
            }
            
          }
        $this->show('security/register' , ['message' => $message , 'username' => $username , 'email' => $email ]);
    }

    
}