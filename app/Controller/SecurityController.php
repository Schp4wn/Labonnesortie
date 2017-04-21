<?php

namespace Controller;

use \W\Controller\Controller;
use Model\UserModel;

class SecurityController extends Controller
{
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
}
